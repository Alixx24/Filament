<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>@yield('title', 'HRM Project')</title>


    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.13.1/font/bootstrap-icons.min.css" integrity="..."
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    @include('customer.layouts.head-tag')

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Georgian:wght@400;700&display=swap');

        .bg-of-body {
            background-color: #EEF2F6;
            margin: 0;
        }

        body {
            margin: 0;
            background-color: #EEF2F6;
            font-family: 'Noto Sans Georgian', sans-serif;

            color: #1A1A1A;
        }


        .hero-header {
            position: relative;
            height: 100vh;
            overflow: hidden;
        }


        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 60px;
            position: relative;
            z-index: 10;
        }

        .logo {
            font-size: 26px;
            font-weight: bold;
            color: #4A6CF7;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 30px;
        }

        .nav-links a {
            text-decoration: none;
            color: #1A1A1A;
            font-size: 16px;
        }

        .btn-primary {
            padding: 10px 18px;
            background: #4A6CF7;
            color: white !important;
            border-radius: 6px;
        }


        .logo {
            font-family: 'Montserrat', sans-serif;
            font-size: 32px;
            font-weight: 700;
            letter-spacing: 1.5px;
            cursor: default;
            animation: logoFade 1s ease forwards;
        }

        .logo-primary {
            color: #4A6CF7;
            /* آبی اصلی */
        }

        .logo-secondary {
            color: #00C8A0;
            /* سبز روشن ثانویه */
        }

        .hero-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            z-index: 5;
            padding: 0 20px;
        }

        .hero-content h1 {
            font-size: 48px;
            max-width: 700px;
            line-height: 1.4;
            margin: 0 auto 20px;
        }

        .hero-content p {
            font-size: 20px;
            margin-bottom: 30px;
            color: #4A6CF7;
        }

        .cta-btn {
            padding: 14px 28px;
            background: #4A6CF7;
            color: #fff;
            border-radius: 8px;
            text-decoration: none;
            font-size: 18px;
        }

        /* particles.js */
        #particles-js {
            position: fixed;
            width: 100%;
            height: 100%;

            top: 0;
            left: 0;
        }


        /* ————————————————————— */
        /*            ریسپانسیو   */
        /* ————————————————————— */

        /* لپ‌تاپ کوچک */
        @media (max-width: 1200px) {
            .navbar {
                padding: 20px 40px;
            }

            .hero-content h1 {
                font-size: 42px;
            }
        }

        /* تبلت */
        @media (max-width: 992px) {
            .navbar {
                padding: 15px 30px;
            }

            .nav-links {
                gap: 20px;
            }

            .hero-content h1 {
                font-size: 36px;
            }

            .hero-content p {
                font-size: 18px;
            }
        }

        /* موبایل — هدر جمع‌شونده */
        @media (max-width: 768px) {

            .navbar {
                padding: 15px 20px;
            }

            /* منو مخفی */
            .nav-links {
                display: none;
            }

            /* لوگو وسط */
            .logo {
                font-size: 22px;
            }

            .hero-content h1 {
                font-size: 30px;
                line-height: 1.5;
            }

            .hero-content p {
                font-size: 16px;
            }

            .cta-btn {
                padding: 12px 22px;
                font-size: 16px;
            }
        }

        /* موبایل کوچک */
        @media (max-width: 480px) {
            .hero-content h1 {
                font-size: 26px;
            }

            .hero-content p {
                font-size: 15px;
            }
        }


        main {
            flex: 1 0 auto;
        }

        footer {
            flex-shrink: 0;
            background-color: #f8f9fa;
            padding: 20px 0;
            text-align: center;
        }

        .github-icon {
            color: #000;

        }

        .mt-of-login {
            margin-top: 35%;
        }

        .mt-of-reg {
            margin-top: 25%;
        }

        @media (min-width:992px) {


            .custom-margin-left {
                margin-left: 27%;
            }
        }

        .ml-mobile {
            margin-left: 95px !important;

        }

        .ml-mbobile-sign {
            margin-left: 160px;
        }


        .card-price {
            width: 18rem;

        }

        .card.middle {
            height: 13.75rem;

        }

        .text-height-desc {
            line-height: 1.5;
        }

        .form-control-home {
            box-shadow: 0 0 15px 4px rgba(0, 123, 255, 0.8);
            border-color: #007bff;
            outline: none;
            transition: box-shadow 0.3s ease;
        }

        .form-control-home:focus {
            box-shadow: 0 0 18px 5px rgba(0, 123, 255, 1);
            border-color: #0056b3;
        }

        #carouselExample img {
            height: 300px;
            /* ارتفاع ثابت */
            object-fit: cover;

            width: 100%;

        }

        .style-particles {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -1;
        }

        .card-body {
            text-align: right;
        }

        .card-img-top {
            object-fit: cover;
            height: 160px;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            filter: none;
            background-color: rgb(0, 0, 0);
            width: 3rem;
            height: 3rem;
            border-radius: 50%;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.4);
        }


        #desktopCarousel {
            position: relative;
            padding: 0 60px;

        }


        #desktopCarousel .carousel-control-prev,
        #desktopCarousel .carousel-control-next {
            width: 3rem;
            height: 3rem;
            top: 50%;
            transform: translateY(-50%);
            position: absolute;
        }

        #desktopCarousel .carousel-control-prev {
            left: -60px;

        }

        #desktopCarousel .carousel-control-next {
            right: -60px;

        }


        .card-slider-home {
            border-radius: 15px;
            border: 1.5px solid #ddd;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        .card-img-top {
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            object-fit: cover;
            height: 200px;
        }

        .card-body-slider {
            padding: 15px 20px;
            background-color: #fff;
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
        }

        .unique-carousel-container {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            max-width: 100%;
            margin: 20px auto;
        }

        .unique-carousel-inner img {
            border-radius: 15px;
            object-fit: cover;
            height: 300px;
            transition: transform 0.5s ease;
        }

        .unique-carousel-inner .carousel-item.active img {
            transform: scale(1.05);
        }

        .unique-carousel-control-prev,
        .unique-carousel-control-next {
            top: 50% !important;
            transform: translateY(-50%);
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.6);
            border-radius: 50%;
            filter: drop-shadow(0 0 3px rgba(0, 0, 0, 0.3));
            opacity: 1;
        }

        .btn-small-text {
            font-size: 0.8rem;

            padding: 0.7rem 1rem;

            line-height: 1.2;

            white-space: nowrap;

        }

        @media (min-width: 992px) {
            .unique-carousel-container {
                max-width: 1000px;
                margin: 20px auto;
                border-radius: 15px;
                overflow: hidden;
                box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            }


            .unique-carousel-inner img {
                height: 450px;
            }
        }
    </style>


</head>

<body class="bg-of-body">

    <div id="particles-js" class="style-particles" style=""></div>

    @include('customer.layouts.header')


    <main class="hero-section">
        @yield('content')
    </main>

    @include('customer.layouts.footer')

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
            const offset = 50; // ارتفاع هدر یا فاصله بالای صفحه
            const topPos = infoSection.getBoundingClientRect().top + window.scrollY - offset;

            window.scrollTo({
                top: topPos,
                behavior: 'smooth'
            });
        });
    </script>

</body>

</html>
