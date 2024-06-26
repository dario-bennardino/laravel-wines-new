<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Aroma;
use App\Functions\Helper as Help;

class AromasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            "ciliegia",
            "fragola",
            "lampone",
            "mora",
            "ribes",
            "prugna",
            "mirtillo",
            "more",
            "amarena",
            "pesca",
            "albicocca",
            "mela gialla",
            "pera",
            "ananas",
            "mango",
            "banana",
            "papaya",
            "rosa",
            "gelsomino",
            "violetta",
            "fiore darancio",
            "lavanda",
            "pepe",
            "vaniglia",
            "chiodi di garofano",
            "cannella",
            "noce moscata",
            "menta",
            "basilico",
            "eucalipto",
            "timo",
            "salvia",
            "grafite",
            "pietra focaia",
            "gesso",
            "calcare",
            "caffè",
            "cioccolato",
            "cacao",
            "caramello",
            "pane tostato",
            "cuoio",
            "tabacco",
            "catrame",
            "miele",
            "nocciola"
        ];
        foreach($data as $aroma){
            $new_aroma = new Aroma();
            $new_aroma -> name = $aroma;
            $new_aroma -> slug = Help::generateSlug($aroma, Aroma::class) ;
            $new_aroma->save();
        }
    }
}
