<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
        $rol = new Role();
        $rol->name='Rol de estudiante';
        $rol->display_name='Estudiante';
        $rol->save();

        $rol = new Role();
        $rol->name='Rol de maestro';
        $rol->display_name='Maestro de Redes';
        $rol->save();

        $rol = new Role();
        $rol->name='Rol de maestro';
        $rol->display_name='Maestro de programacion';
        $rol->save();

        $rol = new Role();
        $rol->name='Rol de administrativo';
        $rol->display_name='Secretaria';
        $rol->save();

        $rol = new Role();
        $rol->name='Rol de administrativo';
        $rol->display_name='Coordinadora';
        $rol->save();

    }
}
