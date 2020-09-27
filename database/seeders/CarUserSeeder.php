<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\CarUser;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

/**
 * Class CarUserSeeder
 * @package Database\Seeders
 */
class CarUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 30) as $index) {
            $user = User::find(rand(1, 5));
            $car = Car::find(rand(1, 5));
            CarUser::create(
                [
                    'user_pk_id' => $user->user_id,
                    'car_pk_id' => $car->car_id,
                    'note' => Str::random(15),
                ]
            );
        }
    }
}
