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
        <a href="{{ route('home') }}" class="cta-btn">Գործակցել</a>
        <div class="hamburger" id="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</header>
