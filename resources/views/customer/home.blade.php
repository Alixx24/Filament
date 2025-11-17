@extends('customer.layouts.master')
@section('title', 'AlixDev')

@section('content')
    <style>

    </style>

    <style>

    </style>
    <style>

    </style>

    <section>
        <div class="container" id="info">


            <div id="uniqueCarouselExample" class="carousel slide unique-carousel-container" data-bs-ride="carousel">
                <div class="carousel-inner unique-carousel-inner">
                    <div class="carousel-item">
                        <img src="{{ asset('customer/banner/b14.webp') }}" class="d-block w-100"
                            alt="Growvixo digitālā mārketinga aģentūras pakalpojumi un efektīvas stratēģijas uzņēmumiem">
                    </div>
                    <div class="carousel-item active">
                        <img src="{{ asset('customer/banner/b23.webp') }}" class="d-block w-100"
                            alt="Profesionāla mājaslapu izstrāde un SEO optimizācija ar Growvixo">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('customer/banner/b13.webp') }}" class="d-block w-100"
                            alt="Growvixo sociālo tīklu un tiešsaistes reklāmas pārvaldības pakalpojumi">
                    </div>



                    {{-- <!--   <div class="carousel-item">-->
                    <!--    <img src="{{ asset('customer/banner/b8.webp') }}" class="d-block w-100" alt="...">-->
                    <!--</div>--> --}}
                </div>
                <button class="carousel-control-prev unique-carousel-control-prev" type="button"
                    data-bs-target="#uniqueCarouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">iepriekšējais</span>
                </button>
                <button class="carousel-control-next unique-carousel-control-next" type="button"
                    data-bs-target="#uniqueCarouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">nākamais</span>
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
                                    type="button">Iesniegt</button>
                            </div>
                        </div>


                    </div>
                </div>
            </div>


            {{-- services --}}

            <section id="services">
                <h2>Mūsu pakalpojumi</h2>
                <div class="service-cards">
                    <div class="card">
                        <h3>Digitālais mārketings</h3>
                        <p>Zīmola atpazīstamības palielināšana un klientu piesaiste.</p>
                    </div>
                    <div class="card">
                        <h3>Sociālie tīkli</h3>
                        <p>Facebook, Instagram un citu platformu pārvaldība.</p>
                    </div>
                    <div class="card">
                        <h3>SEO un analītika</h3>
                        <p>Labāka pozicionēšana meklētājsistēmās un datu analīze.</p>
                    </div>
                </div>
            </section>


            {{-- Portfolio --}}

            <section id="portfolio">
                <h2>Portfelis</h2>
                <div class="projects">
                    <div class="project-card">
                        <img src="project1.jpg" alt="Projekts 1">
                        <h3>Projekts 1</h3>
                    </div>
                    <div class="project-card">
                        <img src="project2.jpg" alt="Projekts 2">
                        <h3>Projekts 2</h3>
                    </div>
                </div>
            </section>



            {{-- blog  --}}

            <section id="blog">
                <h2>Emuāri</h2>
                <div class="blog-posts">
                    @foreach ($posts as $post)
                        <div class="post-card">
                            <h3>{{ $post['title'] }}</h3>
                            <p>{{ \Illuminate\Support\Str::limit($post['summary'], 42, '...') }}</p>
                            <a class="btn btn-success" href="{{ route('customer.post.show', $post['slug']) }}">Skatīt</a>
                        </div>
                    @endforeach
                    <div class="post-card">
                        <h3>SEO labākās prakses</h3>
                        <p>Kā iegūt vairāk organiskā satiksme.</p>
                    </div>
                </div>
            </section>


            {{-- Contact --}}

            <section id="contact">
                <h2>Kontakti</h2>
                <p>Dalieties ar savu projektu vai jautājumu, un mēs ar jums sazināsimies.</p>
                <form>
                    <input type="text" placeholder="Vārds" required>
                    <input type="email" placeholder="E-pasts" required>
                    <textarea placeholder="Ziņa"></textarea>
                    <button type="submit">Nosūtīt</button>
                </form>
            </section>







            {{-- text dont worry --}}
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <div class="p-5 rounded shadow-lg" style="background: linear-gradient(135deg, #f8f9fa, #e9ecef);">
                            <div class="text-center text-dark" style="line-height: 1.8; font-size: 1.05rem;">
                                <p><strong>Growvixo</strong> ir vadošā digitālā mārketinga un web dizaina aģentūra, kas
                                    palīdz uzņēmumiem palielināt redzamību tiešsaistē.</p>
                                <p>Mēs specializējamies <strong>SEO optimizācijā</strong>, sociālo tīklu pārvaldībā un
                                    efektīvās digitālā mārketinga stratēģijās.</p>
                                <p>Ar <strong>Growvixo</strong> jūs iegūsiet modernu un lietotājam draudzīgu mājaslapu, kas
                                    piesaista un pārvērš apmeklētājus par klientiem.</p>
                                <p>Mūsu komanda analizē datus un optimizē jūsu kampaņas, lai nodrošinātu maksimālu atdevi un
                                    ilgtermiņa izaugsmi.</p>
                                <p>Growvixo palīdz zīmoliem būt redzamiem, uzlabot tiešsaistes reputāciju un sasniegt
                                    mērķauditoriju efektīvāk nekā konkurenti.</p>
                                <p>Mēs radām personalizētas digitālā mārketinga stratēģijas, kas fokusējas uz rezultātiem un
                                    jūsu biznesa izaugsmi.</p>
                                <p>Neatkarīgi no tā, vai nepieciešama <strong>profesionāla mājaslapu izstrāde</strong>, SEO
                                    optimizācija vai reklāmas kampaņas, Growvixo ir jūsu uzticamais partneris.</p>
                                <p>Izvēloties Growvixo, jūs iegūstat stratēģisku partneri, kas palīdz sasniegt vairāk
                                    klientu un palielināt pārdošanas apjomus.</p>
                                <p><strong>Growvixo</strong> – jūsu ceļš uz digitālo izaugsmi, inovāciju un reāliem
                                    rezultātiem tiešsaistē.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <style>

            </style>

            </head>

            <body>

                <div class="container py-4">
                    <div id="desktopCarousel" class="carousel slide d-none d-md-block m-5" data-bs-ride="carousel">
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
                                            <img src="{{ asset('customer/banner/b21.webp') }}" class="card-img-top"
                                                alt="Growvixo profesionāla mājaslapu izstrāde – moderni un lietotājam draudzīgi risinājumi">
                                            <div class="card-body-slider ">
                                                <h5 class="card-title">Web Dizains</h5>
                                                <p class="card-text small">Veidojam modernas, lietotājam draudzīgas
                                                    mājaslapas, kas piesaista apmeklētājus un pārvērš tos par klientiem.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Sociālie tīkli -->
                                    <div class="col-md-4">
                                        <div class="card card-slider-home shadow-sm">
                                            <img src="{{ asset('customer/banner/b16.webp') }}" class="card-img-top"
                                                alt="Growvixo sociālo tīklu pārvaldība – zīmola atpazīstamības palielināšana">
                                            <div class="card-body-slider ">
                                                <h5 class="card-title">Sociālo Tīklu Pārvaldība</h5>
                                                <p class="card-text small">Palielinām jūsu zīmola atpazīstamību un klientu
                                                    iesaisti ar efektīvām sociālo tīklu stratēģijām.</p>
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
                                            <img src="{{ asset('customer/banner/b22.webp') }}" class="card-img-top"
                                                alt="Growvixo digitālā reklāma – ROI optimizētas kampaņas">
                                            <div class="card-body-slider ">
                                                <h5 class="card-title">Digitālā Reklāma</h5>
                                                <p class="card-text small">Izstrādājam mērķtiecīgas reklāmas kampaņas, kas
                                                    nodrošina maksimālu atdevi un palielina pārdošanas apjomus.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Satura mārketings -->
                                    <div class="col-md-4">
                                        <div class="card card-slider-home shadow-sm">
                                            <img src="{{ asset('customer/banner/b11.webp') }}" class="card-img-top"
                                                alt="Growvixo satura mārketings – kvalitatīvs un mērķtiecīgs saturs">
                                            <div class="card-body-slider ">
                                                <h5 class="card-title">Satura Mārketings</h5>
                                                <p class="card-text small">Radām kvalitatīvu saturu, kas piesaista
                                                    mērķauditoriju, veicina zīmola autoritāti un veido ilgtermiņa attiecības
                                                    ar klientiem.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Datu analīze -->
                                    <div class="col-md-4">
                                        <div class="card card-slider-home shadow-sm">
                                            <img src="{{ asset('customer/banner/b24.webp') }}" class="card-img-top"
                                                alt="Growvixo datu analīze – uzlabošanas iespējas un optimizācija">
                                            <div class="card-body">
                                                <h5 class="card-title">Datu Analīze & Optimizācija</h5>
                                                <p class="card-text small">Analizējam kampaniju rezultātus un optimizējam
                                                    stratēģijas, lai nodrošinātu ilgtermiņa izaugsmi un maksimālu ROI.</p>
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


                    <div id="mobileCarousel" class="carousel slide d-block d-md-none mt-4" data-bs-ride="carousel">
                        <div class="carousel-inner">



                        </div>


                        <button class="carousel-control-prev" type="button" data-bs-target="#mobileCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                            <span class="visually-hidden">قبلی</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#mobileCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                            <span class="visually-hidden">بعدی</span>
                        </button>
                    </div>
                </div>







                <div class="accordion mt-5 mb-5" id="accordionExample">
                    <!-- Growvixo Overview -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <strong>Growvixo – Pilna servisa digitālā mārketinga un web dizaina aģentūra</strong>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body bg-dark text-light">
                                <p>
                                    <strong>Growvixo</strong> ir profesionāla digitālā mārketinga un web dizaina aģentūra,
                                    kas palīdz uzņēmumiem palielināt redzamību, piesaistīt mērķauditoriju un sasniegt
                                    ilgtermiņa biznesa izaugsmi.
                                    Mēs apvienojam pieredzi, inovācijas un radošumu, lai nodrošinātu augstas kvalitātes
                                    digitālos risinājumus.
                                </p>
                                <ul class="ms-3">
                                    <li><strong>Digitālā mārketinga stratēģijas:</strong> individuāli pielāgotas,
                                        ROI-orientētas stratēģijas jūsu biznesam.</li>
                                    <li><strong>SEO un satura mārketings:</strong> optimizējam mājaslapas saturu, lai iegūtu
                                        augstākas pozīcijas meklētājos un piesaistītu kvalificētus apmeklētājus.</li>
                                    <li><strong>Sociālo tīklu un reklāmas kampaņas:</strong> efektīvi risinājumi zīmola
                                        atpazīstamības un klientu iesaistes palielināšanai.</li>
                                    <li><strong>Profesionāla mājaslapu izstrāde:</strong> moderni, ātri un lietotājam
                                        draudzīgi web risinājumi, pielāgoti jūsu biznesa vajadzībām.</li>
                                    <li><strong>Datu analīze un optimizācija:</strong> nepārtraukta kampaņu uzraudzība,
                                        rezultātu analīze un uzlabojumu ieviešana maksimālai atdevei.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Friendly & Inspiring Text -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                🔔 Draudzīgs un iedvesmojošs Growvixo
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body bg-dark text-light">
                                <p>
                                    Laipni lūdzam <strong>Growvixo</strong>! Šī ir vieta, kur jūsu bizness var sasniegt
                                    jaunas virsotnes.
                                    Mēs apvienojam radošumu, analītiku un modernas digitālā mārketinga stratēģijas, lai
                                    nodrošinātu lielāku klientu iesaisti un pārdošanas rezultātus.
                                    Ja vēlaties augt, būt redzami un efektīvi sasniegt mērķauditoriju – Growvixo ir jūsu
                                    uzticamais partneris.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Short & Brand-focused -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                📣 Īss un zīmolcentrēts Growvixo
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body bg-dark text-light">
                                <p>
                                    <strong>Growvixo</strong> – jūsu biznesa digitālās izaugsmes dzinējs.
                                    Mēs veidojam gudras un efektīvas digitālā mārketinga stratēģijas, kas palīdz zīmoliem
                                    būt pamanāmākiem, komunicēt efektīvāk un palielināt pārdošanas apjomus.
                                </p>
                                <p>
                                    Ar <strong>Growvixo</strong> jūs iegūstat partneri, kas nodrošina izaugsmi, inovāciju un
                                    reālus rezultātus digitālajā vidē.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

        </div>


        @vite(['resources/views/customer/layouts/js/me.ts', 'resources/css/app.css'])


    </section>
@endsection
