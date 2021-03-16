<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class pivotSeeder extends Seeder
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
                'producto_id' => 1,
                'almacen_id' => 1
            ),
            array(
                'producto_id' => 2,
                'almacen_id' => 1
            ),
            array(
                'producto_id' => 3,
                'almacen_id' => 1
            ),
            array(
                'producto_id' => 4,
                'almacen_id' => 2
            ),
            array(
                'producto_id' => 5,
                'almacen_id' => 2
            ),
            array(
                'producto_id' => 6,
                'almacen_id' => 1
            ),
            array(
                'producto_id' => 7,
                'almacen_id' => 2
            ),
            array(
                'producto_id' => 8,
                'almacen_id' => 2
            ),
            array(
                'producto_id' => 9,
                'almacen_id' => 1
            ),
        );

        foreach ($productos as $producto) {            

            DB::table('almacen_producto')->insert([
                'producto_id' => $producto
            ]);
        }
    }
}
