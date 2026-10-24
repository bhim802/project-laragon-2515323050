<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Publisher;

class PublisherSeeder extends Seeder
{
    public function run(): void
    {
        Publisher::create(['name' => 'A', 'city' => 'Jakarta']);
        Publisher::create(['name' => 'B', 'city' => 'Bandung']);
        Publisher::create(['name' => 'C', 'city' => 'Surabaya']);
    }
}
