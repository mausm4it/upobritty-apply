<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        $userAdmin = Role::create(['name' => 'admin']);
        $userEditor = Role::create(['name' => 'student']);


        $userAdmin->givePermissionTo(Permission::all());

       
    }
}