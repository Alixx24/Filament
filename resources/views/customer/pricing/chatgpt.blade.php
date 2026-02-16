@extends('customer.layouts.master-shop')

{{-- ====================== Title Section ====================== --}}
@section('title', 'Խանութի կայքի դիզայն և Social Media Marketing Հայաստանում – GrowVixo')

{{-- ====================== Meta Section ====================== --}}
@section('meta')
    {{-- Indexing & Crawling --}}
    <meta name="robots" content="index, follow">

    {{-- Page Title --}}
    <title>Խանութի կայքի դիզայն և Social Media Marketing Հայաստանում – GrowVixo</title>

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

    <section id="social-media-marketing" class="p-4 m-3 bg-light p-mt-head border border-primary rounded-3">

        <h1>Խանութի կայքի դիզայն և Social Media Marketing Հայաստանում</h1>
        <p>
            Հայաստանի e-commerce շուկան շարունակ աճում է, և բիզնեսների համար կարևոր է ունենալ ոչ միայն գեղեցիկ և
            fully responsive <strong>Խանութի կայքի դիզայն</strong>, այլև արդյունավետ Social Media presence:
            Մեր թիմը առաջարկում է ամբողջական լուծումներ՝ Facebook, Instagram, Telegram և այլ հարթակներում բրենդի
            տեսանելիությունը բարձրացնելու, հաճախորդների ներգրավվածությունը մեծացնելու և առցանց վաճառքը առաջացնելու համար:
        </p>


        {{-- Step-by-Step Process --}}

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
        </style>
        </head>

        <body>
            <!-- آیکون چت -->
            <div class="chat-wrapper">
                <button class="chat-button" id="chatToggle">
                    <i class="fas fa-comments"></i>
                </button>

                <div class="chat-box" id="chatBox">
                    <ul>
                        <li><a href="#">چت با پشتیبانی</a></li>
                        <li><a href="#">سوالات متداول</a></li>
                        <li><a href="#">تماس با ما</a></li>
                    </ul>
                </div>
            </div>

            <style>
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
            </style>

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


            <!-- محتوای صفحه -->
            <div class="container" style="margin-top: 800px !important;">
                <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
                    <h1 class="text-center mb-5" itemprop="name">
                        خرید اکانت ChatGpt - قیمت مناسب و خدمات ویژه
                    </h1>

                    <!-- کارت‌ها -->
                    <div class="row">

                        <!-- کارت 1 -->
                        <div class="col-md-3 col-sm-6 col-12 mb-4">
                            <a href="#" class="text-decoration-none text-dark">
                                <div class="card custom-card h-100" itemscope itemtype="https://schema.org/Product">
                                    <div class="text-center p-4">
                                        <img src="/customer/images/cgatgpt.webp" class="card-img-top"
                                            style="max-width: 80%; height: auto;" alt="کارت معرفی اکانت ChatGpt Go"
                                            title="کارت خرید اکانت ChatGpt Go">
                                    </div>
                                    <div class="text-center p-3">
                                        <h2 class="card-title" itemprop="name">ChatGpt Go اکانت</h2>
                                        <p class="card-text" itemprop="description">
                                            اکانت جمنای با قیمت مناسب و ویژگی‌های خاص. بهترین انتخاب برای خرید ارز دیجیتال.
                                        </p>
                                        <span class="btn btn-dark w-75 mt-3 rounded-pill"
                                            aria-label="خرید اکانت ChatGpt Go">
                                            خرید الآن
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- کارت 2 -->
                        <div class="col-md-3 col-sm-6 col-12 mb-4">
                            <a href="#" class="text-decoration-none text-dark">
                                <div class="card custom-card h-100" itemscope itemtype="https://schema.org/Product">
                                    <div class="text-center p-4">
                                        <img src="/customer/images/cgatgpt.webp" class="card-img-top"
                                            style="max-width: 80%; height: auto;" alt="کارت معرفی اکانت ChatGpt Plus"
                                            title="کارت خرید اکانت ChatGpt Plus">
                                    </div>
                                    <div class="text-center p-3">
                                        <h2 class="card-title" itemprop="name">ChatGpt Plus اکانت</h2>
                                        <p class="card-text" itemprop="description">
                                            اکانت جمنای با امنیت بالا و قیمت رقابتی. امکان خرید سریع و راحت.
                                        </p>
                                        <span class="btn btn-dark w-75 mt-3 rounded-pill"
                                            aria-label="خرید اکانت ChatGpt Plus">
                                            خرید الآن
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- کارت 3 -->
                        <div class="col-md-3 col-sm-6 col-12 mb-4">
                            <a href="#" class="text-decoration-none text-dark">
                                <div class="card custom-card h-100" itemscope itemtype="https://schema.org/Product">
                                    <div class="text-center p-4">
                                        <img src="/customer/images/cgatgpt.webp" class="card-img-top"
                                            style="max-width: 80%; height: auto;" alt="کارت معرفی اکانت ChatGpt Pro"
                                            title="کارت خرید اکانت ChatGpt Pro">
                                    </div>
                                    <div class="text-center p-3">
                                        <h2 class="card-title" itemprop="name">ChatGpt Pro اکانت</h2>
                                        <p class="card-text" itemprop="description">
                                            اکانت جمنای برای تریدرهای حرفه‌ای. قیمت مناسب و سرعت بالا در خرید و فروش.
                                        </p>
                                        <span class="btn btn-dark w-75 mt-3 rounded-pill"
                                            aria-label="خرید اکانت ChatGpt Pro">
                                            خرید الآن
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- کارت 4 -->
                        <div class="col-md-3 col-sm-6 col-12 mb-4">
                            <a href="#" class="text-decoration-none text-dark">
                                <div class="card custom-card h-100" itemscope itemtype="https://schema.org/Product">
                                    <div class="text-center p-4">
                                        <img src="/customer/images/cgatgpt.webp" class="card-img-top"
                                            style="max-width: 80%; height: auto;" alt="کارت معرفی اکانت جمنای 4"
                                            title="کارت خرید اکانت جمنای 4">
                                    </div>
                                    <div class="text-center p-3">
                                        <h2 class="card-title" itemprop="name">اکانت جمنای 4</h2>
                                        <p class="card-text" itemprop="description">
                                            یکی دیگر از اکانت‌های با کیفیت جمنای. امنیت بالا و قیمت مناسب برای شما.
                                        </p>
                                        <span class="btn btn-dark w-75 mt-3 rounded-pill" aria-label="خرید اکانت جمنای 4">
                                            خرید الآن
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

            <li style="margin-top: 1500px !important;">
                <strong>Support & Continuous Growth:</strong>
                <ul>
                    <li>Training for internal teams → managing Social Media channels</li>
                    <li>Continuous strategy updates → aligned with market trends</li>
                    <li>Ongoing optimization → maximize ROI and engagement</li>
                </ul>
            </li>
            </ol>

            {{-- CTA Section --}}
            <section class="lux-cta-wrapper">
                <h2 class="lux-cta-title">Հետադարձ կապ և CTA</h2>
                <p class="lux-cta-desc">
                    Պատրա՞ստ եք բարձրացնել Ձեր e-commerce բրենդը Հայաստանում՝ Social Media Marketing-ի և
                    Խանութի կայքի դիզայն-ի միջոցով։ Սկսեք Ձեր աճի ճանապարհը հիմա:
                </p>

                <form action="/contact-form" method="POST" class="lux-cta-form">
                    <label class="lux-cta-label" for="name">Անուն և Ազգանուն:</label>
                    <input class="lux-cta-input" type="text" id="name" name="name" required>

                    <label class="lux-cta-label" for="email">Էլ. Փոստ:</label>
                    <input class="lux-cta-input" type="email" id="email" name="email" required>

                    <label class="lux-cta-label" for="phone">Հեռախոս:</label>
                    <input class="lux-cta-input" type="tel" id="phone" name="phone" required>

                    <label class="lux-cta-label" for="message">Հաղորդագրություն / Նշումներ:</label>
                    <textarea class="lux-cta-textarea" id="message" name="message" rows="6" required></textarea>

                    <button type="submit" class="lux-cta-button">Ուղարկել</button>
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
