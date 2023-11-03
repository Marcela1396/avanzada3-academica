<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $programas = [
            [
                'codprograma' => '03',
                'nomprograma' => 'Ingeniería de Sistemas',
                'facultad' => '30',
            ],
            [
                'codprograma' => '04',
                'nomprograma' => 'Derecho Civil',
                'facultad' => '40',
            ],
            [
                'codprograma' => '05',
                'nomprograma' => 'Ciencias Sociales',
                'facultad' => '50',
            ],
            [
                'codprograma' => '01',
                'nomprograma' => 'Diseño gráfico',
                'facultad' => '10',
            ],
            [
                'codprograma' => '06',
                'nomprograma' => 'Contaduría Pública',
                'facultad' => '20',
            ],
        ];
        DB::table('programa')->insert($programas);
    }
}
