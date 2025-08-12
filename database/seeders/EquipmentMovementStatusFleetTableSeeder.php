<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipmentMovementStatusFleetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('equipment_movement_statuses')->insert([
            [
                "name"=>"Aguarda Aprovação",
                "created_at"=>now(),
                "updated_at"=>now(),
            ],
            [
                "name"=>"Aguardando Entrada",
                "created_at"=>now(),
                "updated_at"=>now(),
            ],
            
            [
                "name"=>"Na Oficina",
                "created_at"=>now(),
                "updated_at"=>now(),
            ],
            [
                "name"=>"Em Manutenção",
                "created_at"=>now(),
                "updated_at"=>now(),
            ],
            [
                "name"=>"Manutenção Concluída",
                "created_at"=>now(),
                "updated_at"=>now(),
            ],
            [
                "name"=>"Fora da Oficina",
                "created_at"=>now(),
                "updated_at"=>now(),
            ],
            

            
        ]);
    }
}
