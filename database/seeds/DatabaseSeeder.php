<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables([                         // llamar a truncateTables con array de tablas.
            'rol',
            'permiso'
        ]);
        // $this->call(UsersTableSeeder::class);
        $this->call(tableRolSeeder::class);
        $this->call(tablePermisoSeeder::class);
    }

    protected function truncateTables(array $tables)    // función para truncar las tablas que se van a rellenar con seeders.
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');   // desactivar el control de la BD de las FOREIGN_KEY.
        foreach($tables as $table){                     // recorrer el array de tablas y truncarlas.
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');   // restablecer el control de la BD de las FOREIGN_KEY.
    }
}

