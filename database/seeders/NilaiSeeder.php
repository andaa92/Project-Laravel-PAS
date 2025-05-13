<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NilaiSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['id_guru' => 8, 'id_murid' => 1, 'id_mata_pelajaran' => 1, 'nilai' => 78, 'predikat' => 'C', 'semester' => 1],
            ['id_guru' => 9, 'id_murid' => 1, 'id_mata_pelajaran' => 2, 'nilai' => 98, 'predikat' => 'A', 'semester' => 1],
            ['id_guru' => 3, 'id_murid' => 1, 'id_mata_pelajaran' => 3, 'nilai' => 64, 'predikat' => 'D', 'semester' => 1],
            ['id_guru' => 11, 'id_murid' => 1, 'id_mata_pelajaran' => 4, 'nilai' => 77, 'predikat' => 'C', 'semester' => 1],
            ['id_guru' => 12, 'id_murid' => 1, 'id_mata_pelajaran' => 5, 'nilai' => 52, 'predikat' => 'E', 'semester' => 1],
            ['id_guru' => 6, 'id_murid' => 1, 'id_mata_pelajaran' => 6, 'nilai' => 94, 'predikat' => 'A', 'semester' => 1],
            ['id_guru' => 7, 'id_murid' => 1, 'id_mata_pelajaran' => 7, 'nilai' => 64, 'predikat' => 'D', 'semester' => 1],
            ['id_guru' => 8, 'id_murid' => 2, 'id_mata_pelajaran' => 1, 'nilai' => 86, 'predikat' => 'B', 'semester' => 1],
            ['id_guru' => 9, 'id_murid' => 2, 'id_mata_pelajaran' => 2, 'nilai' => 92, 'predikat' => 'A', 'semester' => 1],
            ['id_guru' => 3, 'id_murid' => 2, 'id_mata_pelajaran' => 3, 'nilai' => 88, 'predikat' => 'B', 'semester' => 1],
            ['id_guru' => 11, 'id_murid' => 2, 'id_mata_pelajaran' => 4, 'nilai' => 85, 'predikat' => 'B', 'semester' => 1],
            ['id_guru' => 12, 'id_murid' => 2, 'id_mata_pelajaran' => 5, 'nilai' => 70, 'predikat' => 'C', 'semester' => 1],
            ['id_guru' => 6, 'id_murid' => 2, 'id_mata_pelajaran' => 6, 'nilai' => 78, 'predikat' => 'C', 'semester' => 1],
            ['id_guru' => 7, 'id_murid' => 2, 'id_mata_pelajaran' => 7, 'nilai' => 79, 'predikat' => 'C', 'semester' => 1],
            ['id_guru' => 8, 'id_murid' => 3, 'id_mata_pelajaran' => 1, 'nilai' => 92, 'predikat' => 'A', 'semester' => 1],
            ['id_guru' => 9, 'id_murid' => 3, 'id_mata_pelajaran' => 2, 'nilai' => 91, 'predikat' => 'A', 'semester' => 1],
            ['id_guru' => 3, 'id_murid' => 3, 'id_mata_pelajaran' => 3, 'nilai' => 88, 'predikat' => 'B', 'semester' => 1],
            ['id_guru' => 11, 'id_murid' => 3, 'id_mata_pelajaran' => 4, 'nilai' => 81, 'predikat' => 'B', 'semester' => 1],
            ['id_guru' => 12, 'id_murid' => 3, 'id_mata_pelajaran' => 5, 'nilai' => 65, 'predikat' => 'D', 'semester' => 1],
            ['id_guru' => 6, 'id_murid' => 3, 'id_mata_pelajaran' => 6, 'nilai' => 85, 'predikat' => 'B', 'semester' => 1],
            ['id_guru' => 7, 'id_murid' => 3, 'id_mata_pelajaran' => 7, 'nilai' => 84, 'predikat' => 'B', 'semester' => 1],
            
        ];

        DB::table('nilai')->insert($data);
    }
}

