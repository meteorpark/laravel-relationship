<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;


/**
 * Class CarFactory
 * @package Database\Factories
 */
class CarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Car::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = (new \Faker\Factory())::create();
        $faker->addProvider(new \Faker\Provider\Fakecar($faker));
        return [
            'car_name' => $faker->vehicleBrand.' '.$faker->vehicleModel,
            'price' => $faker->numberBetween(30000000, 500000000),
            'release_date' => $faker->dateTime,
        ];
    }
}
