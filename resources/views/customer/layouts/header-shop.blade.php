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
        }

        .nav-menu ul li a {
            display: block;
            text-align: right;
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
                <li data-link="home" class="active"><a class="me-3 fs-5" href="{{ route('home') }}">خدمات</a></li>
                <li data-link="services"><a class="me-3 fs-5" href="{{ route('customer.pricing.chatgpt.index') }}">اکانت
                        ChatGpt</a></li>
                <li data-link="about"><a class="me-3 fs-5" href="{{ route('customer.pricing.gemini.index') }}">اکانت
                        Gemini</a></li>
                <li data-link="about"><a class="me-3 fs-5" href="{{ route('about') }}">اکانت Cursor</a></li>
                <li data-link="contact"><a class="me-3 fs-5" href="{{ route('contact') }}">اکانت تلگرام</a></li>

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
