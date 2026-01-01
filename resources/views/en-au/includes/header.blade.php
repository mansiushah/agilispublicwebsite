@php
    use Illuminate\Support\Str;

    // Available locales
    $locales = [
        'en-us' => ['label' => 'United States', 'flag' => 'UK-Flag.svg'],
        'en-au' => ['label' => 'Australia', 'flag' => 'australia-flag.png'],
        'en-ca' => ['label' => 'Canada', 'flag' => 'canada-flag.png'],
        'en-gb' => ['label' => 'Great Britain', 'flag' => 'united-kingdom-flag.png'],
    ];

    // Detect current locale (fallback to en-us)
    $currentLocale = request()->route('locale') ?? 'en-us';

    // Get full current path (ex: "Ad-public-website/en-au/cookie-policy")
    $uri = request()->path();

    // Remove base folder name
    $uri = Str::after($uri, 'Ad-public-website/');

    // Remove locale prefix from URI
    foreach ($locales as $code => $info) {
        if (Str::startsWith($uri, $code . '/')) {
            $uri = Str::after($uri, $code . '/');
        }
    }

    // Clean path (example: "dashboard" or "privacy-policy")
    $cleanPath = ltrim($uri, '/');

    // IMPORTANT FIX — If user is on root locale page (/en-au), $cleanPath becomes "en-au". Avoid duplicates.
    if (array_key_exists($cleanPath, $locales)) {
        $cleanPath = ''; // Reset to empty
    }
@endphp
<header class="header">
    <div class="container">
        <nav class="navbar navbar-expand-md">

            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ url('public/assets/img/Logo.svg') }}" alt="logo" class="img-fluid">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ml-auto">

                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#features">FEATURES</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#download">DOWNLOAD</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/api-doc') }}">API DOCS</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link landing_login_btn" href="{{ locale_route('login') }}">LOGIN</a>
                    </li>

                    <!-- COUNTRY DROPDOWN -->
                    <li class="nav-item dropdown">
                        <div class="dropdown">

                            <!-- CURRENT SELECTED COUNTRY BUTTON -->
                            <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">
                                <img src="{{ url('public/assets/img/' . $locales[$currentLocale]['flag']) }}"
                                     class="img-fluid">
                                <span class="pl-2">{{ $locales[$currentLocale]['label'] }}</span>
                            </button>

                            <!-- DROPDOWN MENU -->
                            <div class="dropdown-menu">

                                @foreach($locales as $code => $info)

                                    @php
                                        // FIX: If cleanPath is empty → avoid /code/code
                                        $targetUrl = $cleanPath === ''
                                            ? url($code)
                                            : url($code . '/' . $cleanPath);
                                    @endphp

                                    <a class="dropdown-item {{ $currentLocale == $code ? 'active' : '' }}"
                                       href="{{ $targetUrl }}">
                                        <img src="{{ url('public/assets/img/' . $info['flag']) }}" class="img-fluid">
                                        <span>{{ $info['label'] }}</span>
                                    </a>

                                @endforeach

                            </div>

                        </div>
                    </li>

                </ul>

            </div>

        </nav>
    </div>
</header>



