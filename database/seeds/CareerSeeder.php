<?php

use App\Career;
use Illuminate\Database\Seeder;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Career::truncate();
        $career = new Career();
        $career->name='Computacion';
        $career->save();

        $career = new Career();
        $career->name='Ingenieria Civil';
        $career->save();

        $career = new Career();
        $career->name='Psicologia';
        $career->save();
    }
}
