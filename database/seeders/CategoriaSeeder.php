<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias = array(
            array('nombre' => 'cocina'),
            array('nombre' => 'salon'),
            array('nombre' => 'dormitorio')
        );

        foreach ($categorias as $categoria) {

            DB::table('categorias')->insert([
                'nombre' => $categoria
            ]);

        }
    }
}
