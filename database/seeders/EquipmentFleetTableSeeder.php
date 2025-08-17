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
        DB::table('equipment_fleets')->insert(
            [
                [
                    "name" => "Empty Handler",
                    "created_at"=> now(),
                    "id" => 1
                ],
                [
                    "name" => "Forklift 5T",
                    "created_at"=> now(),
                    "id" => 2
                ],
                [
                    "name" => "Forklift 2.5 T",
                    "created_at"=> now(),
                    "id" => 3
                ],
                [
                    "name" => "Forklift 3T",
                    "created_at"=> now(),
                    "id" => 4
                ],
                [
                    "name" => "Forklift 13T",
                    "created_at"=> now(),
                    "id" => 5
                ],
                [
                    "name" => "Forklift 16T",
                    "created_at"=> now(),
                    "id" => 6
                ],
                [
                    "name" => "Tractor Terminal 40",
                    "created_at"=> now(),
                    "id" => 7
                ],
                [
                    "name" => "Tractor Terminal 60",
                    "created_at"=> now(),
                    "id" => 8
                ],
                [
                    "name" => "Tractor Terminal 70",
                    "created_at"=> now(),
                    "id" => 9
                ],
                [
                    "name" => "Forklift 30T",
                    "created_at"=> now(),
                    "id" => 10
                ],
                [
                    "name" => "Reach Stacker",
                    "created_at"=> now(),
                    "id" => 11
                ],
                [
                    "name" => "Forklift 46T",
                    "created_at"=> now(),
                    "id" => 12
                ],
                [
                    "name" => "Forklift 50T",
                    "created_at"=> now(),
                    "id" => 13
                ],
                [
                    "name" => "Telescopic Handler",
                    "created_at"=> now(),
                    "id" => 14
                ],
                [
                    "name" => "Wheel Loader 9 m3",
                    "created_at"=> now(),
                    "id" => 15
                ],
                [
                    "name" => "Wheel Loader 17 m3",
                    "created_at"=> now(),
                    "id" => 16
                ],
                [
                    "name" => "Wheel Loader 13 m3",
                    "created_at"=> now(),
                    "id" => 17
                ],
                [
                    "name" => "Wheel Loader 24 m3",
                    "created_at"=> now(),
                    "id" => 18
                ],
                [
                    "name" => "Excavator 3m3",
                    "created_at"=> now(),
                    "id" => 19
                ],
                [
                    "name" => "Excavator 9m3",
                    "created_at"=> now(),
                    "id" => 20
                ],
                [
                    "name" => "Excavator 13m3",
                    "created_at"=> now(),
                    "id" => 21
                ],
                [
                    "name" => "Excavator 33m3",
                    "created_at"=> now(),
                    "id" => 22
                ],
                [
                    "name" => "Material Handler",
                    "created_at"=> now(),
                    "id" => 23
                ],
                [
                    "name" => "Tipper Trucks",
                    "created_at"=> now(),
                    "id" => 24
                ],
                [
                    "name" => "Tank Tracks",
                    "created_at"=> now(),
                    "id" => 25
                ],
                [
                    "name" => "Skid Loader",
                    "created_at"=> now(),
                    "id" => 26
                ],
                [
                    "name" => "Platforms 30T Skeleton",
                    "created_at"=> now(),
                    "id" => 27
                ],
                [
                    "name" => "Platforms 60T Ro-Ro",
                    "created_at"=> now(),
                    "id" => 28
                ],
                [
                    "name" => "Platforms 60T Skeleton",
                    "created_at"=> now(),
                    "id" => 29
                ],
                [
                    "name" => "Platforms 60T Fleet Bed",
                    "created_at"=> now(),
                    "id" => 30
                ],
                [
                    "name" => "Platforms 80T Ro-Ro",
                    "created_at"=> now(),
                    "id" => 31
                ],
                [
                    "name" => "Platforms 100T Ro-Ro",
                    "created_at"=> now(),
                    "id" => 32
                ],
                [
                    "name" => "IMPRESSORA ETIQUETADORA",
                    "created_at"=> now(),
                    "id" => 33
                ],
                [
                    "name" => "Viaturas Ligeira",
                    "created_at"=> now(),
                    "id" => 34
                ],
                [
                    "name" => "Motorizada",
                    "created_at"=> now(),
                    "id" => 35
                ],
                [
                    "name" => "Viatura Pesado de Carga",
                    "created_at"=> now(),
                    "id" => 36
                ],
                [
                    "name" => "Electric Cars",
                    "created_at"=> now(),
                    "id" => 37
                ],
                [
                    "name" => "Mobile Crane",
                    "created_at"=> now(),
                    "id" => 38
                ],
                [
                    "name" => "Spreader",
                    "created_at"=> now(),
                    "id" => 39
                ],
                [
                    "name" => "Grabs 5m3",
                    "created_at"=> now(),
                    "id" => 40
                ],
                [
                    "name" => "Grabs 8-m3",
                    "created_at"=> now(),
                    "id" => 41
                ],
                [
                    "name" => "Grabs 10m3",
                    "created_at"=> now(),
                    "id" => 42
                ],
                [
                    "name" => "Grabs 12 m3",
                    "created_at"=> now(),
                    "id" => 43
                ],
                [
                    "name" => "Grabs 14 m3",
                    "created_at"=> now(),
                    "id" => 44
                ],
                [
                    "name" => "Bagging Set",
                    "created_at"=> now(),
                    "id" => 45
                ],
                [
                    "name" => "Conveyor",
                    "created_at"=> now(),
                    "id" => 46
                ],
                [
                    "name" => "Conveyor Stacker",
                    "created_at"=> now(),
                    "id" => 47
                ],
                [
                    "name" => "Conveyor Staker",
                    "created_at"=> now(),
                    "id" => 48
                ],
                [
                    "name" => "HOPPER AND CONVEYOR SET",
                    "created_at"=> now(),
                    "id" => 49
                ],
                [
                    "name" => "Manual Hopper",
                    "created_at"=> now(),
                    "id" => 50
                ],
                [
                    "name" => "Eletrical Hopper",
                    "created_at"=> now(),
                    "id" => 51
                ],
                [
                    "name" => "De-Bulk",
                    "created_at"=> now(),
                    "id" => 52
                ],
                [
                    "name" => "Spreader de Viatura",
                    "created_at"=> now(),
                    "id" => 53
                ],
                [
                    "name" => "Spreader de Pá Mecânica",
                    "created_at"=> now(),
                    "id" => 54
                ],
                [
                    "name" => "Spreader de TCM",
                    "created_at"=> now(),
                    "id" => 55
                ],
                [
                    "name" => "Spreader de Escavadora",
                    "created_at"=> now(),
                    "id" => 56
                ],
                [
                    "name" => "Spreader de Locomotiva",
                    "created_at"=> now(),
                    "id" => 57
                ],
                [
                    "name" => "Spreader de BIG BAG 25T",
                    "created_at"=> now(),
                    "id" => 58
                ],
                [
                    "name" => "Spreader de BIG BAG 24",
                    "created_at"=> now(),
                    "id" => 59
                ],
                [
                    "name" => "Spreader de BIG BAG 18T",
                    "created_at"=> now(),
                    "id" => 60
                ],
                [
                    "name" => "Spreader de BIG BAG 5T",
                    "created_at"=> now(),
                    "id" => 61
                ],
                [
                    "name" => "Spreader de Granito",
                    "created_at"=> now(),
                    "id" => 62
                ],
                [
                    "name" => "Estiva direta de Granito",
                    "created_at"=> now(),
                    "id" => 63
                ],
                [
                    "name" => "Spreader de Granito - Vagão",
                    "created_at"=> now(),
                    "id" => 64
                ],
                [
                    "name" => "Spreader de Banheira",
                    "created_at"=> now(),
                    "id" => 65
                ],
                [
                    "name" => "Spreader de Chapas",
                    "created_at"=> now(),
                    "id" => 66
                ],
                [
                    "name" => "Spreader de Tambores",
                    "created_at"=> now(),
                    "id" => 67
                ],
                [
                    "name" => "Spreader de Contentor 20",
                    "created_at"=> now(),
                    "id" => 68
                ],
                [
                    "name" => "Spreader de Contentor 40",
                    "created_at"=> now(),
                    "id" => 69
                ],
                [
                    "name" => "OOG 40' Manual",
                    "created_at"=> now(),
                    "id" => 70
                ],
                [
                    "name" => "OOG 20' Manual",
                    "created_at"=> now(),
                    "id" => 71
                ],
                [
                    "name" => "OOG 20' Sem-Automtica",
                    "created_at"=> now(),
                    "id" => 72
                ],
                [
                    "name" => "OOG 40' Sem-Automtica",
                    "created_at"=> now(),
                    "id" => 73
                ],
                [
                    "name" => "Small Hopper",
                    "created_at"=> now(),
                    "id" => 74
                ],
                [
                    "name" => "Banheira 12m3",
                    "created_at"=> now(),
                    "id" => 75
                ],
                [
                    "name" => "Banheira 6m3",
                    "created_at"=> now(),
                    "id" => 76
                ],
                [
                    "name" => "Mesa",
                    "created_at"=> now(),
                    "id" => 77
                ],
                [
                    "name" => "Rampa",
                    "created_at"=> now(),
                    "id" => 78
                ],
                [
                    "name" => "Main Generator",
                    "created_at"=> now(),
                    "id" => 79
                ],
                [
                    "name" => "Other Generator",
                    "created_at"=> now(),
                    "id" => 80
                ],
                [
                    "name" => "Weightbridge 80T",
                    "created_at"=> now(),
                    "id" => 81
                ],
                [
                    "name" => "Small Weightbridge 1T",
                    "created_at"=> now(),
                    "id" => 82
                ],
                [
                    "name" => "Lighting Towers 45 M",
                    "created_at"=> now(),
                    "id" => 83
                ],
                [
                    "name" => "Outlets Refrigerators",
                    "created_at"=> now(),
                    "id" => 84
                ],
                [
                    "name" => "TC PIT",
                    "created_at"=> now(),
                    "id" => 85
                ],
                [
                    "name" => "TC PT",
                    "created_at"=> now(),
                    "id" => 86
                ],
                [
                    "name" => "Granite Tower",
                    "created_at"=> now(),
                    "id" => 87
                ],
                [
                    "name" => "Granite Tower Pier 6 e 7",
                    "created_at"=> now(),
                    "id" => 88
                ],
                [
                    "name" => "Granite Tower Pier 9 e 10",
                    "created_at"=> now(),
                    "id" => 89
                ],
                [
                    "name" => "Granite Tower Area \"G",
                    "created_at"=> now(),
                    "id" => 90
                ],
                [
                    "name" => "Tower Gate 05",
                    "created_at"=> now(),
                    "id" => 91
                ],
                [
                    "name" => "PIT Pier 6 e 7",
                    "created_at"=> now(),
                    "id" => 92
                ],
                [
                    "name" => "Street lighting TC",
                    "created_at"=> now(),
                    "id" => 93
                ],
                [
                    "name" => "AC-Samsung-24000",
                    "created_at"=> now(),
                    "id" => 94
                ],
                [
                    "name" => "AC-Haier-24000",
                    "created_at"=> now(),
                    "id" => 95
                ],
                [
                    "name" => "AC-Chigo-24000",
                    "created_at"=> now(),
                    "id" => 96
                ],
                [
                    "name" => "AC-Chigo-18000",
                    "created_at"=> now(),
                    "id" => 97
                ],
                [
                    "name" => "AC-Haier-18000",
                    "created_at"=> now(),
                    "id" => 98
                ],
                [
                    "name" => "AC-Carrier-60000",
                    "created_at"=> now(),
                    "id" => 99
                ],
                [
                    "name" => "AC-Carrier-38000",
                    "created_at"=> now(),
                    "id" => 100
                ],
                [
                    "name" => "AC-Carrier-24000",
                    "created_at"=> now(),
                    "id" => 101
                ],
                [
                    "name" => "AC-Carrier-12000",
                    "created_at"=> now(),
                    "id" => 102
                ],
                [
                    "name" => "AC-Westpoint-24000",
                    "created_at"=> now(),
                    "id" => 103
                ],
                [
                    "name" => "AC-Gree-24000",
                    "created_at"=> now(),
                    "id" => 104
                ],
                [
                    "name" => "AC-Gree-12000",
                    "created_at"=> now(),
                    "id" => 105
                ],
                [
                    "name" => "AC-Supra -24000",
                    "created_at"=> now(),
                    "id" => 106
                ],
                [
                    "name" => "AC-Chigo-12000",
                    "created_at"=> now(),
                    "id" => 107
                ],
                [
                    "name" => "AC-Gree-18000",
                    "created_at"=> now(),
                    "id" => 108
                ],
                [
                    "name" => "AC-Depoint-12000",
                    "created_at"=> now(),
                    "id" => 109
                ],
                [
                    "name" => "AC-Gree-9000",
                    "created_at"=> now(),
                    "id" => 110
                ],
                [
                    "name" => "AC-MaQuay-60000",
                    "created_at"=> now(),
                    "id" => 111
                ],
                [
                    "name" => "AC-Samsung -12000",
                    "created_at"=> now(),
                    "id" => 112
                ],
                [
                    "name" => "AC-Samsung-18000",
                    "created_at"=> now(),
                    "id" => 113
                ],
                [
                    "name" => "AC-Orima-12000",
                    "created_at"=> now(),
                    "id" => 114
                ],
                [
                    "name" => "AC-Samsung -18000",
                    "created_at"=> now(),
                    "id" => 115
                ],
                [
                    "name" => "AC-Samsung -24000",
                    "created_at"=> now(),
                    "id" => 116
                ],
                [
                    "name" => "AC-Samsung -9000",
                    "created_at"=> now(),
                    "id" => 117
                ],
                [
                    "name" => "AC-Safawane-12000",
                    "created_at"=> now(),
                    "id" => 118
                ],
                [
                    "name" => "AC-Westpoint-18000",
                    "created_at"=> now(),
                    "id" => 119
                ],
                [
                    "name" => "AC-Carries-24000",
                    "created_at"=> now(),
                    "id" => 120
                ],
                [
                    "name" => "AC-Chigo-9000",
                    "created_at"=> now(),
                    "id" => 121
                ],
                [
                    "name" => "AC-Depoit-90000",
                    "created_at"=> now(),
                    "id" => 122
                ],
                [
                    "name" => "AC-McQuay-60000",
                    "created_at"=> now(),
                    "id" => 123
                ],
                [
                    "name" => "AC-Samsung-12000",
                    "created_at"=> now(),
                    "id" => 124
                ],
                [
                    "name" => "AC-Depoit-12000",
                    "created_at"=> now(),
                    "id" => 125
                ],
                [
                    "name" => "AC-Supra -12000",
                    "created_at"=> now(),
                    "id" => 126
                ],
                [
                    "name" => "AC-Depoit-18000",
                    "created_at"=> now(),
                    "id" => 127
                ],
                [
                    "name" => "AC--12000",
                    "created_at"=> now(),
                    "id" => 128
                ],
                [
                    "name" => "AC-Grre-18000",
                    "created_at"=> now(),
                    "id" => 129
                ],
                [
                    "name" => "AC-Alonsa-18000",
                    "created_at"=> now(),
                    "id" => 130
                ],
                [
                    "name" => "AC-Chigo-24000/18000",
                    "created_at"=> now(),
                    "id" => 131
                ],
                [
                    "name" => "AC-Chigo-18000/12000",
                    "created_at"=> now(),
                    "id" => 132
                ],
                [
                    "name" => "AC-Alonsa-24000",
                    "created_at"=> now(),
                    "id" => 133
                ],
                [
                    "name" => "AC-Haier-12000",
                    "created_at"=> now(),
                    "id" => 134
                ],
                [
                    "name" => "AC-Chigo -9000",
                    "created_at"=> now(),
                    "id" => 135
                ],
                [
                    "name" => "AC-Supra-18000",
                    "created_at"=> now(),
                    "id" => 136
                ],
                [
                    "name" => "AC-Carrier-64000",
                    "created_at"=> now(),
                    "id" => 137
                ],
                [
                    "name" => "AC-Carrier-9000",
                    "created_at"=> now(),
                    "id" => 138
                ],
                [
                    "name" => "AC-Supra-12000",
                    "created_at"=> now(),
                    "id" => 139
                ]
            ]
        );
    }
}
