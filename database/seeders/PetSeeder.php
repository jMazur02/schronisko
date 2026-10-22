<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pet; 

class PetSeeder extends Seeder
{
    public function run(): void
    {
       
        Pet::firstOrCreate([
            'imie' => 'Simba',
            'opis' => 'Simba to wulkan radości w psim futrze! Zawsze uśmiechnięty, łagodny i przyjazny – pokocha każdego od pierwszego machnięcia ogona. Świetnie odnajdzie się w aktywnej rodzinie, która da mu dużo miłości i zabawy.',
            'zdjecie' => 'simba.jpg'
        ]);

        Pet::firstOrCreate([
            'imie' => 'Dasza',
            'opis' => 'Poznaj Daszę – energiczną, odważną i pełną serca! Uwielbia spacery, przytulanki i jest zawsze gotowa na wspólne przygody. Dasza szuka domu, w którym będzie kochana tak mocno, jak ona potrafi kochać człowieka.',
            'zdjecie' => 'dasza.jpg'
        ]);

        Pet::firstOrCreate([
            'imie' => 'Ruduś',
            'opis' => 'Ten dostojny rudzielec to Ruduś – kot o wielkim sercu i wyjątkowym spojrzeniu. Choć wygląda poważnie, potrafi rozczulić każdym mruczeniem i subtelnym przytuleniem. Marzy o spokojnym domu.',
            'zdjecie' => 'rudus.jpg'
        ]);
        Pet::firstOrCreate([
            'imie' => 'Dobromir',
            'opis' => 'Oto Dobromir! Ten uroczy, biało-bury kocurek z zielonymi oczami i różowym noskiem czeka na swój prawdziwy dom. Jestem gotów obdarzyć Cię miłością i ciepłem. Szukam kogoś, kto otworzy przede mną swoje serce. Adoptuj mnie i przekonaj się, jak wspaniałym mogę być przyjacielem!',
            'zdjecie' => 'dobromir.jpg'
        ]);
        Pet::firstOrCreate([
            'imie' => 'Beti',
            'opis' => 'Oto Beti! Ta piękna, trójkolorowa dama z miękkim futerkiem czeka na prawdziwy dom. Jestem gotowa obdarzyć Cię miłością i wiernością. Adoptuj mnie i przekonaj się, jak wspaniałym mogę być przyjacielem!',
            'zdjecie' => 'beti.jpg'
        ]);
  
    }
}