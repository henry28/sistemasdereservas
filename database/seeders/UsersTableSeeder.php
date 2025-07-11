<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash; //para encriptar password

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    //crear 1 admin (rol_id = 1)
    public function run(): void
    {
        User::Create([
            'nombre'=>'Henry',
            'ape_paterno'=>'López',
            'ape_materno'=>'Toledo',
            'telefono'=>'2213517309',
            'email'=>'henry@example.com',
            'password'=>Hash::make('password'),
            'rol_id'=>1, 
        ]);

        User::factory()->count(3)->create([
            'rol_id'=>2, //Doctor
        ]);

        User::factory()->count(10)->create([
            'rol_id'=>3, //Cliente
        ]);
    }
}
