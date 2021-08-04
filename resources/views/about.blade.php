@extends('shared')
@section('content')
    <div class="siteImage siteImageAbout mb-4">
        <div class="siteImageBg">
            <h1 class="display-4 about-h1">O nas</h1>
        </div>
    </div>
    <section class="home-section row mt-5">
        <article class="home-description col-9">
            <h2>
                Chirurgia Plastyczna
                na miarę XXI wieku
            </h2>
            <p>
                Zapraszamy Państwa do naszej kliniki w Rzeszowie oraz do nowo otwartej placówki w Stalowej Woli.
                Są to najbardziej zaawansowane technologicznie kliniki w Polsce. Staramy się podążać za nowościami –
                mamy sprzęt najnowszej generacji, zachowujemy najwyższe standardy bezpieczeństwa. Do Państwa dyspozycji
                w każdej z klinik są dwie nowoczesne sale operacyjne, sala wybudzeń i komfortowo urządzone klimatyzowane
                sale pooperacyjne. Oferujemy zabiegi z zakresu chirurgii plastycznej, medycyny estetycznej, flebologii,
                ginekologii estetycznej oraz przeszczepy włosów. W klinikach panuje miła atmosfera. Zapewniamy pełną
                dyskrecję i najwyższy profesjonalizm.
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
    <img src="{{ asset('storage/building2.jpg') }}" class="w-100 mt-3" alt="">
    <h5 class="text-center mt-3">Nasza placówka w Stalowej Woli</h5>
    <h1 class="text-center mt-5"><a class="about-employees" href="{{ route('employees') }}">Poznaj naszych
            pracowników</a></h1>
@endsection
