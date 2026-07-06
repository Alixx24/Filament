@extends('customer.layouts.master-home-fa')
@section('title', 'Growvixo')

@section('content')
    <section>

        <nav class="navbar p-3">
            <div class="logo"> <span class="logo-primary">Grow</span><span class="logo-secondary">vixo</span>
            </div>
            <ul class="nav-links">
                <li><a href="#">پشتیبانی تلگرام</a></li>
                <li><a href="#">اکانت Gemini</a></li>
                <li><a href="#">اکانت Cursor</a></li>
                <li><a href="#">اکانت Claude</a></li>
                <li><a href="#">اکانت TradingView</a></li>
                <li><a href="#">اکانت LinkedIn</a></li>
                <li><a class="btn-primary" href="#">Կապ</a></li>
            </ul>

        </nav>
        <div class="container" id="info">

            {{-- slider --}}




            <div class="p3d z-show mb-5 mt-5" id="p3dSlider" aria-roledescription="carousel">
                <div class="p3d__bg" aria-hidden="true">
                    <div class="p3d__bg-layer"></div>
                    <div class="p3d__bg-layer"></div>
                </div>

                <div class="p3d__stage">
                    <div class="p3d__inner">
                        <figure class="p3d__slide is-current" role="group" aria-label="اسلاید ۱ از ۳"
                            data-img="{{ asset('customer/banner/b23.webp') }}">
                            <div class="p3d__img" style="background-image:url('{{ asset('customer/banner/b23.webp') }}')"
                                role="img"
                                aria-label="Մասնագիտական կայքերի ստեղծում, SEO օպտիմալացում և վաճառքի կայքերի նախագծում Growvixo-ի կողմից">
                            </div>
                        </figure>

                        <figure class="p3d__slide" role="group" aria-label="اسلاید ۲ از ۳"
                            data-img="{{ asset('customer/banner/b14.webp') }}">
                            <div class="p3d__img" style="background-image:url('{{ asset('customer/banner/b14.webp') }}')"
                                role="img"
                                aria-label="Growvixo - թվային մարքեթինգի ծառայություններ, SEO օպտիմալացում և վաճառքի կայքերի նախագծում բիզնեսի զարգացման համար">
                            </div>
                        </figure>

                        <figure class="p3d__slide" role="group" aria-label="اسلاید ۳ از ۳"
                            data-img="{{ asset('customer/banner/b13.webp') }}">
                            <div class="p3d__img" style="background-image:url('{{ asset('customer/banner/b13.webp') }}')"
                                role="img"
                                aria-label="Growvixo սոցիալական մեդիայի կառավարում, առցանց գովազդային լուծումներ և վաճառքի կայքերի ստեղծում բիզնեսների համար">
                            </div>
                        </figure>
                    </div>
                </div>

                <button class="p3d__arrow p3d__arrow--prev" type="button" aria-label="اسلاید قبلی">&#8249;</button>
                <button class="p3d__arrow p3d__arrow--next" type="button" aria-label="اسلاید بعدی">&#8250;</button>

                <div class="p3d__dots" role="tablist" aria-label="انتخاب اسلاید"></div>
            </div>

            <script>
                (function() {
                    'use strict';

                    var root = document.getElementById('p3dSlider');
                    if (!root) return;

                    var inner = root.querySelector('.p3d__inner');
                    var slides = Array.prototype.slice.call(root.querySelectorAll('.p3d__slide'));
                    var bgLayers = Array.prototype.slice.call(root.querySelectorAll('.p3d__bg-layer'));
                    var dotsWrap = root.querySelector('.p3d__dots');
                    var prevBtn = root.querySelector('.p3d__arrow--prev');
                    var nextBtn = root.querySelector('.p3d__arrow--next');

                    var current = 0;
                    var total = slides.length;
                    var isAnimating = false;
                    var activeBg = 0;
                    var autoplayId = null;
                    var AUTOPLAY_DELAY = 5500;
                    var ANIM_DURATION = 950;

                    var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
                    var isMobile = window.matchMedia('(max-width: 650px)');

                    /* ---------- نقطه‌ها ---------- */
                    var dots = slides.map(function(_, i) {
                        var d = document.createElement('button');
                        d.type = 'button';
                        d.className = 'p3d__dot' + (i === 0 ? ' is-active' : '');
                        d.setAttribute('aria-label', 'رفتن به اسلاید ' + (i + 1));
                        d.addEventListener('click', function() {
                            stopAutoplay();
                            goTo(i);
                        });
                        dotsWrap.appendChild(d);
                        return d;
                    });

                    /* ---------- پس‌زمینه‌ی محو با کراس‌فید ---------- */
                    function setBg(index) {
                        var nextLayer = bgLayers[1 - activeBg];
                        nextLayer.style.backgroundImage = "url('" + slides[index].dataset.img + "')";
                        void nextLayer.offsetWidth; /* force reflow */
                        nextLayer.classList.add('is-visible');
                        bgLayers[activeBg].classList.remove('is-visible');
                        activeBg = 1 - activeBg;
                    }
                    bgLayers[0].style.backgroundImage = "url('" + slides[0].dataset.img + "')";
                    bgLayers[0].classList.add('is-visible');

                    /* ---------- تعویض اسلاید ---------- */
                    function goTo(index, dir) {
                        if (isAnimating || index === current) return;
                        isAnimating = true;

                        dir = dir || (index > current ? 1 : -1);
                        root.style.setProperty('--dir', dir);

                        var prev = slides[current];
                        var next = slides[index];

                        /* اسلاید بعدی از سمت درست وارد شود */
                        void next.offsetWidth;

                        prev.classList.remove('is-current');
                        prev.classList.add('is-leaving');
                        next.classList.add('is-current');

                        dots[current].classList.remove('is-active');
                        dots[index].classList.add('is-active');

                        setBg(index);
                        current = index;

                        window.setTimeout(function() {
                            prev.classList.remove('is-leaving');
                            isAnimating = false;
                        }, ANIM_DURATION);
                    }

                    function nextSlide() {
                        goTo((current + 1) % total, 1);
                    }

                    function prevSlide() {
                        goTo((current - 1 + total) % total, -1);
                    }

                    prevBtn.addEventListener('click', function() {
                        stopAutoplay();
                        prevSlide();
                    });
                    nextBtn.addEventListener('click', function() {
                        stopAutoplay();
                        nextSlide();
                    });

                    /* ناوبری با کیبورد */
                    root.setAttribute('tabindex', '0');
                    root.addEventListener('keydown', function(e) {
                        if (e.key === 'ArrowRight') {
                            stopAutoplay();
                            nextSlide();
                        }
                        if (e.key === 'ArrowLeft') {
                            stopAutoplay();
                            prevSlide();
                        }
                    });

                    /* سوایپ لمسی */
                    var touchStartX = null;
                    root.addEventListener('touchstart', function(e) {
                        touchStartX = e.touches[0].clientX;
                    }, {
                        passive: true
                    });
                    root.addEventListener('touchend', function(e) {
                        if (touchStartX === null) return;
                        var delta = e.changedTouches[0].clientX - touchStartX;
                        touchStartX = null;
                        if (Math.abs(delta) < 40) return;
                        stopAutoplay();
                        if (delta < 0) {
                            nextSlide();
                        } else {
                            prevSlide();
                        }
                    }, {
                        passive: true
                    });

                    /* ---------- Autoplay ---------- */
                    function startAutoplay() {
                        if (autoplayId || reduceMotion.matches) return;
                        autoplayId = window.setInterval(nextSlide, AUTOPLAY_DELAY);
                    }

                    function stopAutoplay() {
                        if (autoplayId) {
                            window.clearInterval(autoplayId);
                            autoplayId = null;
                        }
                    }
                    startAutoplay();
                    document.addEventListener('visibilitychange', function() {
                        if (document.hidden) {
                            stopAutoplay();
                        } else {
                            startAutoplay();
                        }
                    });

                    /* ---------- چرخش سه‌بعدی نرم با lerp (تکنیک اصلی CodePen) ---------- */
                    var target = {
                        x: 0,
                        y: 0
                    };
                    var pos = {
                        x: 0,
                        y: 0
                    };
                    var MAX_ROTATE = 8; /* حداکثر درجه‌ی چرخش */
                    var PARALLAX = 14; /* حداکثر جابه‌جایی پارالکس تصویر (px) */
                    var rafId = null;

                    function lerp(from, to) {
                        var fraction = 0.1;
                        return {
                            x: from.x + (to.x - from.x) * fraction,
                            y: from.y + (to.y - from.y) * fraction
                        };
                    }

                    function tiltLoop() {
                        pos = lerp(pos, target);
                        inner.style.transform =
                            'rotateX(' + pos.x.toFixed(3) + 'deg) rotateY(' + pos.y.toFixed(3) + 'deg)';
                        root.style.setProperty('--tx', ((pos.y / MAX_ROTATE) * PARALLAX).toFixed(2) + 'px');
                        root.style.setProperty('--ty', ((-pos.x / MAX_ROTATE) * PARALLAX).toFixed(2) + 'px');
                        rafId = window.requestAnimationFrame(tiltLoop);
                    }

                    function onMouseMove(e) {
                        var rect = root.getBoundingClientRect();
                        var nx = ((e.clientX - rect.left) / rect.width) * 2 - 1; /* -1..1 */
                        var ny = ((e.clientY - rect.top) / rect.height) * 2 - 1; /* -1..1 */
                        target.x = -ny * MAX_ROTATE;
                        target.y = nx * MAX_ROTATE;
                    }

                    function onMouseLeave() {
                        target.x = 0;
                        target.y = 0;
                    }

                    function enableTilt() {
                        if (rafId || isMobile.matches || reduceMotion.matches) return;
                        root.addEventListener('mousemove', onMouseMove);
                        root.addEventListener('mouseleave', onMouseLeave);
                        rafId = window.requestAnimationFrame(tiltLoop);
                    }

                    function disableTilt() {
                        root.removeEventListener('mousemove', onMouseMove);
                        root.removeEventListener('mouseleave', onMouseLeave);
                        if (rafId) {
                            window.cancelAnimationFrame(rafId);
                            rafId = null;
                        }
                        target = {
                            x: 0,
                            y: 0
                        };
                        pos = {
                            x: 0,
                            y: 0
                        };
                        inner.style.transform = '';
                        root.style.setProperty('--tx', '0px');
                        root.style.setProperty('--ty', '0px');
                    }

                    function syncTilt() {
                        if (isMobile.matches || reduceMotion.matches) {
                            disableTilt();
                        } else {
                            enableTilt();
                        }
                    }
                    syncTilt();
                    isMobile.addEventListener('change', syncTilt);
                    reduceMotion.addEventListener('change', syncTilt);
                })();
            </script>

            {{-- ============== sileder be end ============== --}}
            <header class="hero-header">

                <div id="particles-js"></div>

                <div class="hero-content">
                    <h1>
                        Growvixo <br> دسترسی به بهترین ابزارهای دیجیتال برای رشد کسب‌وکار شما
                    </h1>
                    <p>
                        با خرید اکانت‌های پرمیوم
                        به دنیای ابزارهای حرفه‌ای دست پیدا کنید. ما به شما کمک می‌کنیم تا با استفاده از این ابزارها در
                        زمینه‌های هوش
                        مصنوعی، طراحی گرافیکی، موسیقی و شبکه‌سازی حرفه‌ای
                        یک گام بزرگ به سوی موفقیت بردارید.
                    <h5 class="mt-2 mb-2">:برخی خدمات ما</h5>

                    <strong>ChatGPT</strong>، <strong>Gemini</strong>، <strong>Cursor</strong>، <strong>Canva</strong>،
                    <strong>Spotify</strong>,<strong>LinkedIn</strong>،
                    </p>

                    {{-- start btn --}}
                    <a class="cta-btn" href="#" id="start">شروع کنید</a>
                </div>
            </header>
            <div id="particles-js"></div>

               <!-- Accordion -->
            <div class="bg-light py-4">
                <div class="faq-acc mt-5 mb-5">
                    <div class="faq-acc__main-title">Growvixo</div>

                    <input type="radio" id="faqOverview" name="faq-acc" checked>
                    <label class="faq-acc__item z-show" for="faqOverview">
                        <div class="faq-acc__title">Growvixo – دسترسی به اکانت‌های پرمیوم برای رشد کسب‌وکار شما</div>
                        <div class="faq-acc__content">
                            <p>
                                <strong>Growvixo</strong> به شما این امکان را می‌دهد که به راحتی و با هزینه‌ای مقرون به
                                صرفه به اکانت‌های پرمیوم ابزارهای معروف و کاربردی مانند <strong>ChatGPT</strong>،
                                <strong>Canva</strong>، <strong>Spotify</strong>، <strong>LinkedIn</strong> و دیگر
                                ابزارهای حرفه‌ای دسترسی پیدا کنید. این ابزارها به شما کمک می‌کنند تا در کسب‌وکار خود به
                                موفقیت‌های بزرگ‌تری دست یابید.
                            </p>
                            <ul>
                                <li><strong>دسترسی به اکانت‌های پرمیوم:</strong> خرید اکانت‌های پرمیوم برای استفاده از
                                    آخرین ویژگی‌ها و ابزارهای پیشرفته.</li>
                                <li><strong>قیمت مناسب:</strong> دسترسی به ابزارهای حرفه‌ای با قیمت‌های ارزان‌تر نسبت به
                                    خرید مستقیم اکانت.</li>
                                <li><strong>تجربه کاربری بهبود یافته:</strong> استفاده از ابزارهای قدرتمند برای تسهیل
                                    کارها و افزایش بهره‌وری.</li>
                                <li><strong>پشتیبانی حرفه‌ای:</strong> ارائه خدمات پشتیبانی برای حل هرگونه مشکل و
                                    راهنمایی در استفاده از اکانت‌ها.</li>
                            </ul>
                        </div>
                    </label>

                    <input type="radio" id="faqEasyAccess" name="faq-acc">
                    <label class="faq-acc__item z-show" for="faqEasyAccess">
                        <div class="faq-acc__title">🔔 Growvixo – راحت‌ترین راه برای دسترسی به ابزارهای حرفه‌ای</div>
                        <div class="faq-acc__content">
                            <p>
                                به <strong>Growvixo</strong> خوش آمدید! ما اینجا هستیم تا به شما کمک کنیم به راحتی و با
                                هزینه‌ای مناسب به اکانت‌های پرمیوم ابزارهایی مثل <strong>ChatGPT</strong>،
                                <strong>Canva</strong>، <strong>Spotify</strong> و <strong>LinkedIn</strong> دسترسی پیدا
                                کنید.
                                از این ابزارها برای پیشرفت در کسب‌وکار خود و بهبود عملکردهای مختلف استفاده کنید.
                            </p>
                            <p>
                                اگر به دنبال دسترسی آسان به ابزارهای حرفه‌ای و ایجاد یک تحول در کار خود هستید،
                                <strong>Growvixo</strong> انتخاب مناسبی برای شماست.
                            </p>
                        </div>
                    </label>

                    <input type="radio" id="faqBrand" name="faq-acc">
                    <label class="faq-acc__item z-show" for="faqBrand">
                        <div class="faq-acc__title">📣 با Growvixo از ابزارهای حرفه‌ای استفاده کنید</div>
                        <div class="faq-acc__content">
                            <p>
                                <strong>Growvixo</strong> به شما این امکان را می‌دهد که از ابزارهای پرمیوم و حرفه‌ای
                                مانند <strong>ChatGPT</strong>، <strong>Canva</strong>، <strong>Spotify</strong>،
                                <strong>LinkedIn</strong> و دیگر ابزارهای معروف بهره‌مند شوید.
                                با خرید اکانت‌های پرمیوم از ما، شما به امکانات جدید و پیشرفته‌تر این ابزارها دست پیدا
                                خواهید کرد که می‌تواند به رشد کسب‌وکار شما کمک کند.
                            </p>
                            <p>
                                این ابزارها به شما کمک می‌کنند تا در زمینه‌های مختلف، از جمله تولید محتوا، طراحی
                                گرافیکی، موسیقی، و شبکه‌سازی حرفه‌ای، یک گام بزرگ به سوی موفقیت بردارید.
                            </p>
                        </div>
                    </label>

                    <input type="radio" id="faqShopDesign" name="faq-acc">
                    <label class="faq-acc__item z-show" for="faqShopDesign">
                        <div class="faq-acc__title">🛒 اطلاعات از Growvixo – طراحی و فروشگاه آنلاین</div>
                        <div class="faq-acc__content">
                            <p>
                                اگر به دنبال دسترسی به ابزارهای حرفه‌ای برای ایجاد یک فروشگاه آنلاین موفق هستید،
                                <strong>Growvixo</strong> بهترین انتخاب برای شماست.
                                ما به شما کمک می‌کنیم تا با استفاده از ابزارهای پیشرفته، طراحی حرفه‌ای و کاربرپسند برای
                                فروشگاه آنلاین خود ایجاد کنید.
                            </p>
                            <ul>
                                <li><strong>طراحی فروشگاه آنلاین حرفه‌ای</strong> – طراحی زیبا و کاربردی برای جذب
                                    مشتریان بیشتر.</li>
                                <li><strong>ابزارهای پیشرفته</strong> – دسترسی به ابزارهای پرمیوم برای بهینه‌سازی
                                    فرآیندهای فروشگاهی.</li>
                                <li><strong>پشتیبانی 24/7</strong> – پشتیبانی شبانه‌روزی برای حل مشکلات و بهبود عملکرد
                                    فروشگاه.</li>
                                <li><strong>نصب و راه‌اندازی سریع</strong> – راه‌اندازی سریع و آسان فروشگاه آنلاین شما
                                    بدون هیچ مشکلی.</li>
                            </ul>
                        </div>
                    </label>
                </div>
            </div>
            {{-- services --}}

            <section id="services">
                <h2>خدمات ما</h2>
                <div class="service-cards">
                    <div class="card z-show">
                        <h3>دسترسی به اکانت‌های پرمیوم ChatGPT</h3>
                        <p>
                            با خرید اکانت‌های پرمیوم <strong>چت جی پی تی</strong>، به آخرین نسخه این ابزار هوش مصنوعی
                            قدرتمند دسترسی پیدا کرده و تجربه‌ای بی‌نظیر از گفتگو با هوش مصنوعی را خواهید داشت.
                        </p>
                    </div>
                    <div class="card z-show">
                        <h3>دسترسی به اکانت‌های پرمیوم کانوا</h3>
                        <p>
                            از امکانات بی‌نظیر <strong>کانوا</strong> استفاده کنید و طرح‌های گرافیکی حرفه‌ای ایجاد کنید،
                            بدون نیاز به نرم‌افزارهای پیچیده و هزینه‌های بالا.
                        </p>
                    </div>
                    <div class="card z-show">
                        <h3>دسترسی به اکانت‌های پرمیوم اسپاتیفای</h3>
                        <p>
                            به میلیون‌ها آهنگ و پادکست با کیفیت عالی دسترسی پیدا کنید و از تجربه موسیقی بی‌نظیر با
                            <strong>اسپاتیفای</strong> لذت ببرید.
                        </p>
                    </div>
                </div>
            </section>

            {{-- Contact --}}

            <section id="contact">
                <h2>تماس با ما</h2>
                <p>اگر سوالی در خصوص خرید اکانت‌های پرمیوم یا نیاز به راهنمایی دارید، لطفاً با ما در تماس باشید. ما در اسرع
                    وقت به شما پاسخ خواهیم داد.</p>

                <form class="z-show">
                    <input class="z-show" type="text" placeholder="نام شما" required>
                    <input class="z-show" type="email" placeholder="آدرس ایمیل شما" required>
                    <textarea class="z-show" placeholder="پیام شما" required></textarea>
                    <button class="z-show" type="submit">ارسال پیام</button>
                </form>
            </section>

        </div>
    </section>
@endsection
