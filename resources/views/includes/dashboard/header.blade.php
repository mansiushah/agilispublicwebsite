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

    // Get full path (e.g. "Ad-public-website/en-ca/dashboard")
    $uri = request()->path();

    // Remove base folder name
    $uri = Str::after($uri, 'Ad-public-website/');

    // Remove existing locale
    foreach ($locales as $code => $info) {
        if (Str::startsWith($uri, $code . '/')) {
            $uri = Str::after($uri, $code . '/');
        }
    }

    // Clean path (example: "dashboard" or "dashboard/profile")
    $cleanPath = ltrim($uri, '/');
@endphp
<header class="header">
    <div class="container">
        <nav class="navbar navbar-expand-md">
            <div class="d-flex align-items-center">
                <a class="navbar-brand" href="{{ locale_route('dashboard') }}">
                    <img src="{{ url('public/assets/img/Logo.svg') }}" alt="logo" class="img-fluid">
                </a>
                <a href="#" class="dashboard_sidebar_menu_toggle ml-2">
                    <img src="{{ url('public/assets/img/sidebar-menu-bar.png') }}" alt="sidebar-menu-bar" class="img-fluid">
                </a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ locale_route('dashboard') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="https://chessmafia.com/php/M-0402/Ad-Agilis/Ad-agilis">Ad Portal</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('api-doc')}}">API DOCS</a>
                    </li>

                    <!-- COUNTRY DROPDOWN -->
                    <li class="nav-item dropdown">
                        <div class="drodwn_flg">
                            <div class="dropdown">

                                <!-- CURRENT SELECTED COUNTRY BUTTON -->
                                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ url('public/assets/img/' . $locales[$currentLocale]['flag']) }}"
                                         alt="flag" class="img-fluid">
                                    <span class="pl-2">{{ $locales[$currentLocale]['label'] }}</span>
                                </button>

                                <!-- DROPDOWN MENU -->
                                <div class="dropdown-menu">
                                    @foreach($locales as $code => $info)

                                        <a class="dropdown-item {{ $currentLocale == $code ? 'active' : '' }}"
                                           href="{{ url($code . '/' . $cleanPath) }}">
                                            <img src="{{ url('public/assets/img/' . $info['flag']) }}" class="img-fluid">
                                            <span>{{ $info['label'] }}</span>
                                        </a>

                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </li>

                </ul>
            </div>

        </nav>
    </div>
</header>


<style>
    .dropdown-item.active {
        background: #f2f2f2;
        font-weight: bold;
    }
</style>
