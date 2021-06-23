<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class PlayersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 10; $i++ ){
            \DB::table('players')->insert([
                'team_id' => rand(1, 10),
                'voornaam' => $faker->firstName,
                'achternaam' => $faker->lastName,
            ]);
        }
    }
}
