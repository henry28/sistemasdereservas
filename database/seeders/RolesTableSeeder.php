<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Role; //Si no agrego el modelo, no me crea el seed

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::Create(['name'=>'Administrador']);
        Role::Create(['name'=>'Doctor']);
        Role::Create(['name'=>'Cliente']);
    }

    /**
        * DB::table('roles)->insert([
        * ['name'=>'Administrador']
        * ['name'=>'Doctor']
        * ['name'=>'Cliente']
        * ])
        *Para esta forma de agregar el seed, debo importar use Illuminate\Support\Fecades\DB;
        */
}
