<!DOCTYPE html>
<html lang="en">

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
    @include('customer.layouts.header-content')

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
                <span>© 2025 <strong>Growvixo</strong></span>. <span>Ամբողջ իրավունքները պաշտպանված են:</span>
            </p>

            <!-- Key services -->
            <div class="footer-services" style="margin-bottom: 30px;">
                <p style="font-size: 16px; font-weight: 600; line-height: 1.6;">
                    <strong>Growvixo</strong> առաջարկում է <strong>Թվային գովազդ</strong>, <strong>SEO
                        օպտիմալացում</strong>, <strong>Վեբ կայքի մշակում</strong> (համալրված <strong>ձեռնարկությունների
                        առցանց խանութ</strong>) և <strong>Սոցիալական մեդիայի ռազմավարություններ</strong>՝ ձեր բիզնեսի
                    թվային աճի համար:
                </p>

                <p style="font-size: 16px; font-weight: 600; line-height: 1.6;">
                    Մենք օժանդակում ենք <strong>Բրենդի ճանաչելիություն</strong> և <strong>Առցանց վաճառքի աճ</strong>՝
                    տրամադրելով որակյալ <strong>Բովանդակություն</strong> և <strong>Արշավների վերլուծություն</strong>:
                </p>

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
                <a class="m-footer" href="/about">About Us</a>
                <a class="m-footer" href="/contact">Contact</a>
                <a class="m-footer" href="/services">Services</a>
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
