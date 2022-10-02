<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Rol;
use App\Models\Administrativo;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $rol = new Rol;

        $rol->nombre = 'Administrador';
        $rol->descripcion = 'Ese usuario tiene todos los permisos en el sistema.';
        $rol->save();

        $administrativo = new Administrativo;
        
        $administrativo->nombre = 'Nombre del Administrativo';
        $administrativo->ci = 'Numero de Carnet';
        $administrativo->sexo = 'M';
        $administrativo->fnacimiento = '1990-01-01';
        $administrativo->direccion = 'Direccion del Administrativo';
        $administrativo->telefono = 'Telefono del administrativo';
        $administrativo->save();

        $user = new User;

        $user->rol_id = '1';
        $user->administrativo_id = '1';
        $user->email = 'admin@mail.com';
        $user->password = bcrypt('password');
        $user->save();
    }
}
