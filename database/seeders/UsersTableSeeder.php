<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $user1= new User();
        //$user1->client_id= "1";
        $user1->name= "Marcela Ariza";
        $user1->email= "mariza@gmail.com";
        $user1->password= "password";
        $user1->save();

        $user2= new User();
        //$user2->client_id= "2";
        $user2->name= "Carlos Molano";
        $user2->email= "cmolano";
        $user2->password= "password";
        $user2->save();

        



    }
}
