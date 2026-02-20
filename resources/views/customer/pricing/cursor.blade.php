@extends('customer.layouts.master-shop')

{{-- ====================== Title Section ====================== --}}
@section('title', 'GrowVixo - اکانت هوش مصنوعی')

{{-- ====================== Meta Section ====================== --}}
@section('meta')
    {{-- Indexing & Crawling --}}
    <meta name="robots" content="index, follow">

    {{-- Page Title --}}
    <title>اکانت هوش مصنوعی – GrowVixo</title>

    {{-- Meta Description --}}
    <meta name="description"
        content="Բարձրացրեք Ձեր e-commerce բրենդի և խանութի կայքի տեսանելիությունը Հայաստանում՝ fully responsive Խանութի կայքի դիզայն, Social Media Marketing, Instagram & Facebook ինտեգրացիա, KPI tracking և measurable sales growth. Սկսեք հիմա GrowVixo-ով.">

    {{-- Author & Publisher --}}
    <meta name="author" content="GrowVixo">
    <meta name="publisher" content="GrowVixo">

    {{-- Open Graph (Facebook & LinkedIn) --}}
    <meta property="og:title" content="Խանութի կայքի դիզայն և Social Media Marketing Հայաստանում – GrowVixo">
    <meta property="og:description"
        content="Բարձրացրեք Ձեր e-commerce բրենդի և խանութի կայքի տեսանելիությունը Հայաստանում՝ Instagram, Facebook և Telegram ինտեգրացիա, KPI tracking և measurable growth. Սկսեք հիմա GrowVixo-ով.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('images/social-media-marketing-banner.webp') }}">
    <meta property="og:image:alt" content="Խանութի կայքի դիզայն Հայաստանում և Social Media Marketing ինտեգրացիա">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Խանութի կայքի դիզայն և Social Media Marketing Հայաստանում – GrowVixo">
    <meta name="twitter:description"
        content="Բարձրացրեք Ձեր e-commerce բրենդի և խանութի կայքի տեսանելիությունը Հայաստանում՝ Instagram, Facebook ինտեգրացիա և measurable sales growth. Սկսեք հիմա GrowVixo-ով.">
    <meta name="twitter:image" content="{{ asset('images/social-media-marketing-banner.webp') }}">

    {{-- Canonical --}}
    <link rel="canonical" href="{{ url()->current() }}">
@endsection

{{-- ====================== Content Section ====================== --}}
@section('content')
    <style>
        .custom-card {
            border-radius: 20px;
            /* مرز گرد */
            overflow: hidden;
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
            /* سایه نرم */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            /* انیمیشن حرکت */
        }

        .custom-card:hover {
            transform: translateY(-15px);
            /* حرکت کارت به سمت بالا */
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
            /* سایه بیشتر */
        }

        .card-img-top {
            transition: transform 0.4s ease-in-out;
            /* انیمیشن تصویر */
        }

        .custom-card:hover .card-img-top {
            transform: scale(1.05);
            /* بزرگ شدن تصویر هنگام هاور */
        }

        .card-body {
            background-color: #fff;
            padding: 25px;
            text-align: center;
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
        }

        .card-text {
            color: #777;
            font-size: 1rem;
            margin: 15px 0;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 50px;
            /* دکمه گرد */
            padding: 12px 20px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            transform: translateY(-3px);
            /* حرکت دکمه به سمت بالا */
        }


        @media (min-width: 768px) {
            .desktop-row {
                display: flex;
                flex-wrap: wrap;
                padding: 25px !important;
            }
        }

        .chat-wrapper {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 9999;
        }

        /* دکمه اصلی */
        .chat-button {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            border: none;
            background: linear-gradient(135deg, #4e73df, #1cc88a);
            color: white;
            font-size: 22px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .chat-button:hover {
            transform: scale(1.1);
        }

        /* باکس چت */
        .chat-box {
            position: absolute;
            bottom: 75px;
            right: 0;
            width: 220px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            padding: 10px 0;
            opacity: 0;
            transform: translateY(20px);
            pointer-events: none;
            transition: all 0.3s ease-in-out;
        }

        /* وقتی فعال میشه */
        .chat-box.active {
            opacity: 1;
            transform: translateY(0);
            pointer-events: auto;
        }

        .chat-box ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .chat-box li {
            padding: 10px 20px;
            transition: background 0.2s;
        }

        .chat-box li:hover {
            background: #f8f9fc;
        }

        .chat-box a {
            text-decoration: none;
            color: #333;
            display: block;
            font-size: 14px;
        }

        @media (max-width: 767px) {
            .mt-mobile {
                margin-top: 2466px !important;
            }
        }

        /* استایل مخصوص دسکتاپ - فقط در سایزهای بالای 992px اعمال می‌شود */
        @media (min-width: 992px) {
            .desktop-product-grid {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                gap: 20px;
                margin-top: 0 !important;
                padding: 0;
            }

            .desktop-product-card {
                transition: all 0.3s ease;
                border: 1px solid #e9ecef;
                border-radius: 16px;
                overflow: hidden;
                background: #ffffff;
                height: 100%;
                display: flex;
                flex-direction: column;
            }

            .desktop-product-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
                border-color: transparent;
            }

            .desktop-product-image {
                padding: 20px 20px 10px 20px;
                text-align: center;
                background: #f8f9fa;
            }

            .desktop-product-image img {
                max-width: 70%;
                height: 140px;
                object-fit: contain;
                transition: transform 0.3s ease;
            }

            .desktop-product-card:hover .desktop-product-image img {
                transform: scale(1.05);
            }

            .desktop-product-content {
                padding: 0 20px 20px 20px;
                text-align: center;
                flex-grow: 1;
                display: flex;
                flex-direction: column;
            }

            .desktop-product-title {
                font-size: 1.1rem;
                font-weight: 600;
                color: #212529;
                margin-bottom: 8px;
            }

            .desktop-product-description {
                font-size: 0.85rem;
                color: #6c757d;
                line-height: 1.5;
                margin-bottom: 15px;
                flex-grow: 1;
            }

            .desktop-product-button {
                display: inline-block;
                width: 80%;
                margin: 0 auto;
                padding: 10px 0;
                background: #212529;
                color: white;
                border-radius: 50px;
                text-decoration: none;
                font-size: 0.9rem;
                font-weight: 500;
                transition: all 0.3s ease;
                border: 1px solid #212529;
            }

            .desktop-product-button:hover {
                background: white;
                color: #212529;
                text-decoration: none;
            }

            /* لینک بدون تغییر ظاهر */
            .desktop-product-link {
                text-decoration: none;
                color: inherit;
                display: block;
                height: 100%;
            }

            /* حذف فاصله از بالای کانتینر */
            .desktop-container {
                margin-top: 0 !important;
                padding-top: 0 !important;
            }

            .mt-desktop {
                margin-top: 69px;
            }
        }

        /* استایل موبایل (اختیاری) */
        @media (max-width: 991px) {
            .desktop-product-grid {
                display: block;
            }

            .col-md-3 {
                width: 100%;
                margin-bottom: 15px;
            }
        }
    </style>
    <section id="social-media-marketing" class="p-4 m-3 p-mt-head border border-primary rounded-3">

        <h3 style="text-align: right; ">!<strong> بدون دردسر Cursor اکانت</strong></h3>
        <p style="text-align: right; font-family: Vazir, Tahoma, Arial, sans-serif; line-height: 1.8;">
            با توجه به محدودیت‌های موجود برای کاربران ایرانی در دسترسی به Cursor ما فرآیند ثبت‌نام و خرید را برای شما
            آسان
            کرده‌ایم. اکانت‌های مدنظر شما عزیزان را، به آسانی تنها در کوتاه‌ترین زمان ممکن در اختیار شما قرار می‌گیرد
        </p>

        {{-- Step-by-Step Process --}}


        </head>
        <style>
            .chat-box ul li {
                display: flex;
                align-items: center;
                gap: 5px;
                /* فاصله بین آیکون و متن */
                width: 120px;
                /* طول آیتم دلخواه */
                direction: ltr;
                /* مهم: راست‌چین کردن فلکس */
            }

            .chat-box ul li a {
                white-space: nowrap;
                /* جلوگیری از رفتن به خط بعد */
                font-size: 1.2rem;
            }

            .chat-box ul li a {
                margin-left: 30px;
                /* متن به سمت راست می‌رود */
                text-decoration: none;
                color: black;
            }
        </style>

        <body>
            <!-- chat icon -->
            <div class="chat-wrapper">
                <button class="chat-button" id="chatToggle">
                    <i class="bi bi-chat-dots fs-1"></i>
                </button>
                <div class="chat-box fs-1" id="chatBox">
                    <ul>
                        <li>
                            <i class="fs-1 bi bi-telegram"></i>
                            <a href="https://t.me/alixx24">پشتیبانی تلگرام</a>
                        </li>
                        <li>
                            <i class="fs-1 bi bi-whatsapp"></i>
                            <a href="#">پشتیبانی واتس اب</a>
                        </li>
                        <li>
                            <i class="fs-1 bi bi-envelope-at"></i>
                            <a href="mailto:alixcommunity6.ir@gmail.com">پشتیبانی ایمیل</a>
                        </li>
                    </ul>
                </div>
            </div>


            <script>
                const chatToggle = document.getElementById("chatToggle");
                const chatBox = document.getElementById("chatBox");

                // باز و بسته شدن با دکمه
                chatToggle.addEventListener("click", function(e) {
                    e.stopPropagation(); // جلوگیری از بسته شدن فوری
                    chatBox.classList.toggle("active");
                });

                // جلوگیری از بسته شدن وقتی داخل باکس کلیک میشه
                chatBox.addEventListener("click", function(e) {
                    e.stopPropagation();
                });

                // بستن هنگام کلیک بیرون
                document.addEventListener("click", function() {
                    chatBox.classList.remove("active");
                });
            </script>


            <div>
                <div class="row justify-content-center align-items-center mt-desktop">
                    <h1 class="text-center mb-5" itemprop="name">

                    </h1>

                    <!-- moobile-->
                    <div class="d-block d-lg-none">
                        <div class="row">
                            @foreach ($products as $product)
                                <div class="col-12 mb-4">
                                    <a href="{{ route('customer.doc.cursor.detail', ['slug' => $product->slug]) }}"
                                        class="text-decoration-none text-dark">
                                        <div class="card custom-card h-100" itemscope itemtype="https://schema.org/Product">
                                            <div class="text-center p-4">
                                                <img src="/customer/images/cursor.webp" class="card-img-top"
                                                    style="max-width: 80%; height: auto;" alt="{{ $product->name }}"
                                                    title="{{ $product->name }}">
                                            </div>
                                            <div class="text-center p-3">
                                                <h2 class="card-title" itemprop="name">{{ $product->name }}</h2>
                                                <p class="card-text" itemprop="description">
                                                    {{ Str::limit($product->description, 66) }}
                                                </p>
                                                <span class="btn btn-dark w-75 mt-3 rounded-pill"
                                                    aria-label="خرید {{ $product->name }}">
                                                    خرید الآن
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- desktop-->
                    <div class="d-none d-lg-block w-100">
                        <div class="desktop-product-grid">
                            @foreach ($products as $product)
                                <div>
                                    <a href="{{ route('customer.doc.cursor.detail', ['slug' => $product->slug]) }}"
                                        class="desktop-product-link">
                                        <div class="desktop-product-card">
                                            <div class="desktop-product-image">
                                                <img src="/customer/images/cursor.webp" alt="{{ $product->name }}"
                                                    title="{{ $product->name }}">
                                            </div>
                                            <div class="desktop-product-content">
                                                <h2 class="desktop-product-title">{{ $product->name }}</h2>
                                                <p class="desktop-product-description">
                                                    {{ Str::limit($product->description, 66) }}
                                                </p>
                                                <span class="desktop-product-button">
                                                    خرید الآن
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            {{-- CTA Section --}}
            <section class="lux-cta-wrapper">
                <h2 class="lux-cta-title" style="margin-top: 66px !important;">نظرات و انتقاداتتون رو باهامون در میان بدارید</h2>


                <form action="/contact-form" method="POST" class="lux-cta-form">
                    <label class="lux-cta-label" for="name">نام:</label>
                    <input class="lux-cta-input" type="text" id="name" name="name" required>

                    <label class="lux-cta-label" for="email">ایمیل:</label>
                    <input class="lux-cta-input" type="email" id="email" name="email" required>

                    <label class="lux-cta-label" for="phone">شماره تماس:</label>
                    <input class="lux-cta-input" type="tel" id="phone" name="phone" required>

                    <label class="lux-cta-label" for="message">متن مدنظرتون:</label>
                    <textarea class="lux-cta-textarea" id="message" name="message" rows="6" required></textarea>

                    <button type="submit" class="lux-cta-button">تایید</button>
                </form>

                <p class="lux-cta-alt">
                    Alternate Contact:
                    <a href="https://wa.me/989020160120" target="_blank">WhatsApp</a> |
                    <a href="https://t.me/yourtelegram" target="_blank">Telegram</a> |
                    <a href="https://instagram.com/growvixo" target="_blank">Instagram</a>
                </p>
            </section>


    </section>

    <script src="../js/header.js"></script>

@endsection
