<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $client1= new Client;
        $client1->name="Compensar";
         //$client1->city_id= now();
        // $client1->user_id="1";
        $client1->save();

        $client2= new Client;
        $client2->name="Cafam";
        //$client2->city_id=now();
        // $client2->user_id="2";
        $client2->save();

    }
}
