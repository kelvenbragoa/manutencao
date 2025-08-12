<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipmentFleetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('equipment_fleets')->insert([
            [
                "name"=>"ReachStacker",
                "created_at"=>now(),
                "updated_at"=>now(),
            ],
            
            [
                "name"=>"Terminal Trator",
                "created_at"=>now(),
                "updated_at"=>now(),
            ],
            [
                "name"=>"ForkLift",
                "created_at"=>now(),
                "updated_at"=>now(),
            ],
            [
                "name"=>"GANTRY",
                "created_at"=>now(),
                "updated_at"=>now(),
            ]
            
        ]);
    }
}
