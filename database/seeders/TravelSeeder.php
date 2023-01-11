<?php

namespace Database\Seeders;

use App\Models\TravelPackage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TravelPackage::create([
            'title' => 'Bromo',
            'slug' => 'GotoBromo',
            'location' => 'Probolinggo, Jawa Timur',
            'about' => 'Gunung bromo',
            'featured_event' => 'Java Gunung Jazz',
            'languange' => 'IND',
            'foods' => 'Sate',
            'departure_date' => '2023-01-09',
            'type' => 'Standard',
            'price' => 1200000
        ]);
    }
}
