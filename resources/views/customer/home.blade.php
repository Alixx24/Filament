@extends('customer.layouts.master')
@section('title', 'AlixDev')

@section('content')

 

    <section>
        <div class="container" id="info">


            <div id="uniqueCarouselExample" class="carousel slide unique-carousel-container z-show" data-bs-ride="carousel">
                <div class="carousel-inner unique-carousel-inner z-show">
                    <div class="carousel-item">
                        <img src="{{ asset('customer/banner/b14.webp') }}" class="d-block w-100"
                            alt="Growvixo թվային մարքեթինգի ծառայություններ և արդյունավետ ռազմավարություններ բիզնեսի զարգացման համար">
                    </div>

                    <div class="carousel-item active">
                        <img src="{{ asset('customer/banner/b23.webp') }}" class="d-block w-100"
                            alt="Մասնագիտական կայքերի ստեղծում և SEO օպտիմալացում Growvixo-ի կողմից">
                    </div>

                    <div class="carousel-item">
                        <img src="{{ asset('customer/banner/b13.webp') }}" class="d-block w-100"
                            alt="Growvixo սոցիալական մեդիայի կառավարում և առցանց գովազդային լուծումներ բիզնեսների համար">
                    </div>


                    {{-- <!--   <div class="carousel-item">-->
                    <!--    <img src="{{ asset('customer/banner/b8.webp') }}" class="d-block w-100" alt="...">-->
                    <!--</div>--> --}}
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
                                    type="button">Ուղարկել</button>
                            </div>
                        </div>


                    </div>
                </div>
            </div>


            {{-- services --}}

            <section id="services">
                <h2>Մեր ծառայությունները</h2>
                <div class="service-cards">

                    <div class="card z-show">
                        <h3>Թվային մարքեթինգ</h3>
                        <p>
                            Արդյունավետ թվային մարքեթինգի ռազմավարություններ՝ բիզնեսի ճանաչելիությունը բարձրացնելու և նոր
                            հաճախորդներ
                            ներգրավելու համար։
                        </p>
                    </div>

                    <div class="card z-show">
                        <h3>Սոցիալական մեդիայի կառավարում</h3>
                        <p>
                            Facebook, Instagram և այլ սոցիալական հարթակների մասնագիտական կառավարում՝ բրենդի աճի և
                            ներգրավվածության
                            բարձրացման համար։
                        </p>
                    </div>

                    <div class="card z-show">
                        <h3>SEO օպտիմալացում և վերլուծություն</h3>
                        <p>
                            Որոնողական համակարգերում տեսանելիության բարելավում և տվյալների խորացված վերլուծություն՝ կայքի
                            արդյունավետությունը
                            բարձրացնելու համար։
                        </p>
                    </div>

                </div>
            </section>



            {{-- Portfolio --}}

            <section id="portfolio">
                <h2>Մեր աշխատանքները</h2>
                <div class="projects">

                    <div class="project-card z-show">
                        <img src="project1.jpg" alt="Growvixo նախագծի օրինակ 1՝ թվային մարքեթինգ և կայքի զարգացում">
                        <h3>Նախագիծ 1</h3>
                    </div>

                    <div class="project-card z-show">
                        <img src="project2.jpg"
                            alt="Growvixo նախագծի օրինակ 2՝ սոցիալական մեդիայի կառավարում և SEO արդյունքներ">
                        <h3>Նախագիծ 2</h3>
                    </div>

                </div>
            </section>



            {{-- blog  --}}

            <section id="blog" class="z-show">
                <h2>Բլոգ</h2>
                <div class="blog-posts z-show">
                    @foreach ($posts as $post)
                        <div class="post-card z-show">
                            <h3>{{ $post['title'] }}</h3>
                            <p>{{ \Illuminate\Support\Str::limit($post['summary'], 42, '...') }}</p>
                            <a class="btn btn-success" href="{{ route('customer.post.show', $post['slug']) }}">
                                Կարդալ ավելին
                            </a>
                        </div>
                    @endforeach

                    <div class="post-card z-show">
                        <h3>SEO լավագույն պրակտիկաներ</h3>
                        <p>Ինչպես բարձրացնել օրգանական տրաֆիկը և բարելավել որոնողական համակարգերի դիրքերը:</p>
                        <a class="btn btn-success" href="#">Կարդալ ավելին</a>
                    </div>
                </div>
            </section>



            {{-- Contact --}}

            <section id="contact">
                <h2>Կապ մեզ հետ</h2>
                <p>Կիսվեք ձեր նախագծով կամ հարցով, և մենք կպատասխանենք հնարավորինս արագ:</p>

                <form class=" z-show">
                    <input class="z-show" type="text" placeholder="Անուն" required>
                    <input class="z-show" type="email" placeholder="Էլ․ հասցե" required>
                    <textarea class="z-show" placeholder="Հաղորդագրություն"></textarea>
                    <button class="z-show" type="submit">Ուղարկել</button>
                </form>
            </section>








            {{-- text dont worry --}}
            <div class="container my-5">
                <div class="row justify-content-center ">
                    <div class="col-12 col-md-10 col-lg-8 z-show">
                        <div class="p-5 rounded shadow-lg z-show bg-home-txt"
                         >
                            <div class="text-center text-dark bg-home-div">

                                <p><strong>Growvixo</strong> հանդիսանում է առաջատար թվային մարքեթինգի և վեբ դիզայնի
                                    գործակալություն,
                                    որը օգնում է բիզնեսներին մեծացնել իրենց առցանց տեսանելիությունը և հասնել նպատակային
                                    լսարանին:</p>

                                <p>Մենք մասնագիտացած ենք <strong>SEO օպտիմալացման</strong>, սոցիալական մեդիայի կառավարման և
                                    արդյունավետ թվային մարքեթինգի ռազմավարությունների ստեղծման մեջ, որոնք ապահովում են
                                    իրական արդյունքներ:</p>

                                <p>Growvixo-ով դուք կստանաք ժամանակակից և օգտվողամետ վեբ կայք, որը գրավում է այցելուներին և
                                    վերածում նրանց հաճախորդների:</p>

                                <p>Մեր թիմը վերլուծում է տվյալները և օպտիմալացնում ձեր թվային կետառները՝ ապահովելու
                                    առավելագույն
                                    վերադարձը և երկարաժամկետ աճը:</p>

                                <p>Growvixo-ն օգնում է բրենդներին բարձրացնել առցանց հեղինակությունը, լինել ավելի տեսանելի և
                                    արդյունավետորեն հասնել նպատակային լսարանին, գերազանցելով մրցակիցներին:</p>

                                <p>Մենք ստեղծում ենք անհատականացված թվային մարքեթինգի ռազմավարություններ, որոնք կենտրոնացած
                                    են
                                    արդյունքների վրա և աջակցում են ձեր բիզնեսի զարգացմանը:</p>

                                <p>Անկախ նրանից, թե ձեզ անհրաժեշտ է <strong>մասնագիտական վեբ կայքի մշակում</strong>,
                                    SEO օպտիմալացում կամ առցանց գովազդի ռազմավարություն, Growvixo-ն ձեր վստահելի գործընկերն
                                    է:</p>

                                <p>Ընտրելով Growvixo, դուք ստանում եք ռազմավարական գործընկեր, որը օգնում է ավելի շատ
                                    հաճախորդներ
                                    գրավել և մեծացնել վաճառքի ծավալները:</p>

                                <p><strong>Growvixo</strong> – ձեր ճանապարհը դեպի թվային աճ, նորարարություն և իրական
                                    արդյունքներ առցանց:</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            </head>

            <body>

               
                <div class="container py-4">
                    <div id="desktopCarousel" class="carousel slide d-none d-md-block m-5 z-show" data-bs-ride="carousel">
                        <div class="carousel-inner ">
                            <div class="carousel-item active">
                                <div class="row g-3">
                                    <!--  SEO -->
                                    <div class="col-md-4">
                                        <div class="card card-slider-home shadow-sm">
                                            <img src="{{ asset('customer/banner/b12.webp') }}" class="card-img-top"
                                                alt="Growvixo SEO optimizācija – augstas pozīcijas Google meklētājprogrammās">
                                            <div class="card-body-slider ">
                                                <h5 class="card-title">SEO Optimēšana</h5>
                                                <p class="card-text small">Izveidojam stratēģijas, kas palīdz jūsu
                                                    mājaslapai sasniegt augstākās pozīcijas meklētājos un palielināt
                                                    organisko trafiku.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!--  Web dizains -->
                                    <div class="col-md-4">
                                        <div class="card card-slider-home shadow-sm">
                                            <img src="{{ asset('customer/banner/b21.webp') }}" loading="lazy"
                                                class="card-img-top"
                                                alt="Growvixo՝ մասնագիտական վեբ կայքի մշակում՝ ժամանակակից և օգտվողամետ լուծումներ">
                                            <div class="card-body-slider">
                                                <h5 class="card-title">Վեբ Դիզայն</h5>
                                                <p class="card-text small">
                                                    Մենք ստեղծում ենք ժամանակակից, օգտվողամետ վեբ կայքեր, որոնք գրավում են
                                                    այցելուներին
                                                    և վերածում նրանց հաճախորդների՝ բարձրացնելով բիզնեսի աճը:
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- Sociālie tīkli -->
                                    <div class="col-md-4">
                                        <div class="card card-slider-home shadow-sm">
                                            <img src="{{ asset('customer/banner/b16.webp') }}" loading="lazy"
                                                class="card-img-top"
                                                alt="Growvixo սոցիալական մեդիայի կառավարում՝ բրենդի տեսանելիության բարձրացում և հաճախորդների ներգրավվածություն">
                                            <div class="card-body-slider">
                                                <h5 class="card-title">Սոցիալական մեդիայի կառավարում</h5>
                                                <p class="card-text small">
                                                    Մենք բարձրացնում ենք ձեր բրենդի տեսանելիությունը և հաճախորդների
                                                    ներգրավվածությունը
                                                    արդյունավետ սոցիալական մեդիայի ռազմավարությունների միջոցով:
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="row g-3">
                                    <!--  Digitālā reklāma -->
                                    <div class="col-md-4">
                                        <div class="card card-slider-home shadow-sm">
                                            <img src="{{ asset('customer/banner/b22.webp') }}" loading="lazy"
                                                class="card-img-top"
                                                alt="Growvixo թվային գովազդ՝ ROI օպտիմալացված արշավներ և վաճառքի աճ">
                                            <div class="card-body-slider">
                                                <h5 class="card-title">Թվային գովազդ</h5>
                                                <p class="card-text small">
                                                    Մենք պատրաստում ենք նպատակային թվային գովազդի արշավներ, որոնք ապահովում
                                                    են առավելագույն վերադարձ
                                                    և մեծացնում վաճառքի ծավալները:
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- Satura mārketings -->
                                    <div class="col-md-4">
                                        <div class="card card-slider-home shadow-sm">
                                            <img src="{{ asset('customer/banner/b11.webp') }}" loading="lazy"
                                                class="card-img-top"
                                                alt="Growvixo բովանդակության մարքեթինգ՝ որակյալ և նպատակային բովանդակություն">
                                            <div class="card-body-slider">
                                                <h5 class="card-title">Բովանդակության մարքեթինգ</h5>
                                                <p class="card-text small">
                                                    Մենք ստեղծում ենք որակյալ բովանդակություն, որը գրավում է նպատակային
                                                    լսարանին,
                                                    բարձրացնում բրենդի հեղինակությունը և ձևավորում երկարաժամկետ
                                                    հարաբերություններ հաճախորդների հետ:
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- Datu analīze -->
                                    <div class="col-md-4">
                                        <div class="card card-slider-home shadow-sm">
                                            <img src="{{ asset('customer/banner/b24.webp') }}" loading="lazy"
                                                class="card-img-top"
                                                alt="Growvixo տվյալների վերլուծություն՝ բարելավման հնարավորություններ և օպտիմալացում">
                                            <div class="card-body">
                                                <h5 class="card-title">Տվյալների վերլուծություն և օպտիմալացում</h5>
                                                <p class="card-text small">
                                                    Մենք վերլուծում ենք արշավների արդյունքները և օպտիմալացնում
                                                    ռազմավարությունները՝ ապահովելու
                                                    երկարաժամկետ աճ և առավելագույն ROI:
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#desktopCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                            <span class="visually-hidden">قبلی</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#desktopCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                            <span class="visually-hidden">بعدی</span>
                        </button>
                    </div>
                    <div id="mobileCarousel" class="carousel slide d-md-none m-3 z-show" loading="lazy"
                        data-bs-ride="carousel">
                        <div class="carousel-inner">

                            <!-- SEO -->
                            <div class="carousel-item active">
                                <div class="card card-slider-home shadow-sm">
                                    <img src="{{ asset('customer/banner/b12.webp') }}" loading="lazy"
                                        class="card-img-top" alt="SEO Optimēšana">
                                    <div class="card-body-slider">
                                        <h5 class="card-title">SEO Optimēšana</h5>
                                        <p class="card-text small">Izveidojam stratēģijas, kas palīdz jūsu mājaslapai
                                            sasniegt augstākās pozīcijas meklētājos un palielināt organisko trafiku.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Web Dizains -->
                            <div class="carousel-item">
                                <div class="card card-slider-home shadow-sm">
                                    <img src="{{ asset('customer/banner/b21.webp') }}" loading="lazy"
                                        class="card-img-top" alt="Web Dizains">
                                    <div class="card-body-slider">
                                        <h5 class="card-title">Web Dizains</h5>
                                        <p class="card-text small">Veidojam modernas, lietotājam draudzīgas mājaslapas, kas
                                            piesaista apmeklētājus un pārvērš tos par klientiem.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Sociālo Tīklu Pārvaldība -->
                            <div class="carousel-item">
                                <div class="card card-slider-home shadow-sm">
                                    <img src="{{ asset('customer/banner/b16.webp') }}" loading="lazy"
                                        class="card-img-top" alt="Sociālo Tīklu Pārvaldība">
                                    <div class="card-body-slider">
                                        <h5 class="card-title">Sociālo Tīklu Pārvaldība</h5>
                                        <p class="card-text small">Palielinām jūsu zīmola atpazīstamību un klientu iesaisti
                                            ar efektīvām sociālo tīklu stratēģijām.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Digitālā Reklāma -->
                            <div class="carousel-item">
                                <div class="card card-slider-home shadow-sm">
                                    <img src="{{ asset('customer/banner/b22.webp') }}" loading="lazy"
                                        class="card-img-top" alt="Digitālā Reklāma">
                                    <div class="card-body-slider">
                                        <h5 class="card-title">Digitālā Reklāma</h5>
                                        <p class="card-text small">Izstrādājam mērķtiecīgas reklāmas kampaņas, kas
                                            nodrošina maksimālu atdevi un palielina pārdošanas apjomus.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Satura Mārketings -->
                            <div class="carousel-item">
                                <div class="card card-slider-home shadow-sm">
                                    <img src="{{ asset('customer/banner/b11.webp') }}" loading="lazy"
                                        class="card-img-top" alt="Satura Mārketings">
                                    <div class="card-body-slider">
                                        <h5 class="card-title">Satura Mārketings</h5>
                                        <p class="card-text small">Radām kvalitatīvu saturu, kas piesaista mērķauditoriju,
                                            veicina zīmola autoritāti un veido ilgtermiņa attiecības ar klientiem.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Datu Analīze & Optimizācija -->
                            <div class="carousel-item">
                                <div class="card card-slider-home shadow-sm">
                                    <img src="{{ asset('customer/banner/b24.webp') }}" loading="lazy"
                                        class="card-img-top" alt="Datu Analīze & Optimizācija">
                                    <div class="card-body-slider">
                                        <h5 class="card-title">Datu Analīze & Optimizācija</h5>
                                        <p class="card-text small">Analizējam kampaniju rezultātus un optimizējam
                                            stratēģijas, lai nodrošinātu ilgtermiņa izaugsmi un maksimālu ROI.</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- contols -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#mobileCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                            <span class="visually-hidden">Նախորդ</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#mobileCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                            <span class="visually-hidden">Հաջորդ</span>
                        </button>
                    </div>
                </div>







                <div class="accordion mt-5 mb-5" id="accordionExample">
                    <!-- Growvixo Overview -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button  class="z-show accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <strong>Growvixo – Մուլտի-սերվիս թվային մարքեթինգի և web դիզայնի գործակալություն</strong>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body bg-dark text-light">
                                <p>
                                    <strong>Growvixo</strong>-ն պրոֆեսիոնալ թվային մարքեթինգի և web դիզայնի գործակալություն
                                    է,
                                    որը օգնում է բիզնեսներին ավելացնել տեսանելիությունը, գրավել նպատակային լսարանը
                                    և հասնել երկարաժամկետ աճի:
                                    Մենք համատեղում ենք փորձը, նորարարությունը և ստեղծագործական մոտեցումը՝ ապահովելու
                                    բարձրորակ թվային լուծումներ:
                                </p>
                                <ul class="ms-3">
                                    <li><strong>Թվային մարքեթինգի ռազմավարություններ:</strong> անհատականացված,
                                        ROI-հիմնավորված
                                        ռազմավարություններ ձեր բիզնեսի համար:
                                    </li>
                                    <li><strong>SEO և բովանդակության մարքեթինգ:</strong> օպտիմալացնում ենք կայքի
                                        բովանդակությունը
                                        ՝ բարձրացնելու դիրքերը որոնիչներում և գրավելու որակյալ այցելուների:
                                    </li>
                                    <li><strong>Սոցիալական ցանցերի և գովազդային արշավներ:</strong> արդյունավետ լուծումներ
                                        բրենդի
                                        ճանաչելիության և հաճախորդների ներգրավվածության բարձրացման համար:
                                    </li>
                                    <li><strong>Պրոֆեսիոնալ կայքի մշակում:</strong> ժամանակակից, արագ և օգտվողամետ
                                        web լուծումներ՝ հարմարեցված ձեր բիզնեսի կարիքներին:
                                    </li>
                                    <li><strong>Տվյալների վերլուծություն և օպտիմալացում:</strong> արշավների մշտական հետևում,
                                        արդյունքների վերլուծություն և բարելավումների իրականացում՝ առավելագույն վերադարձի
                                        ապահովման համար:
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <!-- Friendly & Inspiring Text -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="z-show accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                🔔 Ընկերական և ոգեշնչող Growvixo
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body bg-dark text-light">
                                <p>
                                    Բարի գալուստ <strong>Growvixo</strong>-ին! Սա այն վայրն է, որտեղ ձեր բիզնեսը կարող է
                                    հասնել
                                    նոր բարձրունքների:
                                    Մենք համատեղում ենք ստեղծագործական մոտեցում, տվյալների վերլուծություն և ժամանակակից
                                    թվային
                                    մարքեթինգի ռազմավարություններ՝ ապահովելու
                                    ավելի մեծ հաճախորդների ներգրավվածություն և վաճառքի արդյունքներ:
                                    Եթե ցանկանում եք աճել, լինել տեսանելի և արդյունավետորեն հասնել նպատակային լսարանին՝
                                    <strong>Growvixo</strong> ձեր վստահելի գործընկերն է:
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Short & Brand-focused -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="z-show accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                📣 Կարճ և բրենդակենտրոն Growvixo
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body bg-dark text-light">
                                <p>
                                    <strong>Growvixo</strong> – ձեր բիզնեսի թվային աճի շարժիչը:
                                    Մենք ստեղծում ենք խելացի և արդյունավետ թվային մարքեթինգի ռազմավարություններ, որոնք
                                    օգնում են բրենդներին դառնալ ավելի տեսանելի, արդյունավետ հաղորդակցվել և բարձրացնել
                                    վաճառքները:
                                </p>
                                <p>
                                    <strong>Growvixo</strong>-ի հետ դուք ստանում եք վստահելի գործընկեր, որը ապահովում է աճ,
                                    նորարարություն
                                    և իրական արդյունքներ թվային միջավայրում:
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

        </div>


        @vite(['resources/views/customer/layouts/js/me.ts', 'resources/css/app.css'])


    </section>
@endsection
