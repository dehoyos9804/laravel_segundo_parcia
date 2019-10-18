<?php

use Illuminate\Database\Seeder;

class ActorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Actor::class, 10)->create();
    }
}
