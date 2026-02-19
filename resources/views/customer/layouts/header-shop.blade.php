<header>
    <style>
        /* ===== RTL Fix Only For Sidebar Menu ===== */

        .nav-menu {
            direction: rtl;
            text-align: right;
        }

        /* لیست منو */
        .nav-menu ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .nav-menu ul li {
            text-align: right;
            margin-bottom: 8px;
            /* فاصله کمتر بین آیتم‌ها */
        }

        .nav-menu ul li a {
            display: block;
            text-align: right;
        }

        .menu-item img {
            width: 56px;
            height: 56px;
            object-fit: contain;
            flex-shrink: 0;

        }

        .img-chatgpt-sidebar {
            width: 30px !important;
            height: 30px !important;
        }
        /* در دسکتاپ (عرض ≥ 992px) */
@media (min-width: 992px) {

  /* مخفی کردن آیتم خدمات */
  .nav-menu li[data-link="home"] {
    display: none;
  }

  /* مخفی کردن تصاویر همه آیتم‌ها */
  .nav-menu li img {
    display: none;
  }
}

/* نسخه موبایل: همه چیز نمایش داده شود */
@media (max-width: 991px) {
  .nav-menu li[data-link="home"] {
    display: block;
  }

  .nav-menu li img {
    display: inline-block;
  }
}

    </style>

    <div class="container">
        <div class="logo">
            <a href="{{ route('home') }}" class="text-decoration-none">
                <span class="logo-primary">Grow</span><span class="logo-secondary">vixo</span>
            </a>
        </div>
        <nav class="nav-menu" id="navMenu">
            <div class="close-btn fs-1" id="closeBtn" style="margin-right:190px !important;">&times;</div>
            <ul>

                <li data-link="home" class="active">
                    <a class="menu-item" href="{{ route('home') }}">
                        <span>خدمات</span>
                    </a>
                </li>

                <li data-link="chatgpt">
                    <a class="menu-item" href="{{ route('customer.pricing.chatgpt.index') }}">
                        <img src="/customer/images/cgatgpt.webp" alt="ChatGPT"
                            class="me-2 ms-2 mb-1 img-chatgpt-sidebar">
                        <span>اکانت ChatGPT</span>
                    </a>
                </li>

                <li data-link="gemini">
                    <a class="menu-item" href="{{ route('customer.pricing.gemini.index') }}">
                        <img src="/customer/images/gemini.webp" alt="Gemini" class="me-2 ms-2 mb-1">
                        <span>اکانت Gemini</span>
                    </a>
                </li>

                <li data-link="cursor">
                    <a class="menu-item" href="{{ route('customer.pricing.cursor.index') }}">
                        <img src="/customer/images/cursor.webp" alt="Cursor" class="me-2 ms-2 mb-1">
                        <span>اکانت Cursor</span>
                    </a>
                </li>

                <li data-link="claude">
                    <a class="menu-item" href="{{ route('customer.pricing.claude.index') }}">
                        <img src="/customer/images/claude.webp" alt="Claude" class="me-2 ms-2 mb-1">
                        <span>اکانت Claude</span>
                    </a>
                </li>

                <li data-link="spotify">
                    <a class="menu-item" href="{{ route('customer.pricing.spotify.index') }}">
                        <img src="/customer/images/spotify.webp" alt="Spotify" class="me-2 ms-2 mb-1">
                        <span>اکانت Spotify</span>
                    </a>
                </li>

                <li data-link="tradingview">
                    <a class="menu-item" href="{{ route('customer.pricing.TradingView.index') }}">
                        <img src="/customer/images/tradingview.webp" alt="TradingView" class="me-2 ms-2 mb-1">
                        <span>اکانت TradingView</span>
                    </a>
                </li>
            </ul>
        </nav>

        @auth
            <form action="{{ route('logout.post') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-outline-danger ms-2">
                    Log out
                </button>
                <a href="{{ route('dashboard.index', auth()->user()->id) }}"
                    class="btn btn-outline-primary ms-2">داشبورد</a>

            </form>
        @endauth
        @if (auth()->guest())
            <form class="d-flex">
                <button type="button" class="btn btn-outline-success me-2" data-bs-toggle="modal"
                    data-bs-target="#loginModal">
                    ورود
                </button>


                <a class="btn btn-outline-primary" type="submit" data-bs-toggle="modal"
                    data-bs-target="#registerModal">ثبت نام</a>
            </form>
        @endif
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
