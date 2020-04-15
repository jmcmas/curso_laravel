<?php

use App\Models\Permiso;
use Illuminate\Database\Seeder;

class tablePermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Permiso::class)->create();              // Rellena un registro.
    }
}
