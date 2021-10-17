<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ordere;

class OrdereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ordere::factory()
        ->count(2)
        ->create();
    }
}
