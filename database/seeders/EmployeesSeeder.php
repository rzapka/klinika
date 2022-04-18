<?php

namespace Database\Seeders;

use App\Models\Employee;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Factory::create();

        foreach($this->data() as [$firstname, $lastname, $specialization, $description, $email, $image]) {
            $employee = new Employee([
                'firstname' => $firstname,
                'lastname' => $lastname,
                'specialization' => $specialization,
                'description' => $description,
                'phone_num' => $faker->numberBetween(100000000, 999999999),
                'email' => $email,
                'image' => $image,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
            $employee->save();
        }
    }

    private function data(): array
    {
        return [
            ['Ludwik', 'Sokołowski', 'Specjalista chirurgii plastycznej, właściciel placówki'
                , 'Jeden z najbardziej znanych i cenionych chirurgów plastyków w Polsce. Wydział lekarski Akademii Medycznej ukończył w 1987 roku. Po odbyciu stażu podyplomowego pracował przez cztery lata w Klinice Chirurgii Instytutu Hematologii w Warszawie pod kierownictwem prof. Marka Ziemskiego zdobywając I stopień specjalizacji z chirurgii ogólnej. Przez siedem lat operował w Szpitalu Chirurgii Plastycznej w Polanicy Zdroju – najstarszym w Polsce i jednym z najlepszych ośrodków chirurgii plastycznej na świecie.

Dzięki pracy pod kierownictwem prof. Kazimierza Kobusa, a także licznym stażom i szkoleniom w kraju i za granicą zdobył umiejętności i doświadczenie niezbędne do samodzielnego i odpowiedzialnego leczenia chorych z wadami wrodzonymi, pourazowymi zniekształceniami, czy ubytkami tkanek. Opanował perfekcyjnie wszystkie techniki operowania pod mikroskopem oraz zasady chirurgii laserowej i endoskopowej, zabiegi z zakresu chirurgii czaszkowo-szczękowej i twarzowej. Przez pięć lat pracował w Centrum Zdrowia Dziecka, z którym współpracuje do dziś przy przypadkach wymagających wielospecjalizacyjnego postępowania.', 'lsokolowski@twuroda.pl', 'doctors/m6.jpg'],

            ['Olimpia', 'Błaszczyk', 'Specjalista chirurgii plastycznej', 'Dr Olimpia Błaszczyk jest specjalistą chirurgii plastycznej. Pracuje w Oddziale Klinicznym Chirurgii Plastycznej CMKP w Warszawie. Jest również nauczycielem akademickim. Wcześniej zajmowała stanowisko rezydenta i doktoranta Kliniki Chirurgii Plastycznej, Rekonstrukcyjnej i Estetycznej Uniwersytetu Medycznego w Łodzi, gdzie w 2015 r. uzyskała tytuł doktora nauk medycznych.
Specjalizuje się w zabiegach z zakresu chirurgii plastycznej, rekonstrukcyjnej, estetycznej oraz chirurgii ręki.
Jest członkiem Polskiego Towarzystwa Chirurgii Plastycznej, Rekonstrukcyjnej i Estetycznej (PTChPRiE) oraz Międzynarodowego Towarzystwa Chirurgii Plastycznej, Rekonstrukcyjnej i Estetycznej (IPRAS).', 'oblaszczyk@twuroda.pl', 'doctors/w4.jpg'],



            ['Kordian', 'Brzeziński', 'Specjalista chirurgii plastycznej',
                'Ukończył Wydział Lekarski Akademii Medycznej we Wrocławiu. W latach 2006 – 2011 odbywał specjalizację z chirurgii ogólnej w Oddziale Chirurgii Ogólnej Szpitala MSWiA we Wrocławiu a następnie Klinice Chirurgii Małoinwazyjnej Akademickiego Szpitala Klinicznego we Wrocławiu. Specjalizację z chirurgii plastycznej odbył we Wschodnim Centrum Leczenia Oparzeń i Chirurgii Rekonstrukcyjnej. W latach 2013 - 2017 związany z Kliniką Chirurgii Plastycznej Szpitala im. Prof. Orłowskiego w Warszawie, gdzie zajmował stanowisko starszego asystenta. Od 2014 - 2017r. zajmował stanowisko asystenta naukowo – dydaktycznego Kliniki Chirurgii Plastycznej Centrum Medycznego Kształcenia Podyplomowego w Warszawie. Autor publikacji i doniesień zjazdowych z zakresu chirurgii plastycznej oraz leczenia oparzeń.', 'kbrzezinski@twuroda.pl' , 'doctors/m1.jpg'],



            ['Eugeniusz', 'Krajewski', 'Specjalista chirurgii plastycznej'
            , 'Specjalista Chirurgii Plastycznej i Chirurgii Ogólnej z ponad 20 letnim doświadczeniem. Jest absolwentem Śląskiej Akademii Medycznej w Katowicach. W 2005 roku zdobył II stopień specjalizacji z Chirurgii Ogólnej w Klinice Chirurgii Ogólnej i Naczyniowej CSK MSWiA w Warszawie, prowadzonej przez prof. Piotra Andziaka. W latach 2005-2014 pracował w Oddziale Chirurgii Plastycznej CSK MSWiA pod kierownictwem dr. n. med. Tadeusza Witwickiego, gdzie wiosną 2014 ukończył specjalizację z Chirurgii Plastycznej. W praktyce zdobył umiejętności leczenia operacyjnego wielu schorzeń powodujących m. in. dysfunkcję narządów twarzy, piersi, ze szczególnym uwzględnieniem leczenia rekonstrukcyjnego piersi oraz niektórych chorób ręki.', 'ekrajewski@twuroda.pl', 'doctors/m3.jpg'],

            ['Matylda', 'Kulesza', 'Lekarz medycyny estetycznej, Specjalista w dziedzinie dermatologii', '
            Dermatologią estetyczną zajmuje od 2006 roku wykonując zabiegi z użyciem między innymi kwasu hialuronowego, polimlekowego, toksyny botulinowej, zabiegów laserowych i wysoce skoncentrowanych ultradźwięków.
Szczególny obszar jej zainteresowań to profilaktyka przeciwstarzeniowa i zaawansowane techniki odmładzania skóry oraz leczenia wypadania włosów z użyciem tkanek własnych pacjenta, czyli  osocza bogatopłytkowego i komórek macierzystych. W tym ostatnim zakresie współpracuje z najlepszymi ośrodkami w Stanach Zjednoczonych.
Absolwentka Wydziału Lekarskiego Akademii Medycznej we Wrocławiu. Specjalizację II stopnia w dziedzinie dermatologii i stopień doktora nauk medycznych uzyskała w Klinice Dermatologii, Wenerologii i Alergologii AM we Wrocławiu.', 'mkulesza@twuroda.pl', 'doctors/w5.jpg'],


            ['Marcin', 'Urbański', 'Specjalista chirurgii ogólnej'
            , 'Chirurg ogólny, chirurgia onkologiczna w trakcie specjalizacji. Ukończył Wojskową Akademię Medyczną w Łodzi.
W latach 2002-2011 pracował w Klinice Chirurgii Ogólnej, Onkologicznej i Naczyniowej Wojskowego Instytutu Medycznego w Warszawie pod kierownictwem prof. Marka Maruszyńskiego. Obecnie jest starszym asystentem w Klinice Chirurgii Ogólnej, Onkologicznej, Metabolicznej i Torakochirurgii WIM pod kierownictwem prof. Krzysztofa Paśnika.
Wiedzę i doświadczenie w zakresie operacji żylaków metodą laserową zdobywał w Niemczech (Jena, Lipsk).', 'murbanski@twuroda.pl', 'doctors/m2.jpg'],
            ['Denis', 'Marciniak', 'Specjalista chirurgii naczyniowej'
            , 'Absolwent Akademii Medycznej w Bydgoszczy. Staż w szpitalu Barbara Devis Center for Childhood Diabetes Denver USA. W 2005 roku rozpoczął pracę w Klinicznym Oddziale Chirurgii Ogólnej i Kolorektalnej w Szpitalu Bielańskim, gdzie specjalizuje się w badaniach czynnościowych dolnego odcinka przewodu pokarmowego. Jesienią 2011 r. uzyskał tytuł specjalisty chirurgii ogólnej. Od jesieni 2012 roku jest asystentem Kliniki Chirurgii Naczyniowej i Angiologii Centrum Medycznym Kształcenia Podyplomowego w Warszawie. Absolwent Roztoczańskiej Szkoły Ultrasonografii w zakresie badania USG tętnic i żył. Członek Polskiego Towarzystwa Onkologicznego. Uczestnik wielu konferencji naukowo-szkoleniowych z zakresu chirurgii ogólnej, onkologicznej i naczyniowej. Członek Towarzystwa Flebologii. Wiosną 2015 uzyskał tytuł doktora nauk medycznych.', 'dmarciniak@twuroda.pl', 'doctors/m4.jpg'],

            ['Ariel', 'Maciejewski', 'Specjalista ginekologii i poloznictwa'
            , 'Specjalista ginekologii i położnictwa. Absolwent I Wydziału Lekarskiego Warszawskiej Akademii Medycznej. W latach 1997 – 2011 zajmował stanowisko starszego asystenta w Katedrze i Klinice Położnictwa, Chorób Kobiecych i Ginekologii Onkologicznej II Wydziału Lekarskiego Uniwersytetu Medycznego w Warszawie. W tym czasie uzyskał specjalizację z dziedziny położnictwa i ginekologii, prowadził wykłady dla studentów wydziału lekarskiego, grup polsko- i anglojęzycznych. Autor wielu publikacji. Swoją wiedzę i umiejętności z zakresu ginekologii operacyjnej i estetycznej rozwijał poprzez udział w wielu krajowych i zagranicznych kongresach i szkoleniach. Od roku 2007 odbywa regularne szkolenia i praktykę w Klinice w Niemczech, z zakresu chirurgii onkoplastycznej i operacji pochwowych w ginekologii.', 'amaciejewski@twuroda.pl', 'doctors/m5.jpg'],

            ['Emilia', 'Jaworska', 'Specjalista chirurgii plastycznej, Specjalista chirurgii dziecięcej', '
            Wydział Lekarski Akademii Medycznej w Krakowie ukończyła w 1986 roku. Drugi stopień specjalizacji z chirurgii dziecięcej uzyskała po stażu w Klinice Chirurgii Dziecięcej Polsko – Amerykańskiego Instytutu Pediatrii w Krakowie, gdzie uczestniczyła w szkoleniach w ramach Fundacji Project Hope.
Doświadczenie zawodowe wykorzystała w tworzeniu 2 oddziałów chirurgii dziecięcej, w tym jednego na stanowisku zastępcy ordynatora. Chirurgiczne doświadczenie zawodowe obejmuje również pracę w ramach Wojewódzkiego Oddziału Chirurgii Ogólnej.
Tytuł specjalisty w dziedzinie chirurgii plastycznej uzyskała w 2004 roku po stażu w Klinice Chirurgii Plastycznej CMKP w Warszawie pod kierownictwem dr. n.med. Jerzego Potockiego.
Wiedzę i umiejętności w zakresie chirurgii plastycznej uzupełniała m. in.w Anglii, Hiszpanii,Turcji, we Włoszech i Szwecji.', 'ejaworska@twuroda.pl' , 'doctors/w2.jpg'],

            ['Jerzy', 'Ziółkowski', 'Specjalista chirurgii plastycznej i ginekologii', 'Kariera lek. Jerzego Ziółkowskiego sięga 2006r., kiedy rozpoczął pracę na oddziale chirurgii ogólnej Szpitala St. Berhard w Kamp-Litfort w Niemczech. Od tamtego czasu szkolił się w takich miejscach jak Szpital Wielospecjalistyczny w Gliwicach, czy Klinika Ginekologii i Położnictwa w Rudzie Śląskiej. Od 2010r. przyjmował pacjentów w Centrum Leczenia Niepłodności Gyncentrum w Katowicach. W trakcie praktyki, w 2014 roku, jako jeden z dwóch lekarzy w Polsce, otrzymał certyfikat umiejętności przeprowadzania nowatorskiej techniki zapłodnienia pozaustrojowego przy użyciu kapsuł Anecova. Jednocześnie uzyskuje certyfikat FMF (The Fetal Medicine Foundation, na wykonywanie badań USG w ciąży pomiędzy 11-14 tygodniem) oraz certyfikat Sekcji Ultrasonograficznej Polskiego Towarzystwa Ginekologicznego na wykonywanie badań z zakresu położnictwa i ginekologii i Certyfikat do samodzielnego wykonywania badań prenatalnych Polskiego Towarzystwa Ultrasonograficznego.', 'jziolkowski@twuroda.pl' , 'doctors/m7.jpg'],

            ['Marcel', 'Kalinowski', 'Specjalista w zakresie fizjoterapii', 'Ukończył Uniwersytet Medyczny w Łodzi na Wydziale Fizjoterapii. Również na tej uczelni uzyskał stopień doktora nauk medycznych w zakresie fizjoterapii. Od 1999 roku zajmuje się medycyną estetyczną i fizjoterapią dla pacjentów po operacjach plastycznych i estetycznych. Swoje umiejętności doskonalił na licznych kursach w kraju i za granicą. Uczestniczył czynnie oraz biernie w wielu europejskich kongresach.
Do głównych zainteresowań zawodowych dr. Szwedo należy optymalizacja procesu rehabilitacji po operacjach estetycznych oraz poprawa komfortu gojenia. Ponadto zajmuje się wykorzystaniem prądów RF w medycynie estetycznej. W tym zakresie udziela konsultacji i przeprowadza szkolenia dla lekarzy i kosmetologów.
Jest autorem wielu publikacji naukowych i popularnonaukowych.', 'mkalinowski@twuroda.pl', 'doctors/m8.jpg'],



            ['Martyna', 'Zielińska', 'Specjalista chirurgii plastycznej', 'Chirurg plastyk. Ukończyła studia na kierunku lekarskim I wydziału Warszawskiego Uniwersytetu Medycznego w 2009 roku. W trakcie studiów odbywała coroczne praktyki w Helios Klinikum w Niemczech. Wtedy również związała się z Kliniką Chirurgii Plastycznej CMKP w Warszawie, jako członek studenckiego koła naukowego. W tym ośrodku w latach 2010-2016 realizowała szkolenie specjalizacyjne w chirurgii plastycznej pod kierownictwem dr Macieja Kulickiego i uzyskała tytuł specjalisty chirurgii plastycznej. Równolegle zdobywała wiedzę i doświadczenie w zakresie chirurgii estetycznej pod okiem dr Marka Szczyta w jego Centrum Chirurgii Plastycznej. Swoją wiedzę regularnie poszerza uczestnicząc w szkoleniach i konferencjach naukowych w kraju i za granicą. Jest autorem publikacji naukowych i zjazdowych w zakresie chirurgii plastycznej. Jest członkiem Polskiego Towarzystwa Chirurgii Plastycznej, Rekonstrukcyjnej i Estetycznej.', 'mzielinska@twuroda.pl', 'doctors/w3.jpg'],


            ['Halina', 'Szulc', 'Specjalista chirurgii ogólnej i plastycznej', 'Specjalista chirurgii ogólnej i plastycznej. Absolwentka Akademii Medycznej w Bydgoszczy. W 2012 roku uzyskała tytuł specjalisty chirurgii ogólnej. O 2013 roku jest asystentką Klinicznego Oddziału Chirurgii Plastycznej w Szpitalu im. W. Orłowskiego  w Warszawie. W latach 2015-2019 odbywała specjalizację z chirurgii plastycznej. W 2019 uzyskała tytuł specjalisty chirurgii plastycznej. Ukończyła Studia Doktoranckie przy CMKP w Warszawie -  zastosowania osocza bogatopłytkowego w chorobach ręki. Członek Towarzystwa Chirurgii Plastycznej i Towarzystwa Flebologii. Jest członkiem Sekcji Medycyny Estetycznej Polskiego Towarzystwa Lekarskiego, które należy do Międzynarodowego Stowarzyszenia medycyny Estetycznej. Uczestnik wielu konferencji naukowo-szkoleniowych z zakresu chirurgii ogólnej, plastycznej i naczyniowej. Jako pierwsza w Polsce wykonała zabieg Hemoff- zamykania żylaków odbytu klejem tkankowym. Stale poszerza swoje kwalifikacje w zakresie chirurgii plastycznej uczestnicząc w kursach i zjazdach krajowych i zagranicznych.', 'hszulc@twuroda.pl', 'doctors/w1.jpg'],

        ];
    }
}
