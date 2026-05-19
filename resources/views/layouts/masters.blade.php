<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title', 'Growvixo')</title>
    @include('customer.layouts.head-tag')
</head>

<body class="bg-of-body">

    <div id="particles-js" class="style-particles"></div>

    @include('layouts.header-home')

    <main class="hero-section">
        @yield('content')
    </main>

    <section style=>
        <footer class="gv-footer-container text-center">
            <!-- Footer text -->
            <p>
                <a referrerpolicy='origin' target='_blank' href='#'>
                    <img referrerpolicy='origin' src='customer/images/logo.webp' alt='' style='cursor:pointer'
                        code=''>
                </a>
                <br>
            <div class="footer-copy">
                © 2025 <strong>Growvixo</strong><br>
                تمامی حقوق این وب‌سایت محفوظ است.
            </div>

            </p>

            <!-- Social Media Icons -->
            <div class="gv-social-icons">
                <a class="gv-social-link" href="#" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="gv-social-link" href="#" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="gv-social-link" href="#" target="_blank">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a class="gv-social-link" href="#" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>

            <!-- Quick Links -->
            <div class="gv-footer-links">
                <a class="gv-footer-link" href="{{ route('about') }}">درباره ما</a>
                <a class="gv-footer-link" href="{{ route('contact') }}">تماس باما</a>
                <a class="gv-footer-link" href="{{ route('services') }}">خدمات</a>
            </div>
        </footer>
    </section>

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
                    "value": 0.3,
                    "random": false
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
    </script>
    <script>
        const startBtn = document.getElementById('start');

        startBtn.addEventListener('click', function() {
            console.log(123);
            const infoSection = document.getElementById('info');
            const offset = 50;
            const topPos = infoSection.getBoundingClientRect().top + window.scrollY - offset;

            window.scrollTo({
                top: topPos,
                behavior: 'smooth'
            });
        });
    </script>

</body>
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
</script>
<script src="/js/header.js"></script>
<script>
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

</html>
