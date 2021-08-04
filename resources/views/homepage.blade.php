@extends('shared')
@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active darkened">
                <img class="d-block w-100" src="{{ asset('storage/doctor1.jpg') }}" alt="First slide">
                <div class="carousel-caption1">
                    <h1 class="font-weight-bold display-4">E-konsultacje</h1>
                    <h2>Zapraszamy na konsultacje online!</h2>
                </div>
            </div>
            <div class="carousel-item darkened">
                <img class="d-block w-100" src="{{ asset('storage/women1.jpg') }}" alt="Second slide">
                <div class="carousel-caption2">
                    <h1 class="font-weight-bold">Pozbądź się kłopotu raz na zawsze,</h1>
                    <h2 class="text-right">Poznaj naszą ofertę!</h2>
                </div>
            </div>
            <div class="carousel-item darkened">
                <img class="d-block w-100" src="{{ asset('storage/couple2.jpg') }}" alt="Third slide">
                <div class="carousel-caption3">
                    <h2 class="font-weight-bold">Oporny tłuszczyk pomimo diety i ćwiczeń?</h2>
                    <h2>Zdecyduj się na zabieg liposukcji !</h2>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <section class="home-section row mt-5">
        <article class="home-description col-9">
            <h2>
                Klinika Chirurgii Plastycznej <span class="firmName">TwojaUroda</span>
            </h2>
            <p>
                Zapraszamy Państwa do naszych placówek! Pierwszej znajdującej się w Rzeszowie oraz do nowo otwartej,
                znajdującej się w Stalowej Woli. Są to najbardziej zaawansowane technologicznie kliniki w Polsce.
                Staramy się podążać za nowościami – mamy sprzęt najnowszej generacji, zachowujemy najwyższe standardy
                bezpieczeństwa i gwarantujemy doświadczenie genialnych lekarzy. Do Państwa dyspozycji w każdej z klinik są
                dwie nowoczesne sale operacyjne, sala wybudzeń i komfortowo urządzone klimatyzowane sale pooperacyjne.
            </p>
            <p>
                Oferujemy Państwu zabiegi z zakresu chirurgii plastycznej, medycyny estetycznej, flebologii, ginekologii
                estetycznej oraz przeszczepu włosów. Zapewniamy pełną dyskrecję i najwyższy profesjonalizm.

            </p>
            <p>
                Mamy nadzieję że uda nam się sprostać Państwa oczekiwaniom.
            </p>
        </article>
        <article class="consultation col-3">
            <header class="consultation-header py-3">
                <h6>Umów się na e-konsultacje</h6>
            </header>
            <div class="consultation-content py-4">
                <p class="mt-3"><i class="fas fa-phone"></i> 888 333 999</p>
                <p class="mt-4"><i class="far fa-envelope"></i> twoja_uroda@xxx.xxx</p>
            </div>
        </article>
    </section>
        <h1 class="choose-us my-5 text-uppercase">powiedz tak swojej urodzie.</h1>
    <img src="{{ asset('storage/building.jpg') }}" class="w-100 mt-3" alt="">
    <h5 class="text-center mt-3">Nasza placówka w Rzeszowie</h5>
    <h1 class="text-center mt-5"><a class="about-employees" href="{{ route('employees') }}">Poznaj naszych
            pracowników</a></h1>
@endsection

