<?php

use Illuminate\Database\Seeder;
use App\Models\Aplicacion;

class AplicacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Aplicacion::class, 3)->create();
    }
}
