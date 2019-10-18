<?php

use Illuminate\Database\Seeder;

class MovimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movimientos = factory(App\Models\Movimiento::class, 5)
        ->create();
    }
}
