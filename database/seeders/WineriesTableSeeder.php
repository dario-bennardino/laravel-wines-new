<?php

namespace Database\Seeders;

use App\Functions\Helper as Help;
use App\Models\Winery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WineriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_str = file_get_contents('https://api.sampleapis.com/wines/reds');
        $data = json_decode($data_str);

        foreach ($data as $winery) {
            $new_winery = new Winery();
            $new_winery->name = $winery->winery;
            $new_winery->slug = Help::generateSlug($winery->winery, Winery::class);
            $new_winery->location = $winery->location;
            $new_winery->save();
            // dd($new_winery);
        }
    }
}
