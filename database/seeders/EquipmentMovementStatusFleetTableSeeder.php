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
                //1
                "name"=>"Aguarda Aprovação",
                "created_at"=>now(),
                "updated_at"=>now(),
            ],
            [
                //2
                "name"=>"Aguardando Entrada",
                "created_at"=>now(),
                "updated_at"=>now(),
            ],
            
            [
                //3
                "name"=>"Na Oficina",
                "created_at"=>now(),
                "updated_at"=>now(),
            ],
            [
                //4
                "name"=>"Em Manutenção",
                "created_at"=>now(),
                "updated_at"=>now(),
            ],
            [
                //5
                "name"=>"Em inspeção",
                "created_at"=>now(),
                "updated_at"=>now(),
            ],
            [
                //6
                "name"=>"Manutenção Concluída",
                "created_at"=>now(),
                "updated_at"=>now(),
            ],
            [
                //7
                "name"=>"Saída Autorizada",
                "created_at"=>now(),
                "updated_at"=>now(),
            ],
            [
                //8
                "name"=>"Fora da Oficina",
                "created_at"=>now(),
                "updated_at"=>now(),
            ],
            

            
        ]);
    }
}
