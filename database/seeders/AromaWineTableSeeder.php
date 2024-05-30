<?php

namespace Database\Seeders;

use App\Models\Aroma;
use App\Models\Wine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AromaWineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 718; $i++) {

            // estraggo un vino random
            $wine = Wine::inRandomOrder()->first();

            // estraggo un id random dagli aromi
            $aroma_id = Aroma::inRandomOrder()->first()->id;

            // aggiungo la relazione nella tabella pivot
            $wine->aromas()->attach($aroma_id);

            // dd($aroma_id);
            // dd($aroma_id);
        }
    }
}
