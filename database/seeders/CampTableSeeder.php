<?php

namespace Database\Seeders;

use App\Models\Camp;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = [
            [
                'title' => 'Gila Belajar',
                'slug' => Str::slug('Gila Belajar'),
                'price' => 280
            ],
            [
                'title' => 'Baru Mulai',
                'slug' => Str::slug('Baru Mulai'),
                'price' => 140
            ],
        ];

        foreach ($camps as $camp) {
            Camp::create($camp);
        }
    }
}
