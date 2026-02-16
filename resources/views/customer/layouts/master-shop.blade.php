<!DOCTYPE html>
@yield('lang')

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>@yield('title', 'HRM Project')</title>

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
    <section class="z-show display-footer">
        <!-- Footer -->
        <footer class="text-center z-show div-footer">
            <!-- Grid container -->


            <!-- Footer text -->
            <p style="font-size: 14px; margin-bottom: 20px;">
                                <a referrerpolicy='origin' target='_blank' href='https://trustseal.enamad.ir/?id=703000&Code=oBqG9M3Yan78S2nE0Mgw1OyqNHA6eDPA'><img referrerpolicy='origin' src='https://trustseal.enamad.ir/logo.aspx?id=703000&Code=oBqG9M3Yan78S2nE0Mgw1OyqNHA6eDPA' alt='' style='cursor:pointer' code='oBqG9M3Yan78S2nE0Mgw1OyqNHA6eDPA'></a>

                <span>© 2025 <strong>Growvixo</strong></span>. <span>Ամբողջ իրավունքները պաշտպանված են:</span>
            </p>

            <!-- Key services -->
            <div class="footer-services" style="margin-bottom: 30px;">
              
                <!-- New addition: Ecommerce Website Design -->
                <p style="font-size: 16px; font-weight: 600; line-height: 1.6;">
                    <strong>Growvixo</strong> առաջարկում է մասնագիտացված <strong>դիզայն ու մշակում</strong>
                    <strong>առցանց խանութների</strong> (eCommerce կայքեր) համար՝ ապահովելով ձեր բիզնեսի
                    արդյունավետություն և վաճառքների ավելացում:
                </p>
            </div>

            <!-- Social Media Icons -->
            <div class="social-icons" style="margin-top: 30px;">
                <a class="m-social" href="#" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="m-social" href="#" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="m-social" href="#" target="_blank">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a class="m-social" href="#" target="_blank" style="">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>

            <!-- Quick Links -->
            <div class="footer-links" style="margin-top: 30px;">
                <a class="m-footer" href="{{ route('about') }}">About Us</a>
                <a class="m-footer" href="{{ route('contact') }}">Contact</a>
                <a class="m-footer" href="{{ route('services') }}">Services</a>
            </div>

        </footer>
        <!-- Footer -->
    </section>


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
    </script>

    <script src="/js/header.js"></script>

</body>

</html>
