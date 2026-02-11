<header>
    <div class="container">
        <div class="logo">
            <a href="{{ route('home') }}" class="text-decoration-none">
                <span class="logo-primary">Grow</span><span class="logo-secondary">vixo</span>
            </a>
        </div>
        <nav class="nav-menu" id="navMenu">
            <div class="close-btn mt-5" id="closeBtn">&times;</div>
            <ul>
                <li data-link="home" class="active"><a href="{{ route('home') }}">Նկարագրություն</a></li>
                <li data-link="services"><a href="{{ route('services') }}">Ծառայություններ</a></li>
                <li data-link="portfolio"><a href="{{ route('home') }}">Պորտֆոլիո</a></li>
                <li data-link="about"><a href="{{ route('about') }}">Մեր մասին</a></li>
                <li data-link="contact"><a href="{{ route('contact') }}">Կապ</a></li>

            </ul>
        </nav>
        @auth
            <form action="{{ route('logout.post') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-outline-danger ms-2">
                    Log out
                </button>
                <a href="{{ route('dashboard.index', auth()->user()->id) }}"
                    class="btn btn-outline-primary ms-2">Dashboard</a>

            </form>
        @endauth
        @if (auth()->guest())
            <form class="d-flex">
                <button type="button" class="btn btn-outline-success me-2" data-bs-toggle="modal"
                    data-bs-target="#loginModal">
                    Login
                </button>


                <a class="btn btn-outline-primary" type="submit" data-bs-toggle="modal"
                    data-bs-target="#registerModal">Sign up</a>
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
