<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1,20) as $index) {
            DB::table('medicines')->insert([
                'name' => $faker->name,
                'price' => $faker->randomDigitNotNull,
            ]);
        }
    }
}
