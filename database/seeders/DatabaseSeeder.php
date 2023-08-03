<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

    public function run(): void
    {
        DB::table('lawyers')->insert([
            'name' => 'João Gomes',
            'email' => 'joao_gomes@dual_steps.com',
        ]);
        DB::table('lawyers')->insert([
            'name' => 'Mario Fernandez',
            'email' => 'mario_fernandez@dual_steps.com',
        ]);
        DB::table('type_of_processes')->insert([
            'name' => 'Cidadania Portuguesa',
            'type' => 'Pai/Mãe para Filho(a)'
        ]);
        DB::table('type_of_processes')->insert([
            'name' => 'Cidadania Italiana',
            'type' => 'Pai/Mãe para Filho(a)'
        ]);
    }
}
