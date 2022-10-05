<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\City;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $city1=new City;
        $city1->name="Bogota";
        $city1->save();
;
        $city2=new City;
        $city2->name="Pereira";
        $city2->save();

        $city3=new City;
        $city3->name="Armenia";
        $city3->save();

        $city4=new City;
        $city4->name="Cali";
        $city4->save();

        $city5=new City;
        $city5->name="Boyaca";
        $city5->save();
    }

}