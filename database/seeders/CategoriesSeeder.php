<?php

namespace Database\Seeders;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->data() as $item) {
            $category = new Category([
                'name' => $item,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            $category->save();
        }
    }

    private function data(): array
    {
        return [
            'twarz', 'piersi', 'sylwetka', 'przeszczep włosów', 'medycyna estetyczna',
            'ginekologia estetyczna', 'urologia estetyczna', 'chirurgia naczyniowa',
            'fizjoterapia', 'radiologia / USG', 'kosmetologia',
            'depilacja', 'laser frakcyjny CO2', 'dietetyka', 'pozostałe zabiegi'
        ];
    }
}
