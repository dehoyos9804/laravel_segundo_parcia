<?php

use Illuminate\Database\Seeder;

use App\Models\Servicio;

class ServicioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Servicio::class, 3)->create();
    }
}
