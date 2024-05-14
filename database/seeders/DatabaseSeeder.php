<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
      $this->call([DivisionSeeder::class]);
      $this->call([DistrictSeeder::class]);
      $this->call([ThanaSeeder::class]);
      $this->call([UnionSeeder::class]);
    }
}