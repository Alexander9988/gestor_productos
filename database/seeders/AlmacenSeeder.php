<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlmacenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $almacenes = array(
            array('nombre' => 'Norte'),
            array('nombre' => 'Sur')
        );

        foreach ($almacenes as $almacen) {

            DB::table('almacens')->insert([
                'nombre' => $almacen
            ]);

        }
    }
}
