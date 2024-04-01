<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('aluno')->insert([
            'name' => 'Luiz',
            'dateofbirth' => '1980-05-2',
            'email' => 'luiz@gmail.com',
            'registrationnumber' => '32028922',
            'classcourse' => 'TADS',
        ]);
    }
}
