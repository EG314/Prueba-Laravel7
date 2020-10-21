<?php

use App\Status;
use Illuminate\Database\Seeder;

class StatuseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::truncate();
        $status = new Status();
        $status->name='pendiente';
        $status->display_name='Pendiente';
        $status->color='yellow';
        $status->save();

        $status = new Status();
        $status->name='aceptado';
        $status->display_name='Aceptado';
        $status->color='blue';
        $status->save();

        $status = new Status();
        $status->name='rechazado';
        $status->display_name='Rechazado';
        $status->color='red';
        $status->save();
    }
}
