<?php

namespace Database\Seeders;

use App\Models\Overture;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class OverturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data() as [$name, $category_id, $price_from, $price_to]) {
            $overture = new Overture([
                'name' => $name,
                'category_id' => $category_id,
                'price_from' => $price_from,
                'price_to' => $price_to,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            $overture->save();
        }
    }

    private function data(): array
    {
        return [
            ['Face Lift całkowity', 1,  19000, 25000],
            ['Face Lift wtórny', 1,  25000, 27000],
            ['Face Lift szyjny, skroniowy lub mini', 1,  13000, 17000],
            ['Lift czoła', 1,  13000, 23000],
            ['Podniesienie brwi', 1,  13000, 15000],
            ['Plastyka powiek górnych', 1,  6000, 8000],
            ['Wtórna plastyka powiek górnych', 1,  8000, 9000],
            ['Plastyka powiek dolnych', 1,  8000, 10000],
            ['Wtórna plastyka powiek dolnych', 1,  10000, 12000],
            ['Korekcja odstających uszu', 1,  6000, 7000],
            ['Plastyka zwiniętych uszu', 1,  6000, 8000],
            ['Zmniejszenie uszu', 1,  6000, 8000],
            ['Rekonstrukcja małżowiny usznej', 1,  15000, 22000],
            ['Oddzielenie małżowiny od czaszki', 1,  6000, 8000],
            ['Totalna korekcja nosa', 1,  17000, 21000],
            ['Wtórna korekcja nosa', 1,  21000, 25000],
            ['Korekcja części chrzęstnej nosa', 1,  15000, 17000],
            ['Korekcja części kostnej nosa', 1,  13000, 15000],
            ['Korekcja przegrody nosowej', 1,  7000, 8000],
            ['Implant twarzowy - bródka', 1,  9000, 11000],
            ['Implant twarzowy - policzki', 1,  11000, 13000],
            ['Liposukcja podbródka', 1,  6000, 7000],
            ['Resekcja bródki', 1,  9000, 12000],
            ['Usuwanie zmian skórnych (chirurg onkolog)', 1,  1000, 10000],
            ['Usunięcie poduszeczek tłuszczowych Bischata', 1,  8000, 10000],
            ['Powiększenie piersi implantami', 2,  19000, 22000],
            ['Powiększenie piersi tkanką tłuszczową', 2,  15000, 17000],
            ['Powiększenie piersi tkanką tłuszczową', 2,  15000, 17000],
            ['Wymiana implantów', 2,  21000, 25000],
            ['Podniesienie piersi', 2,  17000, 21000],
            ['Podniesienie piersi + implanty piersi', 2,  26000, 31000],
            ['Rekonstrukcja piersi ekspanderem', 2,  11000, 13000],
            ['Rekonstrukcja piersi płatem LD wraz z ekspanderem/implantem', 2,  22000, 24000],
            ['Rekonstrukcja piersi ekspanderoprotezą Beckera', 2,  13000, 15000],
            ['Wymiana ekspandera na protezę', 2,  11000, 13000],
            ['Symetryzacja piersi zdrowej', 2,  11000, 13000],
            ['Rekonstrukcja kompleksu brodawka - otoczka', 2,  7000, 9000],
            ['Onkoplastyczne usunięcie guza piersi', 2,  5500, 8000],
            ['Amputacja prosta piersi', 2,  13000, 15000],
            ['Podskórna amputacja piersi z jednoczasową rekonstrukcją z protezą silikonową', 2,  19000, 25000],
            ['Podskórna amputacja piersi z jednoczasową rekonstrukcją z ekspanderem', 2,  19000, 25000],
            ['Podskórna obustronna amputacja piersi z jednoczasową rekonstrukcją z ekspanderami /z protezami', 2,  25000, 35000],
            ['Podskórna obustronna amputacja piersi z jednoczasową rekonstrukcją z ekspanderem/z protezą silikonową z użyciem ADM/ TIGR', 2,  39000, 49000],
            ['Plastyka brzucha', 3, 19000, 23000],
            ['Wtórna plastyka brzucha', 3, 21000, 25000],
            ['Plastyka brzucha z odsysaniem', 3, 21000, 25000],
            ['Plastyka podbrzusza', 3, 12000, 15000],
            ['Plastyka ramion', 3, 14000, 17000],
            ['Ginekomastia', 3, 11000, 15000],
            ['Plastyka ud', 3, 16000, 19000],
            ['Liposukcja brzucha', 3, 11000, 13000],
            ['Liposukcja bioder', 3, 9000, 10000],
            ['Liposukcja ud', 3, 10000, 12000],
            ['Liposukcja pośladków', 3, 9000, 11000],
            ['Liposukcja kolan', 3, 6000, 7000],
            ['Liposukcja łydek', 3, 9000, 11000],
            ['Liposukcja ramion', 3, 7000, 10000],
            ['Liposukcja pach', 3, 4000, 5000],
            ['Implanty podudzi (łydek)', 3, 11000, 13000],
            ['Przeszczep tkanki tłuszczowej', 3, 8000, 17000],
            ['Przepuklina', 3, 6000, 8000],
            ['Lifting dłoni', 3, 8000, 10000],
            ['Usuwanie zmian skórnych (chirurg onkolog)', 3, 1000, 10000],
            ['Przeszczep tkanki tłuszczowej', 3, 8000, 18000],
            ['Argo Plasma - 1 okolica', 3, 5000, 5000],
            ['Argo Plasma - każda następna okolica', 3, 3000, 3000],
            ['Przeszczep włosów', 4, 10000, 35000],
            ['Kwas hialuronowy', 5, 1000, 2000],
            ['Radiesse', 5, 1600, 4000],
            ['Wolumetria', 5, 1000, 2000],
            ['Miękki lifting twarzy', 5, 3500, 6000],
            ['Miękki lifting szyi', 5, 1900, 2600],
            ['Miękki lifting szyi', 5, 1900, 2600],
            ['Mezoterapia', 5, 1000, 2000],
            ['Toksyna botulinowa', 5, 700, 2000],
            ['Regenera Activa', 5, 5000, 7000],
            ['Leczenie nadpotliwości - System miraDry', 5, 4000, 5000],
            ['Sculptra (1 fiolka)', 5, 1800, 2600],
            ['Lipoliza iniekcyjna', 5, 500, 1000],
            ['Osocze bogatopłytkowe', 5, 1500, 4000],
            ['Komórki macierzyste', 5, 7000, 9000],
            ['Masaż ciśnieniowy Limphastim', 5, 100, 200],
            ['Zabiegi przeciwcellulitowe', 5, 500, 2500],
            ['Labiominoroplastyka (plastyka warg sromowych mniejszych)', 6, 9000, 11000],
            ['Wtórna labioplastyka', 6, 14000, 20000],
            ['Labiomajoroplastyka (plastyka warg sromowych większych)', 6, 7000, 10000],
            ['Waginoplastyka', 6, 7000, 9000],
            ['Hymenoplastyka', 6, 2000, 2000],
            ['Hymenotomia', 6, 2000, 2000],
            ['Perineoplastyka (plastyka krocza)', 6, 5000, 5000],
            ['Liposukcja wzgórka łonowego', 6, 5000, 6000],
            ['Wypełnienie warg sromowych większych własną tkanką tłuszczową', 6, 5000, 6000],
            ['Wypełnienie warg sromowych większych kwasem hialuronowym', 6, 1500, 3000],
            ['Laser FemiLift', 6, 1500, 4000],
            ['GShot - Wypełnienie punktu G kwasem hialuronowym', 6, 2000, 2000],
            ['OShot - Pobudzenie punktu G i łechtaczki osoczem bogatopłytkowym', 6, 2000, 2000],
            ['Zabieg laserem Femilift', 6, 1500, 1500],
            ['P - Shot', 7, 2000, 2000],
            ['Powiększanie penisa kwasem hialuronowym', 7, 1800, 3000],
            ['Powiększanie penisa tłuszczem', 7, 5000, 7000],
            ['Wybielanie odbytu', 7, 1500, 1500],
            ['Wybielanie moszny', 7, 1500, 1500],
            ['Wybielanie penisa', 7, 1500, 1500],
            ['Laserowe usuwanie żylaków (jedna noga)', 8, 3000, 5000],
            ['Laserowe usuwanie żylaków (obie nogi)', 8, 6000, 9000],
            ['Skleroterapia piankowa (usuwanie pajączków na nogach)', 8, 300, 1500],
            ['Miniflebektomia', 8, 3000, 7000],
            ['Operacja żylaków kończyn dolnych (1 noga)', 8, 5000, 7000],
            ['Operacja żylaków kończyn dolnych (2 nogi)', 8, 8000, 10000],
            ['Operacja żylaków metodą nieinwazyjną (1 noga)', 8, 8000, 10000],
            ['Operacja żylaków metodą nieinwazyjną (2 nogi)', 8, 13000, 15000],
            ['Sesja terapeutyczna (z wykorzystaniem indywidualnie dobranych zabiegów fizykalnych)', 9, 150, 250],
            ['Zabieg fizykalny falą uderzeniową', 9, 150, 200],
            ['Kriolipoliza CoolTech', 9, 750, 1750],
            ['Masaż ciśnieniowy Limphastim', 9, 150, 250],
            ['Masaż leczniczy', 9, 250, 350],
            ['Masaż limfatyczny', 9, 250, 350],
            ['Masaż antycellulitowy', 9, 250, 350],
            ['USG powłok brzucha', 10, 100, 200],
            ['USG piersi', 10, 100, 250],
            ['USG tarczycy', 10, 100, 250],
            ['Biopsja pod kontrolą USG - cienkoigłowa', 10, 250, 400],
            ['Biopsja pod kontrolą USG - gruboigłowa', 10, 500, 700],
            ['Punkcja w kierunku ALCL', 10, 1000, 1500],
            ['Kobido', 11, 350, 450],
            ['Drenaż limfatyczny', 11, 150, 300],
            ['I PEEL The Signature Facelift', 11, 350, 450],
            ['I PEEL lightening lift forte', 11, 350, 450],
            ['The MAX LIFT twarz plus szyja', 11, 450, 500],
            ['Wąs', 12, 350, 350],
            ['Broda', 12, 350, 350],
            ['Pachy', 12, 450, 450],
            ['Ręce', 12, 450, 450],
            ['1/3 powierzchni pleców', 12, 600, 600],
            ['Linia życia" (dolna część brzucha)', 12, 350, 350],
            ['Bikini', 12, 400, 400],
            ['Bikini głębokie', 12, 600, 600],
            ['Uda', 12, 500, 500],
            ['Łydki', 12, 500, 500],
            ['Elektroliza', 12, 350, 600],
            ['Elektroliza', 12, 350, 600],
            ['Blizny', 13, 300, 2000],
            ['Broda', 13, 500, 500],
            ['Czoło', 13, 1000, 1000],
            ['Nos', 13, 500, 500],
            ['Oczy', 13, 800, 800],
            ['Policzek', 13, 1000, 1500],
            ['Okolice ust', 13, 500, 800],
            ['Cała twarz', 13, 2500, 2500],
            ['Szyja', 13, 1500, 1500],
            ['Twarz i szyja', 13, 3500, 3500],
            ['Dekolt', 13, 1500, 1500],
            ['Szyja i dekolt', 13, 2500, 2500],
            ['Szyja i dekolt', 13, 2500, 2500],
            ['Twarz, szyja i dekolt', 13, 4500, 5000],
            ['Dłonie', 13, 1000, 1000],
            ['Twarz, szyja, dekolt i dłonie', 13, 5000, 6000],
            ['Brzuch (część górna lub dolna)', 13, 1000, 2000],
            ['Cały brzuch', 13, 2000, 4000],
            ['Pośladki', 13, 1500, 3000],
            ['Piersi', 13, 1500, 3000],
            ['Dieta wyboru (tygodniowy plan żywieniowy z wymiennikami)', 14, 250, 250],
            ['Pakiet dietetyczny (dieta wyboru plus 3 wizyty kontrolne)', 14, 800, 800],
            ['Wycięcie znamienia, brodawki, kaszaka', 15, 800, 800],
            ['Wycięcie tłuszczaka powyżej 5 cm średnicy', 15, 1000, 1500],
            ['Korekcja blizny małej (do 5 cm)', 15, 1000, 2000],
            ['Korekcja blizny dużej (powyżej 5 cm)', 15, 2000, 4000],
            ['Zespół cieśni nadgarstka', 15, 5000, 6000],
        ];
    }
}
