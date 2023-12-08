<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos =[
            [
               'codprofesor' => '10',
               'nomprofesor' => 'Jesús Insuasti',
               'cateprofesor' => 'Tiempo Completo',
               'fotoprofesor' => 'jesus.jpg',
               'programa' => '30'
            ],
            [
                'codprofesor' => '11',
                'nomprofesor' => 'Ricardo Timarán',
                'cateprofesor' => 'Tiempo Completo',
                'fotoprofesor' => 'ricardo.jpg',
                'programa' => '40'
            ]
        ];
        DB::table('docente')->insert($datos);
    }
}
