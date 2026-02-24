@extends('layouts.masters')
@section('title', 'Growvixo')

@section('content')

    <section>
        <div class="container" id="info">


            <div id="uniqueCarouselExample" class="carousel slide unique-carousel-container z-show" data-bs-ride="carousel">
                <div class="carousel-inner unique-carousel-inner z-show">
                    <div class="carousel-item">
                        <img src="{{ asset('customer/banner/b14.webp') }}" class="d-block w-100"
                            alt="Growvixo - թվային մարքեթինգի ծառայություններ, SEO օպտիմալացում և վաճառքի կայքերի նախագծում բիզնեսի զարգացման համար">
                    </div>

                    <div class="carousel-item active">
                        <img src="{{ asset('customer/banner/b23.webp') }}" class="d-block w-100"
                            alt="Մասնագիտական կայքերի ստեղծում, SEO օպտիմալացում և վաճառքի կայքերի նախագծում Growvixo-ի կողմից">
                    </div>

                    <div class="carousel-item">
                        <img src="{{ asset('customer/banner/b13.webp') }}" class="d-block w-100"
                            alt="Growvixo սոցիալական մեդիայի կառավարում, առցանց գովազդային լուծումներ և վաճառքի կայքերի ստեղծում բիզնեսների համար">
                    </div>
                </div>
                <button class="carousel-control-prev unique-carousel-control-prev z-show" type="button"
                    data-bs-target="#uniqueCarouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Նախորդ</span>
                </button>

                <button class="carousel-control-next unique-carousel-control-next z-show" type="button"
                    data-bs-target="#uniqueCarouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Հաջորդ</span>
                </button>

            </div>


            <div class="container text-dark">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8 text-dark text-cente mt-5">

                        <div class="input-group mb-5">
                            <input type="text" class="form-control form-control-home "
                                placeholder="Get updates & discounts" aria-label="Recipient's username"
                                aria-describedby="basic-addon2" />
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary ms-3 bg-light text-dark"
                                    type="button">ارسال</button>
                            </div>
                        </div>


                    </div>
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



            {{-- Portfolio --}}

         
            {{-- blog  --}}

         


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


            {{-- text dont worry --}}
           

            </head>

            <body>


    <div class="container py-4">
    <div id="desktopCarousel" class="carousel slide d-none d-md-block m-5 z-show" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- ChatGPT -->
            <div class="carousel-item active">
                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="card card-slider-home shadow-sm">
                            <img src="{{ asset('customer/banner/b12.webp') }}" class="card-img-top" alt="اکانت پرمیوم ChatGPT">
                            <div class="card-body-slider text-end">
                                <h5 class="card-title">دسترسی به اکانت پرمیوم ChatGPT</h5>
                                <p class="card-text small">
                                    با اکانت پرمیوم ChatGPT، از آخرین ویژگی‌های این ابزار هوش مصنوعی قدرتمند بهره‌مند شوید و تجربه‌ای بی‌نظیر از گفتگو با هوش مصنوعی داشته باشید.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Canva -->
                    <div class="col-md-4">
                        <div class="card card-slider-home shadow-sm">
                            <img src="{{ asset('customer/banner/b21.webp') }}" loading="lazy" class="card-img-top" alt="اکانت پرمیوم Canva">
                            <div class="card-body-slider text-end">
                                <h5 class="card-title">دسترسی به اکانت پرمیوم Canva</h5>
                                <p class="card-text small">
                                    از امکانات پیشرفته Canva برای طراحی گرافیکی حرفه‌ای استفاده کنید، بدون نیاز به نرم‌افزارهای پیچیده و هزینه‌های بالا.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Spotify -->
                    <div class="col-md-4">
                        <div class="card card-slider-home shadow-sm">
                            <img src="{{ asset('customer/banner/b16.webp') }}" loading="lazy" class="card-img-top" alt="اکانت پرمیوم Spotify">
                            <div class="card-body-slider text-end">
                                <h5 class="card-title">دسترسی به اکانت پرمیوم Spotify</h5>
                                <p class="card-text small">
                                    به میلیون‌ها آهنگ و پادکست با کیفیت عالی دسترسی پیدا کنید و از تجربه موسیقی بی‌نظیر با Spotify لذت ببرید.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="row g-3">
                    <!-- LinkedIn -->
                    <div class="col-md-4">
                        <div class="card card-slider-home shadow-sm">
                            <img src="{{ asset('customer/banner/b22.webp') }}" loading="lazy" class="card-img-top" alt="اکانت پرمیوم LinkedIn">
                            <div class="card-body-slider text-end">
                                <h5 class="card-title">دسترسی به اکانت پرمیوم LinkedIn</h5>
                                <p class="card-text small">
                                    با خرید اکانت پرمیوم LinkedIn، شبکه‌سازی حرفه‌ای را تجربه کنید و به فرصت‌های شغلی بیشتری دسترسی پیدا کنید.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- سایر ابزارهای پرمیوم -->
                    <div class="col-md-4">
                        <div class="card card-slider-home shadow-sm">
                            <img src="{{ asset('customer/banner/b11.webp') }}" loading="lazy" class="card-img-top" alt="دسترسی به ابزارهای حرفه‌ای دیگر">
                            <div class="card-body-slider text-end">
                                <h5 class="card-title">دسترسی به ابزارهای حرفه‌ای دیگر</h5>
                                <p class="card-text small">
                                    ما به شما کمک می‌کنیم تا به ابزارهای پرمیوم دیگری نیز دسترسی پیدا کنید که می‌توانند به رشد کسب‌وکار شما کمک کنند.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- سایر ویژگی‌ها -->
                    <div class="col-md-4">
                        <div class="card card-slider-home shadow-sm">
                            <img src="{{ asset('customer/banner/b24.webp') }}" loading="lazy" class="card-img-top" alt="دسترسی به دیگر ابزارهای حرفه‌ای">
                            <div class="card-body-slider text-end">
                                <h5 class="card-title">دسترسی به دیگر ابزارهای حرفه‌ای</h5>
                                <p class="card-text small">
                                    با دسترسی به سایر ابزارهای حرفه‌ای، شما می‌توانید در زمینه‌های مختلف از جمله تولید محتوا، طراحی، بازاریابی و شبکه‌سازی حرفه‌ای پیشرفت کنید.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- کنترل‌ها -->
        <button class="carousel-control-prev" type="button" data-bs-target="#desktopCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="visually-hidden">قبلی</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#desktopCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="visually-hidden">بعدی</span>
        </button>
    </div>

    <div id="mobileCarousel" class="carousel slide d-md-none m-3 z-show" loading="lazy" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- ChatGPT -->
            <div class="carousel-item active">
                <div class="card card-slider-home shadow-sm">
                    <img src="{{ asset('customer/banner/b12.webp') }}" loading="lazy" class="card-img-top" alt="اکانت پرمیوم ChatGPT">
                    <div class="card-body-slider text-end">
                        <h5 class="card-title">دسترسی به اکانت پرمیوم ChatGPT</h5>
                        <p class="card-text small">
                            با اکانت پرمیوم ChatGPT، از آخرین ویژگی‌های این ابزار هوش مصنوعی قدرتمند بهره‌مند شوید و تجربه‌ای بی‌نظیر از گفتگو با هوش مصنوعی داشته باشید.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Canva -->
            <div class="carousel-item">
                <div class="card card-slider-home shadow-sm">
                    <img src="{{ asset('customer/banner/b21.webp') }}" loading="lazy" class="card-img-top" alt="اکانت پرمیوم Canva">
                    <div class="card-body-slider text-end">
                        <h5 class="card-title">دسترسی به اکانت پرمیوم Canva</h5>
                        <p class="card-text small">
                            از امکانات پیشرفته Canva برای طراحی گرافیکی حرفه‌ای استفاده کنید، بدون نیاز به نرم‌افزارهای پیچیده و هزینه‌های بالا.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Spotify -->
            <div class="carousel-item">
                <div class="card card-slider-home shadow-sm">
                    <img src="{{ asset('customer/banner/b16.webp') }}" loading="lazy" class="card-img-top" alt="اکانت پرمیوم Spotify">
                    <div class="card-body-slider text-end">
                        <h5 class="card-title">دسترسی به اکانت پرمیوم Spotify</h5>
                        <p class="card-text small">
                            به میلیون‌ها آهنگ و پادکست با کیفیت عالی دسترسی پیدا کنید و از تجربه موسیقی بی‌نظیر با Spotify لذت ببرید.
                        </p>
                    </div>
                </div>
            </div>

            <!-- LinkedIn -->
            <div class="carousel-item">
                <div class="card card-slider-home shadow-sm">
                    <img src="{{ asset('customer/banner/b22.webp') }}" loading="lazy" class="card-img-top" alt="اکانت پرمیوم LinkedIn">
                    <div class="card-body-slider text-end">
                        <h5 class="card-title">دسترسی به اکانت پرمیوم LinkedIn</h5>
                        <p class="card-text small">
                            با خرید اکانت پرمیوم LinkedIn، شبکه‌سازی حرفه‌ای را تجربه کنید و به فرصت‌های شغلی بیشتری دسترسی پیدا کنید.
                        </p>
                    </div>
                </div>
            </div>

            <!-- سایر ابزارهای پرمیوم -->
            <div class="carousel-item">
                <div class="card card-slider-home shadow-sm">
                    <img src="{{ asset('customer/banner/b11.webp') }}" loading="lazy" class="card-img-top" alt="دسترسی به ابزارهای حرفه‌ای دیگر">
                    <div class="card-body-slider text-end">
                        <h5 class="card-title">دسترسی به ابزارهای حرفه‌ای دیگر</h5>
                        <p class="card-text small">
                            ما به شما کمک می‌کنیم تا به ابزارهای پرمیوم دیگری نیز دسترسی پیدا کنید که می‌توانند به رشد کسب‌وکار شما کمک کنند.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- کنترل‌ها -->
        <button class="carousel-control-prev" type="button" data-bs-target="#mobileCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="visually-hidden">قبلی</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#mobileCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="visually-hidden">بعدی</span>
        </button>
    </div>
</div>




                <!-- Accordion -->
                <div class="accordion mt-5 mb-5" id="accordionExample">
                    <!-- Growvixo Overview -->
                    <div class="accordion-item" style="direction: rtl; text-align: right;">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="z-show accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <strong>Growvixo – دسترسی به اکانت‌های پرمیوم برای رشد کسب‌وکار شما</strong>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body bg-dark text-light">
                                <p>
                                    <strong>Growvixo</strong> به شما این امکان را می‌دهد که به راحتی و با هزینه‌ای مقرون به
                                    صرفه به اکانت‌های پرمیوم ابزارهای معروف و کاربردی مانند <strong>ChatGPT</strong>،
                                    <strong>Canva</strong>، <strong>Spotify</strong>، <strong>LinkedIn</strong> و دیگر
                                    ابزارهای حرفه‌ای دسترسی پیدا کنید. این ابزارها به شما کمک می‌کنند تا در کسب‌وکار خود به
                                    موفقیت‌های بزرگ‌تری دست یابید.
                                </p>
                                <ul class="ms-3">
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
                        </div>
                    </div>

                    <!-- Friendly & Inspiring Text -->
                    <div class="accordion-item" style="direction: rtl; text-align: right;">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="z-show accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                🔔 Growvixo – راحت‌ترین راه برای دسترسی به ابزارهای حرفه‌ای
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body bg-dark text-light">
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
                        </div>
                    </div>

                    <!-- Short & Brand-focused -->
                    <div class="accordion-item" style="direction: rtl; text-align: right;">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="z-show accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                📣 با Growvixo از ابزارهای حرفه‌ای استفاده کنید
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body bg-dark text-light">
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
                        </div>
                    </div>

                    <!-- New Accordion Section: طراحی فروشگاه آنلاین -->
                    <div class="accordion-item" style="direction: rtl; text-align: right;">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="z-show accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                🛒 اطلاعات از Growvixo – طراحی و فروشگاه آنلاین
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body bg-dark text-light">
                                <p>
                                    اگر به دنبال دسترسی به ابزارهای حرفه‌ای برای ایجاد یک فروشگاه آنلاین موفق هستید،
                                    <strong>Growvixo</strong> بهترین انتخاب برای شماست.
                                    ما به شما کمک می‌کنیم تا با استفاده از ابزارهای پیشرفته، طراحی حرفه‌ای و کاربرپسند برای
                                    فروشگاه آنلاین خود ایجاد کنید.
                                </p>
                                <ul class="ms-3">
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
                        </div>
                    </div>
                </div>
               
        </div>
    </section>
@endsection
