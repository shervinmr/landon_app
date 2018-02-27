<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        $faker = Faker::create();
    	foreach (range(1,100) as $index) {
                DB::table('rooms')->insert([
                    'name' => $faker->word,
                    'floor' => $faker->numberBetween(1,4),
                    'description' => $faker->text($maxNbChars = 200),
                ]);
        }
    }
}
