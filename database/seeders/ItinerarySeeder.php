<?php

namespace Database\Seeders;

use App\Models\Itinerary;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItinerarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $itineraries = [
            ['date' => '2023-10-07', 'description' => 'Visit the Negombo fish market, Walking around the Negombo town, Drive to Wilpattu for afternoon safari, Overnight stay in Sigiriya'],
            ['date' => '2023-10-08', 'description' => 'Sigiriya rock fortress, Village tour with traditional lunch, Elephant safari at Minneriye National Park, Climb Pidurangala rock to see sunset, Traditional Ayurveda spa, Overnight stay in Sigiriya'],
        ];

        foreach ($itineraries as $itinerary) {
            Itinerary::create($itinerary);
        }
    }
}
