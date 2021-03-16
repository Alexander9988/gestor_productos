<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $productos = array(
            array(
                'nombre' => 'cuchara',
                'almacen_id' => 1,
                'categoria_id' => 2
            ),
            array(
                'nombre' => 'tenedor',
                'almacen_id' => 1,
                'categoria_id' => 1
            ),
            array(
                'nombre' => 'cuchillo',
                'almacen_id' => 1,
                'categoria_id' => 1
            ),
            array(
                'nombre' => 'mesa de noche',
                'almacen_id' => 2,
                'categoria_id' => 3
            ),
            array(
                'nombre' => 'lampara',
                'almacen_id' => 2,
                'categoria_id' => 3
            ),
            array(
                'nombre' => 'lampara',
                'almacen_id' => 1,
                'categoria_id' => 3
            ),
            array(
                'nombre' => 'TV',
                'almacen_id' => 2,
                'categoria_id' => 2
            ),
            array(
                'nombre' => 'sofa',
                'almacen_id' => 2,
                'categoria_id' => 3
            ),
            array(
                'nombre' => 'sofa',
                'almacen_id' => 1,
                'categoria_id' => 3
            ),
        );



        foreach ($productos as $producto) {            

            DB::table('productos')->insert([
                'nombre' => $producto
            ]);
        }
    }
}
