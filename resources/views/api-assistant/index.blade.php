<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Agilis API Assistant</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .code-block {
            background: #1e293b;
            border-radius: 0.5rem;
            overflow: hidden;
        }
        .code-header {
            background: #334155;
            padding: 0.5rem 1rem;
            font-size: 0.75rem;
            color: #cbd5e1;
            font-family: monospace;
        }
        .code-content {
            padding: 1rem;
            overflow-x: auto;
        }
        .code-content pre {
            margin: 0;
            color: #e2e8f0;
            font-family: 'Courier New', monospace;
            font-size: 0.875rem;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-slate-50 to-slate-100">
    <div id="app" class="flex flex-col h-screen">
        <!-- Header -->
        <div class="bg-white border-b border-slate-200 px-6 py-4 shadow-sm">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="bg-blue-600 p-2 rounded-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold text-slate-900">Agilis API Assistant</h1>
                        <p class="text-sm text-slate-600">Get help with API integration</p>
                    </div>
                </div>
                <button onclick="clearChat()" class="px-4 py-2 text-sm text-slate-600 hover:text-slate-900 border border-slate-300 rounded-lg hover:bg-slate-50">
                    Clear Chat
                </button>
            </div>
        </div>

        <!-- Messages -->
        <div id="messages" class="flex-1 overflow-y-auto px-6 py-4">
            <div class="max-w-4xl mx-auto space-y-4">
                <!-- Messages will be inserted here -->
            </div>
        </div>

        <!-- Loading Indicator -->
        <div id="loading" class="hidden px-6">
            <div class="max-w-4xl mx-auto">
                <div class="flex justify-start">
                    <div class="bg-white rounded-2xl px-4 py-3 shadow-sm border border-slate-200">
                        <svg class="w-5 h-5 text-blue-600 animate-spin" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Questions (shown initially) -->
        <div id="quickQuestions" class="px-6 pb-4">
            <div class="max-w-4xl mx-auto">
                <p class="text-sm text-slate-600 mb-2">Quick questions:</p>
                <div class="flex flex-wrap gap-2">
                    <button onclick="askQuestion('Show me a PHP example')" class="px-4 py-2 bg-white border border-slate-300 rounded-lg text-sm text-slate-700 hover:border-blue-500 hover:text-blue-600 transition-colors">
                        Show me a PHP example
                    </button>
                    <button onclick="askQuestion('What are the required parameters?')" class="px-4 py-2 bg-white border border-slate-300 rounded-lg text-sm text-slate-700 hover:border-blue-500 hover:text-blue-600 transition-colors">
                        What are the required parameters?
                    </button>
                    <button onclick="askQuestion('How do I upload an image?')" class="px-4 py-2 bg-white border border-slate-300 rounded-lg text-sm text-slate-700 hover:border-blue-500 hover:text-blue-600 transition-colors">
                        How do I upload an image?
                    </button>
                    <button onclick="askQuestion('Show me authentication example')" class="px-4 py-2 bg-white border border-slate-300 rounded-lg text-sm text-slate-700 hover:border-blue-500 hover:text-blue-600 transition-colors">
                        Show me authentication example
                    </button>
                </div>
            </div>
        </div>

        <!-- Input -->
        <div class="bg-white border-t border-slate-200 px-6 py-4">
            <div class="max-w-4xl mx-auto">
                <form onsubmit="sendMessage(event)" class="flex gap-2">
                    <input
                        type="text"
                        id="messageInput"
                        placeholder="Ask about the API..."
                        class="flex-1 px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        required
                    />
                    <button
                        type="submit"
                        id="sendButton"
                        class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 disabled:opacity-50 disabled:cursor-not-allowed transition-colors flex items-center gap-2"
                    >
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        let conversationId = null;

        // Initialize with welcome message
        window.addEventListener('DOMContentLoaded', async () => {
            try {
                const response = await fetch('{{ route("api-assistant.welcome") }}');
                const data = await response.json();
                if (data.success) {
                    conversationId = data.conversation_id;
                    addMessage('assistant', data.message);
                }
            } catch (error) {
                console.error('Error loading welcome message:', error);
            }
        });

        async function sendMessage(event) {
            event.preventDefault();
            
            const input = document.getElementById('messageInput');
            const message = input.value.trim();
            
            if (!message) return;

            // Hide quick questions after first message
            document.getElementById('quickQuestions').style.display = 'none';

            // Add user message to UI
            addMessage('user', message);
            input.value = '';

            // Disable input and show loading
            setLoading(true);

            try {
                const response = await fetch('{{ route("api-assistant.chat") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({
                        message: message,
                        conversation_id: conversationId
                    })
                });

                const data = await response.json();

                if (data.success) {
                    conversationId = data.conversation_id;
                    addMessage('assistant', data.message);
                } else {
                    addMessage('assistant', 'Sorry, I encountered an error. Please try again.');
                }
            } catch (error) {
                console.error('Error:', error);
                addMessage('assistant', 'Sorry, I encountered an error. Please try again.');
            } finally {
                setLoading(false);
            }
        }

        function addMessage(role, content) {
            const messagesContainer = document.getElementById('messages').firstElementChild;
            const messageDiv = document.createElement('div');
            messageDiv.className = `flex ${role === 'user' ? 'justify-end' : 'justify-start'}`;
            
            const bubble = document.createElement('div');
            bubble.className = `max-w-3xl rounded-2xl px-4 py-3 ${
                role === 'user'
                    ? 'bg-blue-600 text-white'
                    : 'bg-white text-slate-900 shadow-sm border border-slate-200'
            }`;
            
            bubble.innerHTML = formatMessage(content);
            messageDiv.appendChild(bubble);
            messagesContainer.appendChild(messageDiv);
            
            // Scroll to bottom
            messagesContainer.parentElement.scrollTop = messagesContainer.parentElement.scrollHeight;
        }

        function formatMessage(content) {
            // Parse code blocks
            const codeBlockRegex = /```(\w+)?\n([\s\S]*?)```/g;
            let formatted = content;
            
            formatted = formatted.replace(codeBlockRegex, (match, language, code) => {
                return `
                    <div class="code-block my-2">
                        <div class="code-header">${language || 'text'}</div>
                        <div class="code-content">
                            <pre>${escapeHtml(code.trim())}</pre>
                        </div>
                    </div>
                `;
            });
            
            // Convert newlines to <br> for text content
            formatted = formatted.replace(/\n/g, '<br>');
            
            return formatted;
        }

        function escapeHtml(text) {
            const div = document.createElement('div');
            div.textContent = text;
            return div.innerHTML;
        }

        function setLoading(isLoading) {
            const loading = document.getElementById('loading');
            const input = document.getElementById('messageInput');
            const button = document.getElementById('sendButton');
            
            if (isLoading) {
                loading.classList.remove('hidden');
                input.disabled = true;
                button.disabled = true;
            } else {
                loading.classList.add('hidden');
                input.disabled = false;
                button.disabled = false;
                input.focus();
            }
        }

        function askQuestion(question) {
            document.getElementById('messageInput').value = question;
            document.querySelector('form').dispatchEvent(new Event('submit'));
        }

        async function clearChat() {
            if (!confirm('Are you sure you want to clear the conversation?')) return;

            try {
                await fetch('{{ route("api-assistant.clear") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({
                        conversation_id: conversationId
                    })
                });

                // Clear UI
                document.getElementById('messages').firstElementChild.innerHTML = '';
                document.getElementById('quickQuestions').style.display = 'block';
                
                // Reload welcome message
                const response = await fetch('{{ route("api-assistant.welcome") }}');
                const data = await response.json();
                if (data.success) {
                    conversationId = data.conversation_id;
                    addMessage('assistant', data.message);
                }
            } catch (error) {
                console.error('Error clearing chat:', error);
            }
        }
    </script>
</body>
</html>