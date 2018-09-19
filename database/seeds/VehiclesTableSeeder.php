<?php

use App\Manufacturer;
use App\Vehicle;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class VehiclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $cantidad = Manufacturer::all()->count();

        for ($i=0; $i<$cantidad; $i++){
            Vehicle::create([
                'color' => $faker->safeColorName(),
                'cylinder' => $faker->randomFloat(3),
                'weight' => $faker->randomFloat(3),
                'power' => $faker->randomNumber(3),
                'manufacturer_id' => $faker->numberBetween(1, $cantidad)
            ]);
        }
    }
}
