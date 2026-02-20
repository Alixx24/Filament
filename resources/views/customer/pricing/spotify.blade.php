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

    <section id="social-media-marketing" class="p-4 m-3 p-mt-head border border-primary rounded-3">

        <h3 style="text-align: right; ">!<strong> بدون دردسر Spotify اکانت</strong></h3>
        <p style="text-align: right; font-family: Vazir, Tahoma, Arial, sans-serif; line-height: 1.8;">
            با توجه به محدودیت‌های موجود برای کاربران ایرانی در دسترسی به Spotify ما فرآیند ثبت‌نام و خرید را برای شما
            آسان
            کرده‌ایم. اکانت‌های مدنظر شما عزیزان را، به آسانی تنها در کوتاه‌ترین زمان ممکن در اختیار شما قرار می‌گیرد
        </p>

        {{-- Step-by-Step Process --}}

        </head>
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
                                    <a href="{{ route('customer.doc.spotify.detail', ['slug' => $product->slug]) }}"
                                        class="text-decoration-none text-dark">
                                        <div class="card custom-card h-100" itemscope itemtype="https://schema.org/Product">
                                            <div class="text-center p-4">
                                                <img src="/customer/images/spotify.webp" class="card-img-top mb-3 mt-3"
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
                                    <a href="{{ route('customer.doc.spotify.detail', ['slug' => $product->slug]) }}"
                                        class="desktop-product-link">
                                        <div class="desktop-product-card">
                                            <div class="desktop-product-image">
                                                <img src="/customer/images/spotify.webp" alt="{{ $product->name }}"
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
                <h2 class="lux-cta-title" style="margin-top: 66px !important;">نظرات و انتقاداتتون رو باهامون در میان بدارید
                </h2>

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
