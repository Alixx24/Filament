<header>
    <div class="container">
        <div class="logo">
            <a href="{{ route('home') }}" class="text-decoration-none">
                <span class="logo-primary">Grow</span><span class="logo-secondary">vixo</span>
            </a>
        </div>
        <nav class="nav-menu" id="navMenu">
            <div class="close-btn fs-1" id="closeBtn" style="margin-right:190px !important;">&times;</div>
            <ul class="me-3">

                <li data-link="home" class="active">
                    <a class="menu-item me-2 fs-3" href="{{ route('home') }}">
                        <span class="fw-bold">خدمات</span>
                    </a>
                </li>

                <li data-link="chatgpt">
                    <a class="menu-item" href="{{ route('customer.pricing.chatgpt.index') }}">
                        <img src="/customer/images/cgatgpt.webp" alt="ChatGPT"
                            class="me-2 ms-2 mb-1 img-chatgpt-sidebar">
                        <span class="fw-bold">اکانت ChatGPT</span>
                    </a>
                </li>

                <li data-link="gemini">
                    <a class="menu-item" href="{{ route('customer.pricing.gemini.index') }}">
                        <img src="/customer/images/gemini.webp" alt="Gemini" class="me-2 ms-2 mb-1">
                        <span class="fw-bold">اکانت Gemini</span>
                    </a>
                </li>

                <li data-link="cursor">
                    <a class="menu-item" href="{{ route('customer.pricing.cursor.index') }}">
                        <img src="/customer/images/cursor.webp" alt="Cursor" class="me-2 ms-2 mb-1">
                        <span class="fw-bold">اکانت Cursor</span>
                    </a>
                </li>

                <li data-link="claude">
                    <a class="menu-item" href="{{ route('customer.pricing.claude.index') }}">
                        <img src="/customer/images/claude.webp" alt="Claude" class="me-2 ms-2 mb-1">
                        <span class="fw-bold">اکانت Claude</span>
                    </a>
                </li>

                <li data-link="spotify">
                    <a class="menu-item" href="{{ route('customer.pricing.spotify.index') }}">
                        <img src="/customer/images/spotify.webp" alt="Spotify" class="me-2 ms-2 mb-1">
                        <span class="fw-bold">اکانت Spotify</span>
                    </a>
                </li>

                <li data-link="tradingview">
                    <a class="menu-item" href="{{ route('customer.pricing.Tradingview.index') }}">
                        <img src="/customer/images/tradingview.webp" alt="TradingView" class="me-2 ms-2 mb-1">
                        <span class="fw-bold">اکانت TradingView</span>
                    </a>
                </li>

                <li data-link="tradingview">
                    <a class="menu-item" href="{{ route('customer.pricing.canva.index') }}">
                        <img src="/customer/images/canva.webp" alt="Canva" class="me-2 ms-2 mb-1">
                        <span class="fw-bold">اکانت canva</span>
                    </a>
                </li>

                {{-- <li data-link="tradingview">
                    <a class="menu-item" href="{{ route('customer.pricing.linkedIn.index') }}">
                        <img src="/customer/images/linkedIn.webp" alt="TradingView" class="me-2 ms-2 mb-1">
                        <span class="fw-bold">اکانت LinkedIn</span>
                    </a>
                </li> --}}


                <li data-link="home" class="active">
                    <a class="menu-item me-2 fs-3" href="{{ route('home') }}">
                        <span class="fw-bold">گیفت کارت ها</span>
                    </a>
                </li>

                <li data-link="tradingview">
                    <a class="menu-item" href="{{ route('customer.pricing.canva.index') }}">
                        <img src="/customer/images/canva.webp" alt="Canva" class="me-2 ms-2 mb-1">
                        <span class="fw-bold">گیفت کارت آمازون</span>
                    </a>
                </li>

                <li data-link="tradingview">
                    <a class="menu-item" href="{{ route('customer.pricing.canva.index') }}">
                        <img src="/customer/images/canva.webp" alt="Canva" class="me-2 ms-2 mb-1">
                        <span class="fw-bold">گیفت کارت xbox</span>
                    </a>
                </li>

                <li data-link="tradingview">
                    <a class="menu-item" href="{{ route('customer.pricing.canva.index') }}">
                        <img src="/customer/images/canva.webp" alt="Canva" class="me-2 ms-2 mb-1">
                        <span class="fw-bold">گیفت کارت xbox</span>
                    </a>
                </li>

                <li data-link="tradingview">
                    <a class="menu-item" href="{{ route('customer.pricing.canva.index') }}">
                        <img src="/customer/images/canva.webp" alt="Canva" class="me-2 ms-2 mb-1">
                        <span class="fw-bold">گیفت کارت xbox</span>
                    </a>
                </li>
            </ul>
        </nav>

        <div class="hamburger" id="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</header>
<x-login-modal />
<x-register-modal />

{{-- mobile --}}
<x-register-mobile-modal />
