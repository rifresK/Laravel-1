<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
            'name' => Crypt::encryptString('Luiz'),
            'email' => Crypt::encryptString('luiz@gmail.com'),
            'telefone' => Crypt::encryptString('(42) 98229371'),
            'data_nascimento' => Crypt::encryptString('2003-12-01')
        ]);

        DB::table('contacts')->insert([
            'name' => Crypt::encryptString('Jorge'),
            'email' => Crypt::encryptString('jorginho@gmail.com'),
            'telefone' => Crypt::encryptString('(42) 53101484'),
            'data_nascimento' => Crypt::encryptString('2004-05-05')
        ]);
    }
}
