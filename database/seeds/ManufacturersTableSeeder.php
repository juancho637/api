<?php

use App\Manufacturer;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ManufacturersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i<3; $i++){
            Manufacturer::create([
                'name' => $faker->word(),
                'phone' => $faker->randomNumber(7)
            ]);
        }
    }
}
