<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;

/**
 * Class CarSeeder
 * @package Database\Seeders
 */
class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Car::factory()->count(5)->create();
    }
}
