<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         DB::table('roles')->insert([
            [
                "name"=>"Administrador",
                "created_at"=>now(),
                "updated_at"=>now(),
            ],
            
            [
                "name"=>"Supervisor",
                "created_at"=>now(),
                "updated_at"=>now(),
            ],
            [
                "name"=>"Técnico de Ocorrências",
                "created_at"=>now(),
                "updated_at"=>now(),
            ],
            [
                "name"=>"Técnico da Área",
                "created_at"=>now(),
                "updated_at"=>now(),
            ],
            [
                "name"=>"Segurança",
                "created_at"=>now(),
                "updated_at"=>now(),
            ]
            
        ]);
    }
}
