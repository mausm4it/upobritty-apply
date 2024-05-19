<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

use Illuminate\Support\Facades\Crypt;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $randomNumber = rand(1, 99999);
        $user = new User;
        $user->name = "Upobritty Admin";
        $user->email = "admin@upobritty.com";
        $user->phone_number = "01789808879";
        $user->user_id = "upobritty-admin".$randomNumber;
        $user->password = Hash::make('12345678');
        $user->save();

      

         
    }
}