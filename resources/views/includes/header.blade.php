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
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{ url('public/assets/img/Logo.svg') }}" alt="logo" class="img-fluid">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#features">FEATURES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#download">DOWNLOAD</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/api-doc')}}">API DOCS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link landing_login_btn" href="{{url('login')}}">LOGIN</a>
                        </li>

                        <li class="nav-item dropdown">
                            <div class="drodwn_flg">
                                <div class="dropdown">
                                    <!-- <button class="btn dropdown-toggle" type="button" data-toggle="dropdown"
                                        aria-expanded="false">
                                        <img src="{{ url('public/assets/img/UK-Flag.svg')}}" alt="UK-Flag" class="img-fluid">
                                        <span class="pl-2">United States</span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ url('en-us') }}"><img src="{{ url('public/assets/img/UK-Flag.svg')}}"
                                                alt="UK-Flag" class="img-fluid"><span>United States</span></a>
                                        <a class="dropdown-item" href="{{ url('en-au') }}"><img src="{{ url('public/assets/img/australia-flag.png')}}"
                                                alt="australia-flag" class="img-fluid"><span>Australia</span></a>
                                        <a class="dropdown-item" href="{{ url('en-ca') }}"><img src="{{ url('public/assets/img/canada-flag.png')}}"
                                                alt="canada-flag" class="img-fluid"><span>Canada</span></a>

                                        <a class="dropdown-item" href="{{ url('en-gb') }}"><img src="{{ url('public/assets/img/united-kingdom-flag.png')}}"
                                                alt="united-kingdom-flag" class="img-fluid"><span>Great
                                                Britain</span></a>
                                    </div> -->
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
