<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class ApiAssistantController extends Controller
{
    private $apiDocumentation = <<<EOD
You are an expert API assistant for the Agilis API. Your purpose is to help developers integrate with the Agilis API only.

IMPORTANT INSTRUCTIONS:
- You may ONLY answer questions related to the Agilis API, API integration, programming/coding related to using this API, or general software development concepts that help with API usage.
- If asked about topics unrelated to the Agilis API or software development, politely decline and redirect: "I'm specifically designed to help with the Agilis API. I can answer questions about API integration, parameters, code examples, authentication, and best practices. What would you like to know about the Agilis API?"

## Create an Offer Endpoint

**Endpoint:** POST /v1/customers
**Base URL:** https://api.example.com
**Authentication:** Bearer token in Authorization header

### Parameters:

1. **category** (string, mandatory)
   - The category of the offer
   - Example: "Summer Sale"

2. **title** (string, mandatory)
   - The title of your offer
   - Example: "50% Off Everything"

3. **description** (string, optional)
   - A detailed description of the offer
   - Example: "Get half price off all summer items for a limited time only."

4. **offer_url** (string, mandatory)
   - A link where users can view the offer
   - Example: "https://example.com/offer"

5. **image** (file, optional)
   - An image representing the offer
   - Recommended size: 1080x1080px
   - Sent as multipart/form-data file upload

6. **location** (string, mandatory)
   - Target location for the offer
   - Example: "New York"

7. **radius** (string, mandatory)
   - Radius in miles around the target location
   - Example: "10"

8. **expiry_date** (string, mandatory)
   - The date when the offer will expire
   - Format: YYYY-MM-DD
   - Example: "2025-08-31"

9. **expiry_time** (string, optional)
   - The time when the offer will expire
   - Format: HH:mm
   - Example: "23:59"

10. **terms_conditions** (string, mandatory)
    - Terms and conditions for the offer
    - Example: "Valid until stocks last. Non-refundable."

### Response Format:

{
  "id": "offer_123456789",
  "category": "Summer Sale",
  "title": "50% Off Everything",
  "description": "Get half price off on all summer items for a limited time only.",
  "image_url": "https://cdn.example.com/offers/offer_123456789.jpg",
  "location": "New York",
  "radius": "10",
  "expiry_date": "2025-08-31",
  "expiry_time": "23:59",
  "terms_conditions": "Valid until stocks last. Non-refundable.",
  "created_at": "2025-08-19T10:30:00Z",
  "status": "true"
}

Your role is to:
- Answer questions about the API clearly and accurately
- Generate complete, working code examples in Python, Node.js, PHP, or other languages
- Help developers troubleshoot issues
- Provide best practices for API integration
- Be helpful, concise, and developer-friendly
EOD;

    /**
     * Handle chat message from the API assistant
     */
    public function chat(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:2000',
            'conversation_id' => 'nullable|string',
        ]);

        $conversationId = $request->conversation_id ?? uniqid('conv_');
        $userMessage = $request->message;

        // Retrieve conversation history from cache (expires after 1 hour)
        $messages = Cache::get("conversation_{$conversationId}", []);
        
        // Add user message to history
        $messages[] = [
            'role' => 'user',
            'content' => $userMessage
        ];

        try {
            // Call OpenAI API with GPT-4o Mini
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
                'Content-Type' => 'application/json',
            ])->timeout(30)->post('https://api.openai.com/v1/chat/completions', [
                'model' => 'gpt-4o-mini',
                'messages' => array_merge([
                    [
                        'role' => 'system',
                        'content' => $this->apiDocumentation
                    ]
                ], $messages),
                'temperature' => 0.7,
                'max_tokens' => 1000,
            ]);

            if ($response->failed()) {
                return response()->json([
                    'error' => 'Failed to get response from AI',
                    'details' => $response->json()
                ], 500);
            }

            $aiResponse = $response->json();
            $assistantMessage = $aiResponse['choices'][0]['message']['content'];

            // Add assistant message to history
            $messages[] = [
                'role' => 'assistant',
                'content' => $assistantMessage
            ];

            // Store conversation history in cache (keep last 10 messages)
            if (count($messages) > 20) {
                $messages = array_slice($messages, -20);
            }
            Cache::put("conversation_{$conversationId}", $messages, now()->addHour());

            return response()->json([
                'success' => true,
                'message' => $assistantMessage,
                'conversation_id' => $conversationId,
                'tokens_used' => [
                    'prompt' => $aiResponse['usage']['prompt_tokens'] ?? 0,
                    'completion' => $aiResponse['usage']['completion_tokens'] ?? 0,
                    'total' => $aiResponse['usage']['total_tokens'] ?? 0,
                ]
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'error' => 'An error occurred',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Clear conversation history
     */
    public function clearConversation(Request $request)
    {
        $request->validate([
            'conversation_id' => 'required|string',
        ]);

        Cache::forget("conversation_{$request->conversation_id}");

        return response()->json([
            'success' => true,
            'message' => 'Conversation cleared'
        ]);
    }

    /**
     * Get welcome message
     */
    public function welcome()
    {
        return response()->json([
            'success' => true,
            'message' => "Hello! I'm your Agilis API Assistant. I can help you with:\n\n• Understanding API endpoints and parameters\n• Generating code examples in Python, Node.js, PHP, and more\n• Troubleshooting integration issues\n• Best practices for creating offers\n\nWhat would you like to know about the Agilis API?",
            'conversation_id' => uniqid('conv_')
        ]);
    }
}