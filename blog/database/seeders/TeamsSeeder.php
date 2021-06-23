<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\String_;

class TeamsSeeder extends Seeder
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
            \DB::table('teams')->insert([
                'club' => $faker->word,
            ]);
        }
    }
}
