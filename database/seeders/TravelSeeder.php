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
            'title' => 'Bali',
            'slug' => 'bali',
            'location' => 'Bali, bali',
            'about' => 'Kuta',
            'featured_event' => 'Bali Jazz',
            'languange' => 'IND',
            'foods' => 'Sate',
            'departure_date' => '2023-01-09',
            'type' => 'Standard',
            'price' => 1200000
        ]);
    }
}
