<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;
use Faker\Factory as Faker;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();
        foreach(range(1,100)as$index){

        
        DB::table('usuarios')->insert([
            'nombre' => $faker->name(5),
            'equipo' => $faker->state(4),
            'nacionalidad'=> $faker->country(4)
        ]);}
    }
}
