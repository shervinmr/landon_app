<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     
        $faker = Faker::create();
    	foreach (range(1,200) as $index) {
                DB::table('clients')->insert([
                    'title'     => $faker->title,
                    'name'      => $faker->name,
                    'last_name' => $faker->lastName,
                    'address'   => $faker->address ,
                    'zip_code'  => $faker->postcode,
                    'city'      => $faker->city,
                    'state'     => $faker->state,
                    'email'     => $faker->email,
                ]);
        }
    }
}
