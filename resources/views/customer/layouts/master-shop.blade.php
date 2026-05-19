<!DOCTYPE html>
@yield('lang')

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="robots" content="noindex, nofollow">
    <title>@yield('title', 'اکانت هوش مصنوعی')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/shabnam-font/4.0.0/font-face.min.css">
    <link rel="stylesheet" href="{{ asset('customer/css/master-detail.css') }}">

    @include('customer.layouts.head-tag-content')

</head>

<body class="bg-of-body">

    <div id="particles-js" class="style-particles"></div>

    {{-- HEADER --}}
    @include('customer.layouts.header-shop')

    {{-- PAGE CONTENT --}}
    <main class="hero-section">
        @yield('content')
    </main>

    {{-- FOOTER --}}
     @include('customer.layouts.footer-shop')

        {{-- SCRIPTS --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

        <script>
            particlesJS('particles-js', {
                "particles": {
                    "number": {
                        "value": 80
                    },
                    "color": {
                        "value": "#90A4C7"
                    },
                    "shape": {
                        "type": "circle"
                    },
                    "opacity": {
                        "value": 0.3
                    },
                    "size": {
                        "value": 3
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 150,
                        "color": "#90A4C7",
                        "opacity": 0.4,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 2
                    }
                },
                "interactivity": {
                    "events": {
                        "onhover": {
                            "enable": true,
                            "mode": "repulse"
                        }
                    }
                }
            });

            if (window.innerWidth <= 768) {
                const footer = document.querySelector('.gv-footer-wrapper');
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('gv-footer-visible');
                        }
                    });
                });

                if (footer) {
                    observer.observe(footer);
                }
            }


            const chatToggle = document.getElementById("chatToggle");
            const chatBox = document.getElementById("chatBox");

            chatToggle.addEventListener("click", function(e) {
                e.stopPropagation();
                chatBox.classList.toggle("active");
            });

            chatBox.addEventListener("click", function(e) {
                e.stopPropagation();
            });

            document.addEventListener("click", function() {
                chatBox.classList.remove("active");
            });
        </script>
        <script src="/js/header.js"></script>
</body>

</html>
