<!DOCTYPE html>
@yield('lang')

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title', 'اکانت هوش مصنوعی')</title>
    @include('customer.layouts.head-tag-content')

    <style>
        /* استایل‌های اصلی برای چسباندن فوتر */
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            position: relative;
        }

        /* کانتینر اصلی محتوا */
        .gv-main-content {
            flex: 1 0 auto;
            width: 100%;
        }

        /* استایل برای hero-section */
        .hero-section {
            flex: 1 0 auto;
            width: 100%;
            position: relative;
            z-index: 1;
        }

        /* استایل‌های فوتر مدرن و متحرک */
        .gv-footer-wrapper {
            flex-shrink: 0;
            width: 100%;
            direction: ltr;
            margin-top: auto;
            position: relative;
            z-index: 2;
        }

        .gv-footer-container {
            background: linear-gradient(135deg, #1a1e25 0%, #2c3e50 100%);
            padding: 60px 20px 30px;
            color: #fff;
            position: relative;
            overflow: hidden;
            box-shadow: 0 -10px 30px rgba(0, 0, 0, 0.2);
        }

        /* افکت موج در بالای فوتر */
        .gv-footer-container::before {
            content: '';
            position: absolute;
            top: -50px;
            left: 0;
            right: 0;
            height: 50px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
            opacity: 0.3;
        }

        /* افکت پس‌زمینه متحرک */
        .gv-footer-container::after {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
            animation: gvFooterGlow 15s linear infinite;
        }

        @keyframes gvFooterGlow {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        /* لوگو و نماد اعتماد */
        .gv-footer-copyright {
            font-size: 14px;
            margin-bottom: 30px;
            color: #bdc3c7;
            line-height: 1.8;
            position: relative;
            z-index: 1;
            text-align: center;
        }

        .gv-footer-copyright img {
            max-width: 100px;
            height: auto;
            margin-bottom: 15px;
            transition: all 0.3s ease;
            border-radius: 10px;
            padding: 5px;
            display: inline-block;
        }

        .gv-footer-copyright img:hover {
            transform: scale(1.1) rotate(5deg);
        }

        .gv-footer-copyright strong {
            color: #3498db;
            font-weight: 700;
        }

        /* شبکه‌های اجتماعی با انیمیشن */
        .gv-social-icons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 30px;
            position: relative;
            z-index: 1;
            flex-wrap: wrap;
        }

        .gv-social-link {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            font-size: 1.2rem;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(5px);
            position: relative;
            overflow: hidden;
        }

        .gv-social-link::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            transform: translate(-50%, -50%);
            transition: width 0.3s, height 0.3s;
        }

        .gv-social-link:hover::before {
            width: 100px;
            height: 100px;
        }

        .gv-social-link:hover {
            background: #3498db;
            transform: translateY(-5px) scale(1.1);
            border-color: transparent;
            box-shadow: 0 10px 25px rgba(52, 152, 219, 0.4);
        }

        /* لینک‌های فوتر */
        .gv-footer-links {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
            position: relative;
            z-index: 1;
            margin-top: 20px;
        }

        .gv-footer-link {
            color: #bdc3c7;
            text-decoration: none;
            font-size: 15px;
            font-weight: 500;
            padding: 5px 10px;
            transition: all 0.3s ease;
            position: relative;
            letter-spacing: 0.5px;
        }

        .gv-footer-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 2px;
            background: #3498db;
            transition: width 0.3s ease;
        }

        .gv-footer-link:hover {
            color: #fff;
        }

        .gv-footer-link:hover::after {
            width: 80%;
        }

        /* ===== استایل مخصوص موبایل (مدرن و متحرک) ===== */
        @media (max-width: 768px) {
            .gv-footer-container {
                padding: 40px 15px 25px;
                border-radius: 30px 30px 0 0;
            }

            /* کارت‌های متحرک برای موبایل */
            .gv-footer-copyright {
                font-size: 12px;
                margin-bottom: 25px;
            }

            .gv-footer-copyright img {
                max-width: 80px;
                animation: gvMobilePulse 2s infinite;
            }

            @keyframes gvMobilePulse {
                0% {
                    transform: scale(1);
                }

                50% {
                    transform: scale(1.05);
                }

                100% {
                    transform: scale(1);
                }
            }

            /* آیکون‌های اجتماعی متحرک */
            .gv-social-icons {
                gap: 12px;
                margin-bottom: 25px;
            }

            .gv-social-link {
                width: 40px;
                height: 40px;
                font-size: 1rem;
                animation: gvMobileBounce 2s infinite;
                animation-delay: calc(0.1s * var(--i));
            }

            .gv-social-link:nth-child(1) {
                --i: 1;
            }

            .gv-social-link:nth-child(2) {
                --i: 2;
            }

            .gv-social-link:nth-child(3) {
                --i: 3;
            }

            .gv-social-link:nth-child(4) {
                --i: 4;
            }

            @keyframes gvMobileBounce {

                0%,
                100% {
                    transform: translateY(0);
                }

                50% {
                    transform: translateY(-5px);
                }
            }

            .gv-social-link:hover {
                animation: none;
                transform: scale(1.15);
            }

            /* لینک‌های فوتر به صورت کارت */
            .gv-footer-links {
                gap: 10px;
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: center;
                margin-top: 15px;
            }

            .gv-footer-link {
                font-size: 13px;
                padding: 8px 15px;
                background: rgba(255, 255, 255, 0.05);
                border-radius: 25px;
                border: 1px solid rgba(255, 255, 255, 0.1);
                backdrop-filter: blur(10px);
                transition: all 0.3s ease;
                flex: 0 1 auto;
                min-width: 80px;
                text-align: center;
            }

            .gv-footer-link::after {
                display: none;
            }

            .gv-footer-link:hover {
                background: #3498db;
                transform: translateY(-3px);
                box-shadow: 0 5px 15px rgba(52, 152, 219, 0.4);
            }

            /* متن کپی رایت با افکت */
            .gv-footer-copyright span {
                display: inline-block;
                animation: gvMobileFade 3s infinite;
            }

            @keyframes gvMobileFade {

                0%,
                100% {
                    opacity: 1;
                }

                50% {
                    opacity: 0.8;
                }
            }
        }

        /* موبایل کوچک */
        @media (max-width: 480px) {
            .gv-footer-container {
                padding: 30px 12px 20px;
            }

            .gv-social-icons {
                gap: 8px;
            }

            .gv-social-link {
                width: 35px;
                height: 35px;
                font-size: 0.9rem;
            }

            .gv-footer-link {
                font-size: 12px;
                padding: 6px 12px;
                min-width: 70px;
            }

            .gv-footer-copyright {
                font-size: 11px;
            }

            .gv-footer-copyright img {
                max-width: 70px;
            }
        }

        /* انیمیشن برای لینک‌ها */
        .gv-footer-link {
            animation: gvFadeInUp 0.5s ease backwards;
        }

        .gv-social-link:nth-child(1) {
            animation-delay: 0.1s;
        }

        .gv-social-link:nth-child(2) {
            animation-delay: 0.2s;
        }

        .gv-social-link:nth-child(3) {
            animation-delay: 0.3s;
        }

        .gv-social-link:nth-child(4) {
            animation-delay: 0.4s;
        }

        @keyframes gvFadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* حالت هاور برای کل فوتر */
        .gv-footer-wrapper:hover .gv-social-link {
            filter: blur(0);
            opacity: 1;
        }

        .gv-social-link {
            filter: blur(0.3px);
            opacity: 0.95;
            transition: all 0.3s ease;
        }

        .gv-social-link:hover {
            filter: blur(0);
            opacity: 1;
        }

        /* استایل برای ذرات پس‌زمینه */
        .style-particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            pointer-events: none;
        }

        .footer-copy {
            text-align: center;
            /* اگر می‌خوای وسط باشه */
            direction: rtl;
            /* برای درست نمایش دادن فارسی */
            line-height: 1.8;
            font-size: 14px;
            color: #ffffff;
        }
    </style>
</head>

<body>
    <div id="particles-js" class="style-particles"></div>

    {{-- HEADER --}}
    @include('customer.layouts.header-shop')

    {{-- PAGE CONTENT --}}
    <main class="hero-section">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <section style="margin-top:230px !important;" class="gv-footer-wrapper">
        <footer style="margin-top:380px !important;" class="gv-footer-container text-center">
            <!-- Footer text -->
            <p class="gv-footer-copyright">
                <a referrerpolicy='origin' target='_blank' href='#'>
                    <img referrerpolicy='origin' src='https://growvixo.com/customer/images/namad.webp' alt=''
                        style='cursor:pointer' code=''>
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

        // اضافه کردن انیمیشن اسکرول برای موبایل
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
</body>

</html>
