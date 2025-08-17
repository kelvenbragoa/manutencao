<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('equipment')->insert(
            [
                [
                    "name" => "EMPFLK0903",
                    "model" => "N/A",
                    "plate_number" => "EMPFLK0903",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 1
                ],
                [
                    "name" => "EMPFLK0904",
                    "model" => "N/A",
                    "plate_number" => "EMPFLK0904",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 1
                ],
                [
                    "name" => "EMPFLK0905",
                    "model" => "N/A",
                    "plate_number" => "EMPFLK0905",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 1
                ],
                [
                    "name" => "FKL0501",
                    "model" => "N/A",
                    "plate_number" => "FKL0501",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 2
                ],
                [
                    "name" => "FKL0502",
                    "model" => "N/A",
                    "plate_number" => "FKL0502",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 2
                ],
                [
                    "name" => "FKL0503",
                    "model" => "N/A",
                    "plate_number" => "FKL0503",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 2
                ],
                [
                    "name" => "FKL0504",
                    "model" => "N/A",
                    "plate_number" => "FKL0504",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 2
                ],
                [
                    "name" => "FKL0505",
                    "model" => "N/A",
                    "plate_number" => "FKL0505",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 2
                ],
                [
                    "name" => "FKL0506",
                    "model" => "N/A",
                    "plate_number" => "FKL0506",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 2
                ],
                [
                    "name" => "FKL0507",
                    "model" => "N/A",
                    "plate_number" => "FKL0507",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 2
                ],
                [
                    "name" => "FKL0508",
                    "model" => "N/A",
                    "plate_number" => "FKL0508",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 2
                ],
                [
                    "name" => "FKL0509",
                    "model" => "N/A",
                    "plate_number" => "FKL0509",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 2
                ],
                [
                    "name" => "FKL2501",
                    "model" => "N/A",
                    "plate_number" => "FKL2501",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 3
                ],
                [
                    "name" => "FKL2502",
                    "model" => "N/A",
                    "plate_number" => "FKL2502",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 3
                ],
                [
                    "name" => "FKL2503",
                    "model" => "N/A",
                    "plate_number" => "FKL2503",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 3
                ],
                [
                    "name" => "FKL2504",
                    "model" => "N/A",
                    "plate_number" => "FKL2504",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 3
                ],
                [
                    "name" => "FKL2505",
                    "model" => "N/A",
                    "plate_number" => "FKL2505",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 3
                ],
                [
                    "name" => "FKL2506",
                    "model" => "N/A",
                    "plate_number" => "FKL2506",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 3
                ],
                [
                    "name" => "FKL0318",
                    "model" => "N/A",
                    "plate_number" => "FKL0318",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 4
                ],
                [
                    "name" => "FKL0323",
                    "model" => "N/A",
                    "plate_number" => "FKL0323",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 4
                ],
                [
                    "name" => "FKL1301",
                    "model" => "N/A",
                    "plate_number" => "FKL1301",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 5
                ],
                [
                    "name" => "FKL1302",
                    "model" => "N/A",
                    "plate_number" => "FKL1302",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 5
                ],
                [
                    "name" => "FKL1303",
                    "model" => "N/A",
                    "plate_number" => "FKL1303",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 5
                ],
                [
                    "name" => "FKL1304",
                    "model" => "N/A",
                    "plate_number" => "FKL1304",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 5
                ],
                [
                    "name" => "FKL1603",
                    "model" => "N/A",
                    "plate_number" => "FKL1603",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 6
                ],
                [
                    "name" => "FKL1604",
                    "model" => "N/A",
                    "plate_number" => "FKL1604",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 6
                ],
                [
                    "name" => "FKL1605",
                    "model" => "N/A",
                    "plate_number" => "FKL1605",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 6
                ],
                [
                    "name" => "FKL1606",
                    "model" => "N/A",
                    "plate_number" => "FKL1606",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 6
                ],
                [
                    "name" => "FKL1607",
                    "model" => "N/A",
                    "plate_number" => "FKL1607",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 6
                ],
                [
                    "name" => "FKL1608",
                    "model" => "N/A",
                    "plate_number" => "FKL1608",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 6
                ],
                [
                    "name" => 45986,
                    "model" => "N/A",
                    "plate_number" => 45986,
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 7
                ],
                [
                    "name" => 46016,
                    "model" => "N/A",
                    "plate_number" => 46016,
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 7
                ],
                [
                    "name" => "25-13",
                    "model" => "N/A",
                    "plate_number" => "25-13",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 7
                ],
                [
                    "name" => "25-14",
                    "model" => "N/A",
                    "plate_number" => "25-14",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 7
                ],
                [
                    "name" => "25-15",
                    "model" => "N/A",
                    "plate_number" => "25-15",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 7
                ],
                [
                    "name" => "25-16",
                    "model" => "N/A",
                    "plate_number" => "25-16",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 7
                ],
                [
                    "name" => "25-17",
                    "model" => "N/A",
                    "plate_number" => "25-17",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 7
                ],
                [
                    "name" => "25-18",
                    "model" => "N/A",
                    "plate_number" => "25-18",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 7
                ],
                [
                    "name" => "25-19",
                    "model" => "N/A",
                    "plate_number" => "25-19",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 7
                ],
                [
                    "name" => "25-20",
                    "model" => "N/A",
                    "plate_number" => "25-20",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 7
                ],
                [
                    "name" => "25-21",
                    "model" => "N/A",
                    "plate_number" => "25-21",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 7
                ],
                [
                    "name" => "25-22",
                    "model" => "N/A",
                    "plate_number" => "25-22",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 7
                ],
                [
                    "name" => "25-23",
                    "model" => "N/A",
                    "plate_number" => "25-23",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 7
                ],
                [
                    "name" => "25-24",
                    "model" => "N/A",
                    "plate_number" => "25-24",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 7
                ],
                [
                    "name" => "25-25",
                    "model" => "N/A",
                    "plate_number" => "25-25",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 7
                ],
                [
                    "name" => "25-26",
                    "model" => "N/A",
                    "plate_number" => "25-26",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 7
                ],
                [
                    "name" => "25-27",
                    "model" => "N/A",
                    "plate_number" => "25-27",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 7
                ],
                [
                    "name" => "25-28",
                    "model" => "N/A",
                    "plate_number" => "25-28",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 7
                ],
                [
                    "name" => "25-29",
                    "model" => "N/A",
                    "plate_number" => "25-29",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 7
                ],
                [
                    "name" => "TTR6001",
                    "model" => "N/A",
                    "plate_number" => "TTR6001",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 8
                ],
                [
                    "name" => "TTR6002",
                    "model" => "N/A",
                    "plate_number" => "TTR6002",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 8
                ],
                [
                    "name" => "TTR6003",
                    "model" => "N/A",
                    "plate_number" => "TTR6003",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 8
                ],
                [
                    "name" => "TTR6004",
                    "model" => "N/A",
                    "plate_number" => "TTR6004",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 8
                ],
                [
                    "name" => "TTR6005",
                    "model" => "N/A",
                    "plate_number" => "TTR6005",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 8
                ],
                [
                    "name" => "TTR6006",
                    "model" => "N/A",
                    "plate_number" => "TTR6006",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 8
                ],
                [
                    "name" => "TTR6007",
                    "model" => "N/A",
                    "plate_number" => "TTR6007",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 8
                ],
                [
                    "name" => "TTR6008",
                    "model" => "N/A",
                    "plate_number" => "TTR6008",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 8
                ],
                [
                    "name" => "TTR6009",
                    "model" => "N/A",
                    "plate_number" => "TTR6009",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 8
                ],
                [
                    "name" => "TTR6010",
                    "model" => "N/A",
                    "plate_number" => "TTR6010",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 8
                ],
                [
                    "name" => "TTR6011",
                    "model" => "N/A",
                    "plate_number" => "TTR6011",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 8
                ],
                [
                    "name" => "TTR6012",
                    "model" => "N/A",
                    "plate_number" => "TTR6012",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 8
                ],
                [
                    "name" => "TTR6013",
                    "model" => "N/A",
                    "plate_number" => "TTR6013",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 8
                ],
                [
                    "name" => "TTR6014",
                    "model" => "N/A",
                    "plate_number" => "TTR6014",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 8
                ],
                [
                    "name" => "TTR6015",
                    "model" => "N/A",
                    "plate_number" => "TTR6015",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 8
                ],
                [
                    "name" => "TTR6016",
                    "model" => "N/A",
                    "plate_number" => "TTR6016",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 8
                ],
                [
                    "name" => "TTR7001",
                    "model" => "N/A",
                    "plate_number" => "TTR7001",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 9
                ],
                [
                    "name" => "TTR7002",
                    "model" => "N/A",
                    "plate_number" => "TTR7002",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 9
                ],
                [
                    "name" => "TTR7003",
                    "model" => "N/A",
                    "plate_number" => "TTR7003",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 9
                ],
                [
                    "name" => "TTR7004",
                    "model" => "N/A",
                    "plate_number" => "TTR7004",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 9
                ],
                [
                    "name" => "TTR7005",
                    "model" => "N/A",
                    "plate_number" => "TTR7005",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 9
                ],
                [
                    "name" => "TTR7006",
                    "model" => "N/A",
                    "plate_number" => "TTR7006",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 9
                ],
                [
                    "name" => "TTR7007",
                    "model" => "N/A",
                    "plate_number" => "TTR7007",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 9
                ],
                [
                    "name" => "TTR7008",
                    "model" => "N/A",
                    "plate_number" => "TTR7008",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 9
                ],
                [
                    "name" => "TTR7009",
                    "model" => "N/A",
                    "plate_number" => "TTR7009",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 9
                ],
                [
                    "name" => "TTR7010",
                    "model" => "N/A",
                    "plate_number" => "TTR7010",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 9
                ],
                [
                    "name" => "TTR7011",
                    "model" => "N/A",
                    "plate_number" => "TTR7011",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 9
                ],
                [
                    "name" => "TTR7012",
                    "model" => "N/A",
                    "plate_number" => "TTR7012",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 9
                ],
                [
                    "name" => "TTR7013",
                    "model" => "N/A",
                    "plate_number" => "TTR7013",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 9
                ],
                [
                    "name" => "TTR7014",
                    "model" => "N/A",
                    "plate_number" => "TTR7014",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 9
                ],
                [
                    "name" => "TTR7015",
                    "model" => "N/A",
                    "plate_number" => "TTR7015",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 9
                ],
                [
                    "name" => "TTR7016",
                    "model" => "N/A",
                    "plate_number" => "TTR7016",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 9
                ],
                [
                    "name" => "TTR7017",
                    "model" => "N/A",
                    "plate_number" => "TTR7017",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 9
                ],
                [
                    "name" => "TTR7018",
                    "model" => "N/A",
                    "plate_number" => "TTR7018",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 9
                ],
                [
                    "name" => "TTR7019",
                    "model" => "N/A",
                    "plate_number" => "TTR7019",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 9
                ],
                [
                    "name" => "TTR7020",
                    "model" => "N/A",
                    "plate_number" => "TTR7020",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 9
                ],
                [
                    "name" => "TTR7021",
                    "model" => "N/A",
                    "plate_number" => "TTR7021",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 9
                ],
                [
                    "name" => "TTR7022",
                    "model" => "N/A",
                    "plate_number" => "TTR7022",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 9
                ],
                [
                    "name" => "TTR7023",
                    "model" => "N/A",
                    "plate_number" => "TTR7023",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 9
                ],
                [
                    "name" => "TTR7024",
                    "model" => "N/A",
                    "plate_number" => "TTR7024",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 9
                ],
                [
                    "name" => "TTR7025",
                    "model" => "N/A",
                    "plate_number" => "TTR7025",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 9
                ],
                [
                    "name" => "TTR7026",
                    "model" => "N/A",
                    "plate_number" => "TTR7026",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 9
                ],
                [
                    "name" => "TTR7027",
                    "model" => "N/A",
                    "plate_number" => "TTR7027",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 9
                ],
                [
                    "name" => "TTR7028",
                    "model" => "N/A",
                    "plate_number" => "TTR7028",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 9
                ],
                [
                    "name" => "TTR7029",
                    "model" => "N/A",
                    "plate_number" => "TTR7029",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 9
                ],
                [
                    "name" => "TTR7030",
                    "model" => "N/A",
                    "plate_number" => "TTR7030",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 9
                ],
                [
                    "name" => "TTR7031",
                    "model" => "N/A",
                    "plate_number" => "TTR7031",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 9
                ],
                [
                    "name" => "TTR7032",
                    "model" => "N/A",
                    "plate_number" => "TTR7032",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 9
                ],
                [
                    "name" => "TTR7033",
                    "model" => "N/A",
                    "plate_number" => "TTR7033",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 9
                ],
                [
                    "name" => "TTR7034",
                    "model" => "N/A",
                    "plate_number" => "TTR7034",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 9
                ],
                [
                    "name" => "TTR7035",
                    "model" => "N/A",
                    "plate_number" => "TTR7035",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 9
                ],
                [
                    "name" => "TTR7036",
                    "model" => "N/A",
                    "plate_number" => "TTR7036",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 9
                ],
                [
                    "name" => "TTR7037",
                    "model" => "N/A",
                    "plate_number" => "TTR7037",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 9
                ],
                [
                    "name" => "TTR7038",
                    "model" => "N/A",
                    "plate_number" => "TTR7038",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 9
                ],
                [
                    "name" => "TTR7039",
                    "model" => "N/A",
                    "plate_number" => "TTR7039",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 9
                ],
                [
                    "name" => "FKL3007",
                    "model" => "N/A",
                    "plate_number" => "FKL3007",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 10
                ],
                [
                    "name" => "FKL3008",
                    "model" => "N/A",
                    "plate_number" => "FKL3008",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 10
                ],
                [
                    "name" => "RSK4513",
                    "model" => "N/A",
                    "plate_number" => "RSK4513",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 11
                ],
                [
                    "name" => "RSK4514",
                    "model" => "N/A",
                    "plate_number" => "RSK4514",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 11
                ],
                [
                    "name" => "RSK4515",
                    "model" => "N/A",
                    "plate_number" => "RSK4515",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 11
                ],
                [
                    "name" => "RSK4516",
                    "model" => "N/A",
                    "plate_number" => "RSK4516",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 11
                ],
                [
                    "name" => "RSK4517",
                    "model" => "N/A",
                    "plate_number" => "RSK4517",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 11
                ],
                [
                    "name" => "RSK4518",
                    "model" => "N/A",
                    "plate_number" => "RSK4518",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 11
                ],
                [
                    "name" => "RSK4519",
                    "model" => "N/A",
                    "plate_number" => "RSK4519",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 11
                ],
                [
                    "name" => "RSK4520",
                    "model" => "N/A",
                    "plate_number" => "RSK4520",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 11
                ],
                [
                    "name" => "RSK4521",
                    "model" => "N/A",
                    "plate_number" => "RSK4521",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 11
                ],
                [
                    "name" => "RSK4522",
                    "model" => "N/A",
                    "plate_number" => "RSK4522",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 11
                ],
                [
                    "name" => "RSK4523",
                    "model" => "N/A",
                    "plate_number" => "RSK4523",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 11
                ],
                [
                    "name" => "RSK4524",
                    "model" => "N/A",
                    "plate_number" => "RSK4524",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 11
                ],
                [
                    "name" => "RSK4525",
                    "model" => "N/A",
                    "plate_number" => "RSK4525",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 11
                ],
                [
                    "name" => "RSK4526",
                    "model" => "N/A",
                    "plate_number" => "RSK4526",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 11
                ],
                [
                    "name" => "RSK4527",
                    "model" => "N/A",
                    "plate_number" => "RSK4527",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 11
                ],
                [
                    "name" => "RSK4528",
                    "model" => "N/A",
                    "plate_number" => "RSK4528",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 11
                ],
                [
                    "name" => "RSK4529",
                    "model" => "N/A",
                    "plate_number" => "RSK4529",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 11
                ],
                [
                    "name" => "RSK4530",
                    "model" => "N/A",
                    "plate_number" => "RSK4530",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 11
                ],
                [
                    "name" => "RSK4531",
                    "model" => "N/A",
                    "plate_number" => "RSK4531",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 11
                ],
                [
                    "name" => "RSK4532",
                    "model" => "N/A",
                    "plate_number" => "RSK4532",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 11
                ],
                [
                    "name" => "RSK4533",
                    "model" => "N/A",
                    "plate_number" => "RSK4533",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 11
                ],
                [
                    "name" => "RSK4534",
                    "model" => "N/A",
                    "plate_number" => "RSK4534",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 11
                ],
                [
                    "name" => "RSK4535",
                    "model" => "N/A",
                    "plate_number" => "RSK4535",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 11
                ],
                [
                    "name" => "RSK4536",
                    "model" => "N/A",
                    "plate_number" => "RSK4536",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 11
                ],
                [
                    "name" => "RSK4537",
                    "model" => "N/A",
                    "plate_number" => "RSK4537",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 11
                ],
                [
                    "name" => "RSK4538",
                    "model" => "N/A",
                    "plate_number" => "RSK4538",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 11
                ],
                [
                    "name" => "RSK4539",
                    "model" => "N/A",
                    "plate_number" => "RSK4539",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 11
                ],
                [
                    "name" => "RSK4540",
                    "model" => "N/A",
                    "plate_number" => "RSK4540",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 11
                ],
                [
                    "name" => "RSK4541",
                    "model" => "N/A",
                    "plate_number" => "RSK4541",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 11
                ],
                [
                    "name" => "RSK4542",
                    "model" => "N/A",
                    "plate_number" => "RSK4542",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 11
                ],
                [
                    "name" => "RSK4543",
                    "model" => "N/A",
                    "plate_number" => "RSK4543",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 11
                ],
                [
                    "name" => "RSK4544",
                    "model" => "N/A",
                    "plate_number" => "RSK4544",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 11
                ],
                [
                    "name" => "RSK4545",
                    "model" => "N/A",
                    "plate_number" => "RSK4545",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 11
                ],
                [
                    "name" => "RSK4546",
                    "model" => "N/A",
                    "plate_number" => "RSK4546",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 11
                ],
                [
                    "name" => "RSK4547",
                    "model" => "N/A",
                    "plate_number" => "RSK4547",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 11
                ],
                [
                    "name" => "RSK4548",
                    "model" => "N/A",
                    "plate_number" => "RSK4548",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 11
                ],
                [
                    "name" => "RSK4549",
                    "model" => "N/A",
                    "plate_number" => "RSK4549",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 11
                ],
                [
                    "name" => "RSK4550",
                    "model" => "N/A",
                    "plate_number" => "RSK4550",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 11
                ],
                [
                    "name" => "",
                    "model" => "N/A",
                    "plate_number" => "",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 1
                ],
                [
                    "name" => "FKL4601",
                    "model" => "N/A",
                    "plate_number" => "FKL4601",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 12
                ],
                [
                    "name" => "FKL4602",
                    "model" => "N/A",
                    "plate_number" => "FKL4602",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 12
                ],
                [
                    "name" => "FKL5001",
                    "model" => "N/A",
                    "plate_number" => "FKL5001",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 13
                ],
                [
                    "name" => "FKL5002",
                    "model" => "N/A",
                    "plate_number" => "FKL5002",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 13
                ],
                [
                    "name" => "FKL3005",
                    "model" => "N/A",
                    "plate_number" => "FKL3005",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 10
                ],
                [
                    "name" => "FKL3006",
                    "model" => "N/A",
                    "plate_number" => "FKL3006",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 10
                ],
                [
                    "name" => "FKL3009",
                    "model" => "N/A",
                    "plate_number" => "FKL3009",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 10
                ],
                [
                    "name" => "FKL3010",
                    "model" => "N/A",
                    "plate_number" => "FKL3010",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 10
                ],
                [
                    "name" => "SWIPPER",
                    "model" => "N/A",
                    "plate_number" => "SWIPPER",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 1
                ],
                [
                    "name" => "Rhino 3000",
                    "model" => "N/A",
                    "plate_number" => "Rhino 3000",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 1
                ],
                [
                    "name" => 220,
                    "model" => "N/A",
                    "plate_number" => 220,
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 1
                ],
                [
                    "name" => "1204D",
                    "model" => "N/A",
                    "plate_number" => "1204D",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 1
                ],
                [
                    "name" => 1,
                    "model" => "N/A",
                    "plate_number" => 1,
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 1
                ],
                [
                    "name" => 2,
                    "model" => "N/A",
                    "plate_number" => 2,
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 1
                ],
                [
                    "name" => "BELL 1734",
                    "model" => "N/A",
                    "plate_number" => "BELL 1734",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 1
                ],
                [
                    "name" => "Manitou 280TJ",
                    "model" => "N/A",
                    "plate_number" => "Manitou 280TJ",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 1
                ],
                [
                    "name" => "MANITOU 02",
                    "model" => "N/A",
                    "plate_number" => "MANITOU 02",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 1
                ],
                [
                    "name" => "DIVERSO",
                    "model" => "N/A",
                    "plate_number" => "DIVERSO",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 1
                ],
                [
                    "name" => "JLB 1850",
                    "model" => "N/A",
                    "plate_number" => "JLB 1850",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 1
                ],
                [
                    "name" => "TEL0401",
                    "model" => "N/A",
                    "plate_number" => "TEL0401",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 14
                ],
                [
                    "name" => "TEL0402",
                    "model" => "N/A",
                    "plate_number" => "TEL0402",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 14
                ],
                [
                    "name" => "TEL0403",
                    "model" => "N/A",
                    "plate_number" => "TEL0403",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 14
                ],
                [
                    "name" => "WLD1701",
                    "model" => "N/A",
                    "plate_number" => "WLD1701",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 15
                ],
                [
                    "name" => "WLD1702",
                    "model" => "N/A",
                    "plate_number" => "WLD1702",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 15
                ],
                [
                    "name" => "WLD1703",
                    "model" => "N/A",
                    "plate_number" => "WLD1703",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 15
                ],
                [
                    "name" => "WLD1704",
                    "model" => "N/A",
                    "plate_number" => "WLD1704",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 15
                ],
                [
                    "name" => "WLD1705",
                    "model" => "N/A",
                    "plate_number" => "WLD1705",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 15
                ],
                [
                    "name" => "WLD1706",
                    "model" => "N/A",
                    "plate_number" => "WLD1706",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 15
                ],
                [
                    "name" => "WLD1707",
                    "model" => "N/A",
                    "plate_number" => "WLD1707",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 16
                ],
                [
                    "name" => "WLD2401",
                    "model" => "N/A",
                    "plate_number" => "WLD2401",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 17
                ],
                [
                    "name" => "WLD2402",
                    "model" => "N/A",
                    "plate_number" => "WLD2402",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 17
                ],
                [
                    "name" => "WLD2403",
                    "model" => "N/A",
                    "plate_number" => "WLD2403",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 17
                ],
                [
                    "name" => "WLD2404",
                    "model" => "N/A",
                    "plate_number" => "WLD2404",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 18
                ],
                [
                    "name" => "EXC1301",
                    "model" => "N/A",
                    "plate_number" => "EXC1301",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 19
                ],
                [
                    "name" => "EXC1302",
                    "model" => "N/A",
                    "plate_number" => "EXC1302",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 19
                ],
                [
                    "name" => "EXC1303",
                    "model" => "N/A",
                    "plate_number" => "EXC1303",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 19
                ],
                [
                    "name" => "EXC1304",
                    "model" => "N/A",
                    "plate_number" => "EXC1304",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 19
                ],
                [
                    "name" => "EXC1305",
                    "model" => "N/A",
                    "plate_number" => "EXC1305",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 19
                ],
                [
                    "name" => "EXC2101",
                    "model" => "N/A",
                    "plate_number" => "EXC2101",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 20
                ],
                [
                    "name" => "EXC2102",
                    "model" => "N/A",
                    "plate_number" => "EXC2102",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 20
                ],
                [
                    "name" => "EXC2103",
                    "model" => "N/A",
                    "plate_number" => "EXC2103",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 20
                ],
                [
                    "name" => "EXC2104",
                    "model" => "N/A",
                    "plate_number" => "EXC2104",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 20
                ],
                [
                    "name" => "EXC2105",
                    "model" => "N/A",
                    "plate_number" => "EXC2105",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 20
                ],
                [
                    "name" => "EXC2106",
                    "model" => "N/A",
                    "plate_number" => "EXC2106",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 20
                ],
                [
                    "name" => "EXC3701",
                    "model" => "N/A",
                    "plate_number" => "EXC3701",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 21
                ],
                [
                    "name" => "EXC3702",
                    "model" => "N/A",
                    "plate_number" => "EXC3702",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 21
                ],
                [
                    "name" => "EXC3301",
                    "model" => "N/A",
                    "plate_number" => "EXC3301",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 22
                ],
                [
                    "name" => "EXC3302",
                    "model" => "N/A",
                    "plate_number" => "EXC3302",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 22
                ],
                [
                    "name" => "Material handler 1",
                    "model" => "N/A",
                    "plate_number" => "Material handler 1",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 23
                ],
                [
                    "name" => "Material handler 2",
                    "model" => "N/A",
                    "plate_number" => "Material handler 2",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 23
                ],
                [
                    "name" => "FKL0326",
                    "model" => "N/A",
                    "plate_number" => "FKL0326",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 4
                ],
                [
                    "name" => "FKL0327",
                    "model" => "N/A",
                    "plate_number" => "FKL0327",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 4
                ],
                [
                    "name" => "AAQ 803 SF TIP4901",
                    "model" => "N/A",
                    "plate_number" => "AAQ 803 SF TIP4901",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 24
                ],
                [
                    "name" => "AAQ 804 SF TIP4902",
                    "model" => "N/A",
                    "plate_number" => "AAQ 804 SF TIP4902",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 24
                ],
                [
                    "name" => "AAQ 805 SF TIP4903",
                    "model" => "N/A",
                    "plate_number" => "AAQ 805 SF TIP4903",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 24
                ],
                [
                    "name" => "AAQ 806 SF TIP4904",
                    "model" => "N/A",
                    "plate_number" => "AAQ 806 SF TIP4904",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 24
                ],
                [
                    "name" => "AAY 855 SF TIP4905",
                    "model" => "N/A",
                    "plate_number" => "AAY 855 SF TIP4905",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 24
                ],
                [
                    "name" => "AAY 856 SF TIP4906",
                    "model" => "N/A",
                    "plate_number" => "AAY 856 SF TIP4906",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 24
                ],
                [
                    "name" => "AAY 857 SF TIP4907",
                    "model" => "N/A",
                    "plate_number" => "AAY 857 SF TIP4907",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 24
                ],
                [
                    "name" => "AAY 854 SF TIP4908",
                    "model" => "N/A",
                    "plate_number" => "AAY 854 SF TIP4908",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 24
                ],
                [
                    "name" => "AAR 014 SF",
                    "model" => "N/A",
                    "plate_number" => "AAR 014 SF",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 25
                ],
                [
                    "name" => "SLD0101",
                    "model" => "N/A",
                    "plate_number" => "SLD0101",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 26
                ],
                [
                    "name" => "SLD0102",
                    "model" => "N/A",
                    "plate_number" => "SLD0102",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 26
                ],
                [
                    "name" => 45746,
                    "model" => "N/A",
                    "plate_number" => 45746,
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 10
                ],
                [
                    "name" => "30-13",
                    "model" => "N/A",
                    "plate_number" => "30-13",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 27
                ],
                [
                    "name" => "30-14",
                    "model" => "N/A",
                    "plate_number" => "30-14",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 27
                ],
                [
                    "name" => "30-15",
                    "model" => "N/A",
                    "plate_number" => "30-15",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 27
                ],
                [
                    "name" => "30-16",
                    "model" => "N/A",
                    "plate_number" => "30-16",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 27
                ],
                [
                    "name" => "30-17",
                    "model" => "N/A",
                    "plate_number" => "30-17",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 27
                ],
                [
                    "name" => "30-18",
                    "model" => "N/A",
                    "plate_number" => "30-18",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 27
                ],
                [
                    "name" => "30-19",
                    "model" => "N/A",
                    "plate_number" => "30-19",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 27
                ],
                [
                    "name" => "30-20",
                    "model" => "N/A",
                    "plate_number" => "30-20",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 27
                ],
                [
                    "name" => "30-21",
                    "model" => "N/A",
                    "plate_number" => "30-21",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 27
                ],
                [
                    "name" => "30-22",
                    "model" => "N/A",
                    "plate_number" => "30-22",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 27
                ],
                [
                    "name" => "30-23",
                    "model" => "N/A",
                    "plate_number" => "30-23",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 27
                ],
                [
                    "name" => "30-24",
                    "model" => "N/A",
                    "plate_number" => "30-24",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 27
                ],
                [
                    "name" => "30-25",
                    "model" => "N/A",
                    "plate_number" => "30-25",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 27
                ],
                [
                    "name" => "30-26",
                    "model" => "N/A",
                    "plate_number" => "30-26",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 27
                ],
                [
                    "name" => "30-27",
                    "model" => "N/A",
                    "plate_number" => "30-27",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 27
                ],
                [
                    "name" => "60-10",
                    "model" => "N/A",
                    "plate_number" => "60-10",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 27
                ],
                [
                    "name" => "60-04",
                    "model" => "N/A",
                    "plate_number" => "60-04",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 28
                ],
                [
                    "name" => "60-06",
                    "model" => "N/A",
                    "plate_number" => "60-06",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 28
                ],
                [
                    "name" => "60-08",
                    "model" => "N/A",
                    "plate_number" => "60-08",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 28
                ],
                [
                    "name" => "60-11",
                    "model" => "N/A",
                    "plate_number" => "60-11",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 29
                ],
                [
                    "name" => "60-12",
                    "model" => "N/A",
                    "plate_number" => "60-12",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 29
                ],
                [
                    "name" => "60-13",
                    "model" => "N/A",
                    "plate_number" => "60-13",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 29
                ],
                [
                    "name" => "69-14",
                    "model" => "N/A",
                    "plate_number" => "69-14",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 29
                ],
                [
                    "name" => "60-16",
                    "model" => "N/A",
                    "plate_number" => "60-16",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 29
                ],
                [
                    "name" => "60-18",
                    "model" => "N/A",
                    "plate_number" => "60-18",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 28
                ],
                [
                    "name" => "60-19",
                    "model" => "N/A",
                    "plate_number" => "60-19",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 28
                ],
                [
                    "name" => "60-20",
                    "model" => "N/A",
                    "plate_number" => "60-20",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 28
                ],
                [
                    "name" => "60-21",
                    "model" => "N/A",
                    "plate_number" => "60-21",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 28
                ],
                [
                    "name" => "60-22",
                    "model" => "N/A",
                    "plate_number" => "60-22",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 28
                ],
                [
                    "name" => "60-23",
                    "model" => "N/A",
                    "plate_number" => "60-23",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 28
                ],
                [
                    "name" => "60-24",
                    "model" => "N/A",
                    "plate_number" => "60-24",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 29
                ],
                [
                    "name" => "60-25",
                    "model" => "N/A",
                    "plate_number" => "60-25",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 29
                ],
                [
                    "name" => "60-26",
                    "model" => "N/A",
                    "plate_number" => "60-26",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 29
                ],
                [
                    "name" => "60-27",
                    "model" => "N/A",
                    "plate_number" => "60-27",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 29
                ],
                [
                    "name" => "60-28",
                    "model" => "N/A",
                    "plate_number" => "60-28",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 29
                ],
                [
                    "name" => "60-29",
                    "model" => "N/A",
                    "plate_number" => "60-29",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 29
                ],
                [
                    "name" => "60-30",
                    "model" => "N/A",
                    "plate_number" => "60-30",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 29
                ],
                [
                    "name" => "60-31",
                    "model" => "N/A",
                    "plate_number" => "60-31",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 29
                ],
                [
                    "name" => "60-32",
                    "model" => "N/A",
                    "plate_number" => "60-32",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 29
                ],
                [
                    "name" => "60-33",
                    "model" => "N/A",
                    "plate_number" => "60-33",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 29
                ],
                [
                    "name" => "60-34",
                    "model" => "N/A",
                    "plate_number" => "60-34",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 29
                ],
                [
                    "name" => "60-35",
                    "model" => "N/A",
                    "plate_number" => "60-35",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 29
                ],
                [
                    "name" => "60-36",
                    "model" => "N/A",
                    "plate_number" => "60-36",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 29
                ],
                [
                    "name" => "60-37",
                    "model" => "N/A",
                    "plate_number" => "60-37",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 29
                ],
                [
                    "name" => "60-38",
                    "model" => "N/A",
                    "plate_number" => "60-38",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 29
                ],
                [
                    "name" => "60-39",
                    "model" => "N/A",
                    "plate_number" => "60-39",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 29
                ],
                [
                    "name" => "60-40",
                    "model" => "N/A",
                    "plate_number" => "60-40",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 28
                ],
                [
                    "name" => "60-41",
                    "model" => "N/A",
                    "plate_number" => "60-41",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 28
                ],
                [
                    "name" => "60-42",
                    "model" => "N/A",
                    "plate_number" => "60-42",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 28
                ],
                [
                    "name" => "60-43",
                    "model" => "N/A",
                    "plate_number" => "60-43",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 28
                ],
                [
                    "name" => "60-44",
                    "model" => "N/A",
                    "plate_number" => "60-44",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 30
                ],
                [
                    "name" => "60-45",
                    "model" => "N/A",
                    "plate_number" => "60-45",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 30
                ],
                [
                    "name" => "60-46",
                    "model" => "N/A",
                    "plate_number" => "60-46",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 30
                ],
                [
                    "name" => "60-47",
                    "model" => "N/A",
                    "plate_number" => "60-47",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 30
                ],
                [
                    "name" => "80-02",
                    "model" => "N/A",
                    "plate_number" => "80-02",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 31
                ],
                [
                    "name" => "80-08",
                    "model" => "N/A",
                    "plate_number" => "80-08",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 31
                ],
                [
                    "name" => "80-09",
                    "model" => "N/A",
                    "plate_number" => "80-09",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 31
                ],
                [
                    "name" => "80-10",
                    "model" => "N/A",
                    "plate_number" => "80-10",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 31
                ],
                [
                    "name" => "80-11",
                    "model" => "N/A",
                    "plate_number" => "80-11",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 31
                ],
                [
                    "name" => "80-12",
                    "model" => "N/A",
                    "plate_number" => "80-12",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 31
                ],
                [
                    "name" => "80-13",
                    "model" => "N/A",
                    "plate_number" => "80-13",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 31
                ],
                [
                    "name" => "80-14",
                    "model" => "N/A",
                    "plate_number" => "80-14",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 31
                ],
                [
                    "name" => "80-15",
                    "model" => "N/A",
                    "plate_number" => "80-15",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 31
                ],
                [
                    "name" => "80-16",
                    "model" => "N/A",
                    "plate_number" => "80-16",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 31
                ],
                [
                    "name" => "80-17",
                    "model" => "N/A",
                    "plate_number" => "80-17",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 31
                ],
                [
                    "name" => "100-01",
                    "model" => "N/A",
                    "plate_number" => "100-01",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 32
                ],
                [
                    "name" => "100-02",
                    "model" => "N/A",
                    "plate_number" => "100-02",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 32
                ],
                [
                    "name" => "100-03",
                    "model" => "N/A",
                    "plate_number" => "100-03",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 32
                ],
                [
                    "name" => "100-04",
                    "model" => "N/A",
                    "plate_number" => "100-04",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 32
                ],
                [
                    "name" => "100-05",
                    "model" => "N/A",
                    "plate_number" => "100-05",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 32
                ],
                [
                    "name" => "100-06",
                    "model" => "N/A",
                    "plate_number" => "100-06",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 32
                ],
                [
                    "name" => "100-07",
                    "model" => "N/A",
                    "plate_number" => "100-07",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 32
                ],
                [
                    "name" => "100-08",
                    "model" => "N/A",
                    "plate_number" => "100-08",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 32
                ],
                [
                    "name" => "100-09",
                    "model" => "N/A",
                    "plate_number" => "100-09",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 32
                ],
                [
                    "name" => "100-10",
                    "model" => "N/A",
                    "plate_number" => "100-10",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 32
                ],
                [
                    "name" => "100-11",
                    "model" => "N/A",
                    "plate_number" => "100-11",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 32
                ],
                [
                    "name" => "100-12",
                    "model" => "N/A",
                    "plate_number" => "100-12",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 32
                ],
                [
                    "name" => "B1",
                    "model" => "N/A",
                    "plate_number" => "B1",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 33
                ],
                [
                    "name" => "ADD 353 MP",
                    "model" => "N/A",
                    "plate_number" => "ADD 353 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "ADH 024 MP",
                    "model" => "N/A",
                    "plate_number" => "ADH 024 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "ADH 071 MP",
                    "model" => "N/A",
                    "plate_number" => "ADH 071 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "ADH 077 MP",
                    "model" => "N/A",
                    "plate_number" => "ADH 077 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "ADH 084 MP",
                    "model" => "N/A",
                    "plate_number" => "ADH 084 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "ADH 423 MP",
                    "model" => "N/A",
                    "plate_number" => "ADH 423 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "ADH 496 MP",
                    "model" => "N/A",
                    "plate_number" => "ADH 496 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "ADQ 052 MP",
                    "model" => "N/A",
                    "plate_number" => "ADQ 052 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "ADQ 057 MP",
                    "model" => "N/A",
                    "plate_number" => "ADQ 057 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "ADQ 061 MP",
                    "model" => "N/A",
                    "plate_number" => "ADQ 061 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "ADQ 065 MP",
                    "model" => "N/A",
                    "plate_number" => "ADQ 065 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "ADQ 066 MP",
                    "model" => "N/A",
                    "plate_number" => "ADQ 066 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "ADQ 232 MP",
                    "model" => "N/A",
                    "plate_number" => "ADQ 232 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "ADQ 455 MP",
                    "model" => "N/A",
                    "plate_number" => "ADQ 455 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "ADW 690 MP",
                    "model" => "N/A",
                    "plate_number" => "ADW 690 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AEA 458 MP",
                    "model" => "N/A",
                    "plate_number" => "AEA 458 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AEE 012 MP",
                    "model" => "N/A",
                    "plate_number" => "AEE 012 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AEG 330 MP",
                    "model" => "N/A",
                    "plate_number" => "AEG 330 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AEW 295 MP",
                    "model" => "N/A",
                    "plate_number" => "AEW 295 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AAA 530 MN",
                    "model" => "N/A",
                    "plate_number" => "AAA 530 MN",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AAD-306-SF",
                    "model" => "N/A",
                    "plate_number" => "AAD-306-SF",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "MBH-26-40",
                    "model" => "N/A",
                    "plate_number" => "MBH-26-40",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "MBH-31-75",
                    "model" => "N/A",
                    "plate_number" => "MBH-31-75",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "MBP-34-43",
                    "model" => "N/A",
                    "plate_number" => "MBP-34-43",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "MBP-42-57",
                    "model" => "N/A",
                    "plate_number" => "MBP-42-57",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "MBP-53-43",
                    "model" => "N/A",
                    "plate_number" => "MBP-53-43",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "MBP-62-11",
                    "model" => "N/A",
                    "plate_number" => "MBP-62-11",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "MBP-66-37",
                    "model" => "N/A",
                    "plate_number" => "MBP-66-37",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "MMJ-58-09",
                    "model" => "N/A",
                    "plate_number" => "MMJ-58-09",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "MMM-67-29",
                    "model" => "N/A",
                    "plate_number" => "MMM-67-29",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "MMQ-92-00",
                    "model" => "N/A",
                    "plate_number" => "MMQ-92-00",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "MMR-18-18",
                    "model" => "N/A",
                    "plate_number" => "MMR-18-18",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AEK 665 MP",
                    "model" => "N/A",
                    "plate_number" => "AEK 665 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AEK 544 MP",
                    "model" => "N/A",
                    "plate_number" => "AEK 544 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AEW 729 MP",
                    "model" => "N/A",
                    "plate_number" => "AEW 729 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AEW 887 MP",
                    "model" => "N/A",
                    "plate_number" => "AEW 887 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AEY 628 MP",
                    "model" => "N/A",
                    "plate_number" => "AEY 628 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AEY 874 MP",
                    "model" => "N/A",
                    "plate_number" => "AEY 874 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AFE 970 MP",
                    "model" => "N/A",
                    "plate_number" => "AFE 970 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AEY 587 MP",
                    "model" => "N/A",
                    "plate_number" => "AEY 587 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AEY 102 MP",
                    "model" => "N/A",
                    "plate_number" => "AEY 102 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AEI 607 MP",
                    "model" => "N/A",
                    "plate_number" => "AEI 607 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AFG 692 MP",
                    "model" => "N/A",
                    "plate_number" => "AFG 692 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AFF 019 MP",
                    "model" => "N/A",
                    "plate_number" => "AFF 019 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AAG 879 SF",
                    "model" => "N/A",
                    "plate_number" => "AAG 879 SF",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AAG 880 SF",
                    "model" => "N/A",
                    "plate_number" => "AAG 880 SF",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AFK 814 MP",
                    "model" => "N/A",
                    "plate_number" => "AFK 814 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AEW 455 MP",
                    "model" => "N/A",
                    "plate_number" => "AEW 455 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AEW 673 MP",
                    "model" => "N/A",
                    "plate_number" => "AEW 673 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AFR 466 MC",
                    "model" => "N/A",
                    "plate_number" => "AFR 466 MC",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AFR 468 MC",
                    "model" => "N/A",
                    "plate_number" => "AFR 468 MC",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AFN 287 MP",
                    "model" => "N/A",
                    "plate_number" => "AFN 287 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AFH 726 MP",
                    "model" => "N/A",
                    "plate_number" => "AFH 726 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AFL 399 MP",
                    "model" => "N/A",
                    "plate_number" => "AFL 399 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AFM 979 MP",
                    "model" => "N/A",
                    "plate_number" => "AFM 979 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AFE 964 MP",
                    "model" => "N/A",
                    "plate_number" => "AFE 964 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AEW 839 MP",
                    "model" => "N/A",
                    "plate_number" => "AEW 839 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AFG 597 MP",
                    "model" => "N/A",
                    "plate_number" => "AFG 597 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AFQ 908 MP",
                    "model" => "N/A",
                    "plate_number" => "AFQ 908 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AFF 470 MP",
                    "model" => "N/A",
                    "plate_number" => "AFF 470 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AEI 862 MP",
                    "model" => "N/A",
                    "plate_number" => "AEI 862 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AFH 034 MP",
                    "model" => "N/A",
                    "plate_number" => "AFH 034 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AFU 897 MP",
                    "model" => "N/A",
                    "plate_number" => "AFU 897 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AGP 203 MP",
                    "model" => "N/A",
                    "plate_number" => "AGP 203 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AGP 327 MP",
                    "model" => "N/A",
                    "plate_number" => "AGP 327 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AGS 144 MP",
                    "model" => "N/A",
                    "plate_number" => "AGS 144 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AGS 911 MP",
                    "model" => "N/A",
                    "plate_number" => "AGS 911 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AGS 913 MP",
                    "model" => "N/A",
                    "plate_number" => "AGS 913 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AGS 914 MP",
                    "model" => "N/A",
                    "plate_number" => "AGS 914 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AGS 915 MP",
                    "model" => "N/A",
                    "plate_number" => "AGS 915 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AGS 917 MP",
                    "model" => "N/A",
                    "plate_number" => "AGS 917 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AGS 956 MP",
                    "model" => "N/A",
                    "plate_number" => "AGS 956 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AGS 957 MP",
                    "model" => "N/A",
                    "plate_number" => "AGS 957 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AGS 958 MP",
                    "model" => "N/A",
                    "plate_number" => "AGS 958 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AGS 960 MP",
                    "model" => "N/A",
                    "plate_number" => "AGS 960 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AGS 961 MP",
                    "model" => "N/A",
                    "plate_number" => "AGS 961 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AGS 963 MP",
                    "model" => "N/A",
                    "plate_number" => "AGS 963 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AGS 965 MP",
                    "model" => "N/A",
                    "plate_number" => "AGS 965 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AIL 266 MC",
                    "model" => "N/A",
                    "plate_number" => "AIL 266 MC",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AIL 270 MC",
                    "model" => "N/A",
                    "plate_number" => "AIL 270 MC",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AIL 881 MC",
                    "model" => "N/A",
                    "plate_number" => "AIL 881 MC",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AIL 989 MC",
                    "model" => "N/A",
                    "plate_number" => "AIL 989 MC",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AHK 949 MP",
                    "model" => "N/A",
                    "plate_number" => "AHK 949 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AHL 135 MP",
                    "model" => "N/A",
                    "plate_number" => "AHL 135 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AHL 136 MP",
                    "model" => "N/A",
                    "plate_number" => "AHL 136 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AJI 760 MP",
                    "model" => "N/A",
                    "plate_number" => "AJI 760 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AJI 767 MC",
                    "model" => "N/A",
                    "plate_number" => "AJI 767 MC",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AJP 552 MC",
                    "model" => "N/A",
                    "plate_number" => "AJP 552 MC",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AJR 824 MC",
                    "model" => "N/A",
                    "plate_number" => "AJR 824 MC",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AJS 062 MC",
                    "model" => "N/A",
                    "plate_number" => "AJS 062 MC",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AJX 759 MC",
                    "model" => "N/A",
                    "plate_number" => "AJX 759 MC",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AAT 552 SF",
                    "model" => "N/A",
                    "plate_number" => "AAT 552 SF",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AAT 551 SF",
                    "model" => "N/A",
                    "plate_number" => "AAT 551 SF",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AEC 674 MP",
                    "model" => "N/A",
                    "plate_number" => "AEC 674 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AFE 093 MC",
                    "model" => "N/A",
                    "plate_number" => "AFE 093 MC",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AFI 607 MP",
                    "model" => "N/A",
                    "plate_number" => "AFI 607 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AGS 144 MP",
                    "model" => "N/A",
                    "plate_number" => "AGS 144 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AGS 911 MP",
                    "model" => "N/A",
                    "plate_number" => "AGS 911 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AGY 668 MP",
                    "model" => "N/A",
                    "plate_number" => "AGY 668 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AHB 393 MP",
                    "model" => "N/A",
                    "plate_number" => "AHB 393 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AHE 501 MP",
                    "model" => "N/A",
                    "plate_number" => "AHE 501 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AHE 503 MP",
                    "model" => "N/A",
                    "plate_number" => "AHE 503 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AHE 504 MP",
                    "model" => "N/A",
                    "plate_number" => "AHE 504 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AHE 559 MP",
                    "model" => "N/A",
                    "plate_number" => "AHE 559 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AHE 578 MP",
                    "model" => "N/A",
                    "plate_number" => "AHE 578 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AHJ 191 MP",
                    "model" => "N/A",
                    "plate_number" => "AHJ 191 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AHJ 226 MP",
                    "model" => "N/A",
                    "plate_number" => "AHJ 226 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AHJ 227 MP",
                    "model" => "N/A",
                    "plate_number" => "AHJ 227 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AHO 181 MP",
                    "model" => "N/A",
                    "plate_number" => "AHO 181 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AJQ 761 MC",
                    "model" => "N/A",
                    "plate_number" => "AJQ 761 MC",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "CMB 1151/18",
                    "model" => "N/A",
                    "plate_number" => "CMB 1151/18",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 35
                ],
                [
                    "name" => "CMB 1152/18",
                    "model" => "N/A",
                    "plate_number" => "CMB 1152/18",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 35
                ],
                [
                    "name" => "CMB/1489/17",
                    "model" => "N/A",
                    "plate_number" => "CMB/1489/17",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 35
                ],
                [
                    "name" => "CMB/196/09",
                    "model" => "N/A",
                    "plate_number" => "CMB/196/09",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 35
                ],
                [
                    "name" => "MAC 03-88",
                    "model" => "N/A",
                    "plate_number" => "MAC 03-88",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 35
                ],
                [
                    "name" => "MBH 26-40",
                    "model" => "N/A",
                    "plate_number" => "MBH 26-40",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "MBP 34-43",
                    "model" => "N/A",
                    "plate_number" => "MBP 34-43",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "MBP 62- 11",
                    "model" => "N/A",
                    "plate_number" => "MBP 62- 11",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "MLU 88 23",
                    "model" => "N/A",
                    "plate_number" => "MLU 88 23",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "MLU 88-51",
                    "model" => "N/A",
                    "plate_number" => "MLU 88-51",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 35
                ],
                [
                    "name" => "MLU 88-90",
                    "model" => "N/A",
                    "plate_number" => "MLU 88-90",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 35
                ],
                [
                    "name" => "MLU-96-13",
                    "model" => "N/A",
                    "plate_number" => "MLU-96-13",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 35
                ],
                [
                    "name" => "MMM 67-29",
                    "model" => "N/A",
                    "plate_number" => "MMM 67-29",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AAP 666 SF",
                    "model" => "N/A",
                    "plate_number" => "AAP 666 SF",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 36
                ],
                [
                    "name" => "ALC 467 MC",
                    "model" => "N/A",
                    "plate_number" => "ALC 467 MC",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AII 472 MP",
                    "model" => "N/A",
                    "plate_number" => "AII 472 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AIJ 738 MP",
                    "model" => "N/A",
                    "plate_number" => "AIJ 738 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AIL 367 MP",
                    "model" => "N/A",
                    "plate_number" => "AIL 367 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "ALP 552 MC",
                    "model" => "N/A",
                    "plate_number" => "ALP 552 MC",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 1
                ],
                [
                    "name" => "AIL 990 MP",
                    "model" => "N/A",
                    "plate_number" => "AIL 990 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 1
                ],
                [
                    "name" => "AIJ 872 MP",
                    "model" => "N/A",
                    "plate_number" => "AIJ 872 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 1
                ],
                [
                    "name" => "AIN 101 MP",
                    "model" => "N/A",
                    "plate_number" => "AIN 101 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AIN 116 MP",
                    "model" => "N/A",
                    "plate_number" => "AIN 116 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AIL 952 MP",
                    "model" => "N/A",
                    "plate_number" => "AIL 952 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AIL 692 MP",
                    "model" => "N/A",
                    "plate_number" => "AIL 692 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AIN 634 MP",
                    "model" => "N/A",
                    "plate_number" => "AIN 634 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AIO 385 MP",
                    "model" => "N/A",
                    "plate_number" => "AIO 385 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AIN 409 MP",
                    "model" => "N/A",
                    "plate_number" => "AIN 409 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "ALT 575MC",
                    "model" => "N/A",
                    "plate_number" => "ALT 575MC",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AIS 010 MP",
                    "model" => "N/A",
                    "plate_number" => "AIS 010 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AIV 809 MP",
                    "model" => "N/A",
                    "plate_number" => "AIV 809 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AIV 322 MP",
                    "model" => "N/A",
                    "plate_number" => "AIV 322 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AIU 741 MP",
                    "model" => "N/A",
                    "plate_number" => "AIU 741 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AIU 743 MP",
                    "model" => "N/A",
                    "plate_number" => "AIU 743 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AIS 007 MP",
                    "model" => "N/A",
                    "plate_number" => "AIS 007 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AME 398 MC",
                    "model" => "N/A",
                    "plate_number" => "AME 398 MC",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AMD 656 MC",
                    "model" => "N/A",
                    "plate_number" => "AMD 656 MC",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "ALX 062 MC",
                    "model" => "N/A",
                    "plate_number" => "ALX 062 MC",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AMD 859 MC",
                    "model" => "N/A",
                    "plate_number" => "AMD 859 MC",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AMI 887 MC",
                    "model" => "N/A",
                    "plate_number" => "AMI 887 MC",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AMD 835 MC",
                    "model" => "N/A",
                    "plate_number" => "AMD 835 MC",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AME 347 MC",
                    "model" => "N/A",
                    "plate_number" => "AME 347 MC",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AME 379 MC",
                    "model" => "N/A",
                    "plate_number" => "AME 379 MC",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AJC 121 MP",
                    "model" => "N/A",
                    "plate_number" => "AJC 121 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 34
                ],
                [
                    "name" => "AMI 704 MC",
                    "model" => "N/A",
                    "plate_number" => "AMI 704 MC",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 1
                ],
                [
                    "name" => "AJG 661 MP",
                    "model" => "N/A",
                    "plate_number" => "AJG 661 MP",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 1
                ],
                [
                    "name" => "CE1",
                    "model" => "N/A",
                    "plate_number" => "CE1",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 37
                ],
                [
                    "name" => "CE2",
                    "model" => "N/A",
                    "plate_number" => "CE2",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 37
                ],
                [
                    "name" => "CE3",
                    "model" => "N/A",
                    "plate_number" => "CE3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 37
                ],
                [
                    "name" => "CE4",
                    "model" => "N/A",
                    "plate_number" => "CE4",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 37
                ],
                [
                    "name" => "CE5",
                    "model" => "N/A",
                    "plate_number" => "CE5",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 37
                ],
                [
                    "name" => "CE6",
                    "model" => "N/A",
                    "plate_number" => "CE6",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 37
                ],
                [
                    "name" => "CE7",
                    "model" => "N/A",
                    "plate_number" => "CE7",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 37
                ],
                [
                    "name" => "D",
                    "model" => "N/A",
                    "plate_number" => "D",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 1
                ],
                [
                    "name" => "ANSALDO CRANE 1",
                    "model" => "N/A",
                    "plate_number" => "ANSALDO CRANE 1",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 1
                ],
                [
                    "name" => "KONE CRANE 2",
                    "model" => "N/A",
                    "plate_number" => "KONE CRANE 2",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 1
                ],
                [
                    "name" => "KONE CRANE 3",
                    "model" => "N/A",
                    "plate_number" => "KONE CRANE 3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 1
                ],
                [
                    "name" => "ANSALDO CRANE 4",
                    "model" => "N/A",
                    "plate_number" => "ANSALDO CRANE 4",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 1
                ],
                [
                    "name" => "KONE CRANE RAIL 5",
                    "model" => "N/A",
                    "plate_number" => "KONE CRANE RAIL 5",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 1
                ],
                [
                    "name" => "TEREX 4125 01",
                    "model" => "N/A",
                    "plate_number" => "TEREX 4125 01",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 38
                ],
                [
                    "name" => "TEREX 4126 02",
                    "model" => "N/A",
                    "plate_number" => "TEREX 4126 02",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 38
                ],
                [
                    "name" => "BROMA S2",
                    "model" => "N/A",
                    "plate_number" => "BROMA S2",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 39
                ],
                [
                    "name" => "BROMA S4",
                    "model" => "N/A",
                    "plate_number" => "BROMA S4",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 39
                ],
                [
                    "name" => "BROMA S5",
                    "model" => "N/A",
                    "plate_number" => "BROMA S5",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 39
                ],
                [
                    "name" => "BROMA S6",
                    "model" => "N/A",
                    "plate_number" => "BROMA S6",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 39
                ],
                [
                    "name" => "BROMA S7",
                    "model" => "N/A",
                    "plate_number" => "BROMA S7",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 39
                ],
                [
                    "name" => "BROMA S8",
                    "model" => "N/A",
                    "plate_number" => "BROMA S8",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 39
                ],
                [
                    "name" => "RAM S11",
                    "model" => "N/A",
                    "plate_number" => "RAM S11",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 39
                ],
                [
                    "name" => "RAM S12",
                    "model" => "N/A",
                    "plate_number" => "RAM S12",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 39
                ],
                [
                    "name" => "RAM S13",
                    "model" => "N/A",
                    "plate_number" => "RAM S13",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 39
                ],
                [
                    "name" => "RAM S14",
                    "model" => "N/A",
                    "plate_number" => "RAM S14",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 39
                ],
                [
                    "name" => "RAM S15",
                    "model" => "N/A",
                    "plate_number" => "RAM S15",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 39
                ],
                [
                    "name" => "RAM S16",
                    "model" => "N/A",
                    "plate_number" => "RAM S16",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 39
                ],
                [
                    "name" => "RAM S17",
                    "model" => "N/A",
                    "plate_number" => "RAM S17",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 39
                ],
                [
                    "name" => "RAM S18",
                    "model" => "N/A",
                    "plate_number" => "RAM S18",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 39
                ],
                [
                    "name" => "GA05-03",
                    "model" => "N/A",
                    "plate_number" => "GA05-03",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 40
                ],
                [
                    "name" => "GA05-04",
                    "model" => "N/A",
                    "plate_number" => "GA05-04",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 40
                ],
                [
                    "name" => "GA05-05",
                    "model" => "N/A",
                    "plate_number" => "GA05-05",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 40
                ],
                [
                    "name" => "GA05-06",
                    "model" => "N/A",
                    "plate_number" => "GA05-06",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 40
                ],
                [
                    "name" => "GB08-05",
                    "model" => "N/A",
                    "plate_number" => "GB08-05",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 41
                ],
                [
                    "name" => "GB08-06",
                    "model" => "N/A",
                    "plate_number" => "GB08-06",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 41
                ],
                [
                    "name" => "GB10-01",
                    "model" => "N/A",
                    "plate_number" => "GB10-01",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 42
                ],
                [
                    "name" => "GB10-02",
                    "model" => "N/A",
                    "plate_number" => "GB10-02",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 42
                ],
                [
                    "name" => "GB10-03",
                    "model" => "N/A",
                    "plate_number" => "GB10-03",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 42
                ],
                [
                    "name" => "GB10-04",
                    "model" => "N/A",
                    "plate_number" => "GB10-04",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 42
                ],
                [
                    "name" => "GB10-05",
                    "model" => "N/A",
                    "plate_number" => "GB10-05",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 42
                ],
                [
                    "name" => "GB10-06",
                    "model" => "N/A",
                    "plate_number" => "GB10-06",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 42
                ],
                [
                    "name" => "GB12-02",
                    "model" => "N/A",
                    "plate_number" => "GB12-02",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 43
                ],
                [
                    "name" => "GB12-03",
                    "model" => "N/A",
                    "plate_number" => "GB12-03",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 43
                ],
                [
                    "name" => "GB12-06",
                    "model" => "N/A",
                    "plate_number" => "GB12-06",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 43
                ],
                [
                    "name" => "GB12-07",
                    "model" => "N/A",
                    "plate_number" => "GB12-07",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 43
                ],
                [
                    "name" => "GB12-04",
                    "model" => "N/A",
                    "plate_number" => "GB12-04",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 43
                ],
                [
                    "name" => "GB12-05",
                    "model" => "N/A",
                    "plate_number" => "GB12-05",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 43
                ],
                [
                    "name" => "GB14-01",
                    "model" => "N/A",
                    "plate_number" => "GB14-01",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 44
                ],
                [
                    "name" => "GB14-02",
                    "model" => "N/A",
                    "plate_number" => "GB14-02",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 44
                ],
                [
                    "name" => "GB14-03",
                    "model" => "N/A",
                    "plate_number" => "GB14-03",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 44
                ],
                [
                    "name" => "NECU 1042",
                    "model" => "N/A",
                    "plate_number" => "NECU 1042",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 45
                ],
                [
                    "name" => "NECU 1040",
                    "model" => "N/A",
                    "plate_number" => "NECU 1040",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 45
                ],
                [
                    "name" => "NECU 001230/0",
                    "model" => "N/A",
                    "plate_number" => "NECU 001230/0",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 45
                ],
                [
                    "name" => "NECU 001232/0",
                    "model" => "N/A",
                    "plate_number" => "NECU 001232/0",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 45
                ],
                [
                    "name" => "NECU 001234/1",
                    "model" => "N/A",
                    "plate_number" => "NECU 001234/1",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 45
                ],
                [
                    "name" => "NECU 001236/2",
                    "model" => "N/A",
                    "plate_number" => "NECU 001236/2",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 45
                ],
                [
                    "name" => "New Long",
                    "model" => "N/A",
                    "plate_number" => "New Long",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 1
                ],
                [
                    "name" => "C1",
                    "model" => "N/A",
                    "plate_number" => "C1",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 46
                ],
                [
                    "name" => "C2",
                    "model" => "N/A",
                    "plate_number" => "C2",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 46
                ],
                [
                    "name" => "C3",
                    "model" => "N/A",
                    "plate_number" => "C3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 46
                ],
                [
                    "name" => "C4",
                    "model" => "N/A",
                    "plate_number" => "C4",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 46
                ],
                [
                    "name" => "C8",
                    "model" => "N/A",
                    "plate_number" => "C8",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 46
                ],
                [
                    "name" => "C9",
                    "model" => "N/A",
                    "plate_number" => "C9",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 46
                ],
                [
                    "name" => "CS1",
                    "model" => "N/A",
                    "plate_number" => "CS1",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 47
                ],
                [
                    "name" => "CD9",
                    "model" => "N/A",
                    "plate_number" => "CD9",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 48
                ],
                [
                    "name" => "HC1",
                    "model" => "N/A",
                    "plate_number" => "HC1",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 49
                ],
                [
                    "name" => "HC2",
                    "model" => "N/A",
                    "plate_number" => "HC2",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 49
                ],
                [
                    "name" => "HC3",
                    "model" => "N/A",
                    "plate_number" => "HC3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 49
                ],
                [
                    "name" => "F.H5",
                    "model" => "N/A",
                    "plate_number" => "F.H5",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 1
                ],
                [
                    "name" => "F.H6",
                    "model" => "N/A",
                    "plate_number" => "F.H6",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 1
                ],
                [
                    "name" => "H8",
                    "model" => "N/A",
                    "plate_number" => "H8",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 50
                ],
                [
                    "name" => "H9",
                    "model" => "N/A",
                    "plate_number" => "H9",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 50
                ],
                [
                    "name" => "H10",
                    "model" => "N/A",
                    "plate_number" => "H10",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 50
                ],
                [
                    "name" => "H11",
                    "model" => "N/A",
                    "plate_number" => "H11",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 50
                ],
                [
                    "name" => "H12",
                    "model" => "N/A",
                    "plate_number" => "H12",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 50
                ],
                [
                    "name" => "H13",
                    "model" => "N/A",
                    "plate_number" => "H13",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 50
                ],
                [
                    "name" => "H14",
                    "model" => "N/A",
                    "plate_number" => "H14",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 50
                ],
                [
                    "name" => "H15",
                    "model" => "N/A",
                    "plate_number" => "H15",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 50
                ],
                [
                    "name" => "H16",
                    "model" => "N/A",
                    "plate_number" => "H16",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 51
                ],
                [
                    "name" => "H17",
                    "model" => "N/A",
                    "plate_number" => "H17",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 51
                ],
                [
                    "name" => "H18",
                    "model" => "N/A",
                    "plate_number" => "H18",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 51
                ],
                [
                    "name" => "H19",
                    "model" => "N/A",
                    "plate_number" => "H19",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 51
                ],
                [
                    "name" => "DB 001",
                    "model" => "N/A",
                    "plate_number" => "DB 001",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 52
                ],
                [
                    "name" => "DB 002",
                    "model" => "N/A",
                    "plate_number" => "DB 002",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 52
                ],
                [
                    "name" => "SVIA1",
                    "model" => "N/A",
                    "plate_number" => "SVIA1",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 53
                ],
                [
                    "name" => "SVIA2",
                    "model" => "N/A",
                    "plate_number" => "SVIA2",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 53
                ],
                [
                    "name" => "SVIA3",
                    "model" => "N/A",
                    "plate_number" => "SVIA3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 53
                ],
                [
                    "name" => "SPM1",
                    "model" => "N/A",
                    "plate_number" => "SPM1",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 54
                ],
                [
                    "name" => "SPM2",
                    "model" => "N/A",
                    "plate_number" => "SPM2",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 54
                ],
                [
                    "name" => "TCM1",
                    "model" => "N/A",
                    "plate_number" => "TCM1",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 55
                ],
                [
                    "name" => "TCM2",
                    "model" => "N/A",
                    "plate_number" => "TCM2",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 55
                ],
                [
                    "name" => "SK4/ 45T",
                    "model" => "N/A",
                    "plate_number" => "SK4/ 45T",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 55
                ],
                [
                    "name" => "SBL1/ 80T",
                    "model" => "N/A",
                    "plate_number" => "SBL1/ 80T",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 56
                ],
                [
                    "name" => "SPCOM 1",
                    "model" => "N/A",
                    "plate_number" => "SPCOM 1",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 57
                ],
                [
                    "name" => "SPB1",
                    "model" => "N/A",
                    "plate_number" => "SPB1",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 58
                ],
                [
                    "name" => "SPB2",
                    "model" => "N/A",
                    "plate_number" => "SPB2",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 58
                ],
                [
                    "name" => "SPB4",
                    "model" => "N/A",
                    "plate_number" => "SPB4",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 58
                ],
                [
                    "name" => "SPB1",
                    "model" => "N/A",
                    "plate_number" => "SPB1",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 59
                ],
                [
                    "name" => "SPB2",
                    "model" => "N/A",
                    "plate_number" => "SPB2",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 59
                ],
                [
                    "name" => "SPB3",
                    "model" => "N/A",
                    "plate_number" => "SPB3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 59
                ],
                [
                    "name" => "SPB1",
                    "model" => "N/A",
                    "plate_number" => "SPB1",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 60
                ],
                [
                    "name" => "SPB2",
                    "model" => "N/A",
                    "plate_number" => "SPB2",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 60
                ],
                [
                    "name" => "SPB3",
                    "model" => "N/A",
                    "plate_number" => "SPB3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 60
                ],
                [
                    "name" => "SPB4",
                    "model" => "N/A",
                    "plate_number" => "SPB4",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 60
                ],
                [
                    "name" => "SPB1",
                    "model" => "N/A",
                    "plate_number" => "SPB1",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 61
                ],
                [
                    "name" => "SPB2",
                    "model" => "N/A",
                    "plate_number" => "SPB2",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 61
                ],
                [
                    "name" => "SPGE1",
                    "model" => "N/A",
                    "plate_number" => "SPGE1",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 62
                ],
                [
                    "name" => "SPGE2",
                    "model" => "N/A",
                    "plate_number" => "SPGE2",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 62
                ],
                [
                    "name" => "SPGE3",
                    "model" => "N/A",
                    "plate_number" => "SPGE3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 62
                ],
                [
                    "name" => "SPGE4",
                    "model" => "N/A",
                    "plate_number" => "SPGE4",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 62
                ],
                [
                    "name" => "UGE1",
                    "model" => "N/A",
                    "plate_number" => "UGE1",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 63
                ],
                [
                    "name" => "UGE2",
                    "model" => "N/A",
                    "plate_number" => "UGE2",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 63
                ],
                [
                    "name" => "SPGD1",
                    "model" => "N/A",
                    "plate_number" => "SPGD1",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 64
                ],
                [
                    "name" => "SPGD2",
                    "model" => "N/A",
                    "plate_number" => "SPGD2",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 64
                ],
                [
                    "name" => "SPC1",
                    "model" => "N/A",
                    "plate_number" => "SPC1",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 65
                ],
                [
                    "name" => "SPC2",
                    "model" => "N/A",
                    "plate_number" => "SPC2",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 65
                ],
                [
                    "name" => "SPC4",
                    "model" => "N/A",
                    "plate_number" => "SPC4",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 65
                ],
                [
                    "name" => "SPA1",
                    "model" => "N/A",
                    "plate_number" => "SPA1",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 65
                ],
                [
                    "name" => "SPA2",
                    "model" => "N/A",
                    "plate_number" => "SPA2",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 65
                ],
                [
                    "name" => "SPA3",
                    "model" => "N/A",
                    "plate_number" => "SPA3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 65
                ],
                [
                    "name" => "SPA4",
                    "model" => "N/A",
                    "plate_number" => "SPA4",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 65
                ],
                [
                    "name" => "SPA5",
                    "model" => "N/A",
                    "plate_number" => "SPA5",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 65
                ],
                [
                    "name" => "SCHP1",
                    "model" => "N/A",
                    "plate_number" => "SCHP1",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 66
                ],
                [
                    "name" => "SCHP2",
                    "model" => "N/A",
                    "plate_number" => "SCHP2",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 66
                ],
                [
                    "name" => "STA1",
                    "model" => "N/A",
                    "plate_number" => "STA1",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 67
                ],
                [
                    "name" => "STA2",
                    "model" => "N/A",
                    "plate_number" => "STA2",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 67
                ],
                [
                    "name" => "SPC1-20'-06",
                    "model" => "N/A",
                    "plate_number" => "SPC1-20'-06",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 68
                ],
                [
                    "name" => "SPC2-20'-07",
                    "model" => "N/A",
                    "plate_number" => "SPC2-20'-07",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 68
                ],
                [
                    "name" => "SPC1-40'-09",
                    "model" => "N/A",
                    "plate_number" => "SPC1-40'-09",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 69
                ],
                [
                    "name" => "OOG-01-40'",
                    "model" => "N/A",
                    "plate_number" => "OOG-01-40'",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 70
                ],
                [
                    "name" => "OOG-01-20'",
                    "model" => "N/A",
                    "plate_number" => "OOG-01-20'",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 71
                ],
                [
                    "name" => "OOG-01-20'",
                    "model" => "N/A",
                    "plate_number" => "OOG-01-20'",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 72
                ],
                [
                    "name" => "OOG-01-40'",
                    "model" => "N/A",
                    "plate_number" => "OOG-01-40'",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 73
                ],
                [
                    "name" => "FH5",
                    "model" => "N/A",
                    "plate_number" => "FH5",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 74
                ],
                [
                    "name" => "FH6",
                    "model" => "N/A",
                    "plate_number" => "FH6",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 74
                ],
                [
                    "name" => "FH7",
                    "model" => "N/A",
                    "plate_number" => "FH7",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 74
                ],
                [
                    "name" => "FH8",
                    "model" => "N/A",
                    "plate_number" => "FH8",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 74
                ],
                [
                    "name" => "B 01/ 12m3",
                    "model" => "N/A",
                    "plate_number" => "B 01/ 12m3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 75
                ],
                [
                    "name" => "B02/ 12m3",
                    "model" => "N/A",
                    "plate_number" => "B02/ 12m3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 75
                ],
                [
                    "name" => "B 03/12m3",
                    "model" => "N/A",
                    "plate_number" => "B 03/12m3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 75
                ],
                [
                    "name" => "B 04/12m3",
                    "model" => "N/A",
                    "plate_number" => "B 04/12m3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 75
                ],
                [
                    "name" => "B 05/12m3",
                    "model" => "N/A",
                    "plate_number" => "B 05/12m3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 75
                ],
                [
                    "name" => "B 06/12m3",
                    "model" => "N/A",
                    "plate_number" => "B 06/12m3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 75
                ],
                [
                    "name" => "B 07/12m3",
                    "model" => "N/A",
                    "plate_number" => "B 07/12m3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 75
                ],
                [
                    "name" => "B 08/12m3",
                    "model" => "N/A",
                    "plate_number" => "B 08/12m3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 75
                ],
                [
                    "name" => "B 09/12m3",
                    "model" => "N/A",
                    "plate_number" => "B 09/12m3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 75
                ],
                [
                    "name" => "B 10/12m3",
                    "model" => "N/A",
                    "plate_number" => "B 10/12m3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 75
                ],
                [
                    "name" => "B 11/12m3",
                    "model" => "N/A",
                    "plate_number" => "B 11/12m3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 75
                ],
                [
                    "name" => "B 12/12m3",
                    "model" => "N/A",
                    "plate_number" => "B 12/12m3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 75
                ],
                [
                    "name" => "B 13/12m3",
                    "model" => "N/A",
                    "plate_number" => "B 13/12m3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 75
                ],
                [
                    "name" => "B 14/12m3",
                    "model" => "N/A",
                    "plate_number" => "B 14/12m3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 75
                ],
                [
                    "name" => "B 15/12m3",
                    "model" => "N/A",
                    "plate_number" => "B 15/12m3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 75
                ],
                [
                    "name" => "B 16/12m3",
                    "model" => "N/A",
                    "plate_number" => "B 16/12m3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 75
                ],
                [
                    "name" => "B 17/12m3",
                    "model" => "N/A",
                    "plate_number" => "B 17/12m3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 75
                ],
                [
                    "name" => "B 18/12m3",
                    "model" => "N/A",
                    "plate_number" => "B 18/12m3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 75
                ],
                [
                    "name" => "B 19/12m3",
                    "model" => "N/A",
                    "plate_number" => "B 19/12m3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 75
                ],
                [
                    "name" => "B 20/12m4",
                    "model" => "N/A",
                    "plate_number" => "B 20/12m4",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 75
                ],
                [
                    "name" => "B 21/12m3",
                    "model" => "N/A",
                    "plate_number" => "B 21/12m3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 75
                ],
                [
                    "name" => "B 01/6m3",
                    "model" => "N/A",
                    "plate_number" => "B 01/6m3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 76
                ],
                [
                    "name" => "B 02/6m3",
                    "model" => "N/A",
                    "plate_number" => "B 02/6m3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 76
                ],
                [
                    "name" => "B 03/6m3",
                    "model" => "N/A",
                    "plate_number" => "B 03/6m3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 76
                ],
                [
                    "name" => "B 04/6m3",
                    "model" => "N/A",
                    "plate_number" => "B 04/6m3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 76
                ],
                [
                    "name" => "B 05/6m3",
                    "model" => "N/A",
                    "plate_number" => "B 05/6m3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 76
                ],
                [
                    "name" => "B 06/6m3",
                    "model" => "N/A",
                    "plate_number" => "B 06/6m3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 76
                ],
                [
                    "name" => "B 07/6m3",
                    "model" => "N/A",
                    "plate_number" => "B 07/6m3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 76
                ],
                [
                    "name" => "B 08/6m3",
                    "model" => "N/A",
                    "plate_number" => "B 08/6m3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 76
                ],
                [
                    "name" => "B 09/6m3",
                    "model" => "N/A",
                    "plate_number" => "B 09/6m3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 76
                ],
                [
                    "name" => "B 10/6m3",
                    "model" => "N/A",
                    "plate_number" => "B 10/6m3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 76
                ],
                [
                    "name" => "B 11/6m3",
                    "model" => "N/A",
                    "plate_number" => "B 11/6m3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 76
                ],
                [
                    "name" => "B 12/6m3",
                    "model" => "N/A",
                    "plate_number" => "B 12/6m3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 76
                ],
                [
                    "name" => "B 12/6m3",
                    "model" => "N/A",
                    "plate_number" => "B 12/6m3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 76
                ],
                [
                    "name" => "B 12/6m3",
                    "model" => "N/A",
                    "plate_number" => "B 12/6m3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 76
                ],
                [
                    "name" => "B 12/6m3",
                    "model" => "N/A",
                    "plate_number" => "B 12/6m3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 76
                ],
                [
                    "name" => "B 12/6m3",
                    "model" => "N/A",
                    "plate_number" => "B 12/6m3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 76
                ],
                [
                    "name" => "MP1",
                    "model" => "N/A",
                    "plate_number" => "MP1",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 77
                ],
                [
                    "name" => "MP2",
                    "model" => "N/A",
                    "plate_number" => "MP2",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 77
                ],
                [
                    "name" => "MP3",
                    "model" => "N/A",
                    "plate_number" => "MP3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 77
                ],
                [
                    "name" => "MP4",
                    "model" => "N/A",
                    "plate_number" => "MP4",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 77
                ],
                [
                    "name" => "MP5",
                    "model" => "N/A",
                    "plate_number" => "MP5",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 77
                ],
                [
                    "name" => "MP6",
                    "model" => "N/A",
                    "plate_number" => "MP6",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 77
                ],
                [
                    "name" => "MP7",
                    "model" => "N/A",
                    "plate_number" => "MP7",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 77
                ],
                [
                    "name" => "MP8",
                    "model" => "N/A",
                    "plate_number" => "MP8",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 77
                ],
                [
                    "name" => "MP9",
                    "model" => "N/A",
                    "plate_number" => "MP9",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 77
                ],
                [
                    "name" => "MP10",
                    "model" => "N/A",
                    "plate_number" => "MP10",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 77
                ],
                [
                    "name" => "MP11",
                    "model" => "N/A",
                    "plate_number" => "MP11",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 77
                ],
                [
                    "name" => "MP12",
                    "model" => "N/A",
                    "plate_number" => "MP12",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 77
                ],
                [
                    "name" => "MP13",
                    "model" => "N/A",
                    "plate_number" => "MP13",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 77
                ],
                [
                    "name" => "MP14",
                    "model" => "N/A",
                    "plate_number" => "MP14",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 77
                ],
                [
                    "name" => "MP15",
                    "model" => "N/A",
                    "plate_number" => "MP15",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 77
                ],
                [
                    "name" => "MP16",
                    "model" => "N/A",
                    "plate_number" => "MP16",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 77
                ],
                [
                    "name" => "MP17",
                    "model" => "N/A",
                    "plate_number" => "MP17",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 77
                ],
                [
                    "name" => "MP18",
                    "model" => "N/A",
                    "plate_number" => "MP18",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 77
                ],
                [
                    "name" => "MP19",
                    "model" => "N/A",
                    "plate_number" => "MP19",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 77
                ],
                [
                    "name" => "MP20",
                    "model" => "N/A",
                    "plate_number" => "MP20",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 77
                ],
                [
                    "name" => "RAMP1",
                    "model" => "N/A",
                    "plate_number" => "RAMP1",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 78
                ],
                [
                    "name" => "RAMP2",
                    "model" => "N/A",
                    "plate_number" => "RAMP2",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 78
                ],
                [
                    "name" => "GERADOR 1",
                    "model" => "N/A",
                    "plate_number" => "GERADOR 1",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 79
                ],
                [
                    "name" => "GERADOR 2",
                    "model" => "N/A",
                    "plate_number" => "GERADOR 2",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 79
                ],
                [
                    "name" => "GERADOR 3",
                    "model" => "N/A",
                    "plate_number" => "GERADOR 3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 79
                ],
                [
                    "name" => "GERADOR 4",
                    "model" => "N/A",
                    "plate_number" => "GERADOR 4",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 79
                ],
                [
                    "name" => "GERADOR_ DIRECAO",
                    "model" => "N/A",
                    "plate_number" => "GERADOR_ DIRECAO",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 80
                ],
                [
                    "name" => "GERADOR_MUNHAVA",
                    "model" => "N/A",
                    "plate_number" => "GERADOR_MUNHAVA",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 80
                ],
                [
                    "name" => "GERADOR_PORTÃO 8",
                    "model" => "N/A",
                    "plate_number" => "GERADOR_PORTÃO 8",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 80
                ],
                [
                    "name" => "CASA DE HOSPEDES PALMAEIRAS",
                    "model" => "N/A",
                    "plate_number" => "CASA DE HOSPEDES PALMAEIRAS",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 80
                ],
                [
                    "name" => "Gerador casa Hospedes CM",
                    "model" => "N/A",
                    "plate_number" => "Gerador casa Hospedes CM",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 80
                ],
                [
                    "name" => "Gerador Armazém 1",
                    "model" => "N/A",
                    "plate_number" => "Gerador Armazém 1",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 80
                ],
                [
                    "name" => "Gerador Pousada",
                    "model" => "N/A",
                    "plate_number" => "Gerador Pousada",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 80
                ],
                [
                    "name" => "Gerador Portão Azul",
                    "model" => "N/A",
                    "plate_number" => "Gerador Portão Azul",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 80
                ],
                [
                    "name" => "Gerador Movel",
                    "model" => "N/A",
                    "plate_number" => "Gerador Movel",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 80
                ],
                [
                    "name" => "Gerador CASA Hospedes MAPUTO",
                    "model" => "N/A",
                    "plate_number" => "Gerador CASA Hospedes MAPUTO",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 1
                ],
                [
                    "name" => "TC",
                    "model" => "N/A",
                    "plate_number" => "TC",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 81
                ],
                [
                    "name" => "TCGA1",
                    "model" => "N/A",
                    "plate_number" => "TCGA1",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 81
                ],
                [
                    "name" => "TCGA6",
                    "model" => "N/A",
                    "plate_number" => "TCGA6",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 81
                ],
                [
                    "name" => "TCGA7",
                    "model" => "N/A",
                    "plate_number" => "TCGA7",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 81
                ],
                [
                    "name" => "TC P.A8",
                    "model" => "N/A",
                    "plate_number" => "TC P.A8",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 81
                ],
                [
                    "name" => "TCGA5",
                    "model" => "N/A",
                    "plate_number" => "TCGA5",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 81
                ],
                [
                    "name" => "TCG CLINKER",
                    "model" => "N/A",
                    "plate_number" => "TCG CLINKER",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 81
                ],
                [
                    "name" => "Balança 1",
                    "model" => "N/A",
                    "plate_number" => "Balança 1",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 82
                ],
                [
                    "name" => "Balança 2",
                    "model" => "N/A",
                    "plate_number" => "Balança 2",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 82
                ],
                [
                    "name" => "Balança 3",
                    "model" => "N/A",
                    "plate_number" => "Balança 3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 82
                ],
                [
                    "name" => "Balança 4",
                    "model" => "N/A",
                    "plate_number" => "Balança 4",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 82
                ],
                [
                    "name" => "Balança 5",
                    "model" => "N/A",
                    "plate_number" => "Balança 5",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 82
                ],
                [
                    "name" => "T12",
                    "model" => "N/A",
                    "plate_number" => "T12",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 83
                ],
                [
                    "name" => "T13",
                    "model" => "N/A",
                    "plate_number" => "T13",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 83
                ],
                [
                    "name" => "T14",
                    "model" => "N/A",
                    "plate_number" => "T14",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 83
                ],
                [
                    "name" => "T15",
                    "model" => "N/A",
                    "plate_number" => "T15",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 83
                ],
                [
                    "name" => "T16",
                    "model" => "N/A",
                    "plate_number" => "T16",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 83
                ],
                [
                    "name" => "T17",
                    "model" => "N/A",
                    "plate_number" => "T17",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 83
                ],
                [
                    "name" => "TF01",
                    "model" => "N/A",
                    "plate_number" => "TF01",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 84
                ],
                [
                    "name" => "TF02",
                    "model" => "N/A",
                    "plate_number" => "TF02",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 84
                ],
                [
                    "name" => "TF03",
                    "model" => "N/A",
                    "plate_number" => "TF03",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 84
                ],
                [
                    "name" => "TF04",
                    "model" => "N/A",
                    "plate_number" => "TF04",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 84
                ],
                [
                    "name" => "TF05",
                    "model" => "N/A",
                    "plate_number" => "TF05",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 84
                ],
                [
                    "name" => "TF06",
                    "model" => "N/A",
                    "plate_number" => "TF06",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 84
                ],
                [
                    "name" => "TF07",
                    "model" => "N/A",
                    "plate_number" => "TF07",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 84
                ],
                [
                    "name" => "TF08",
                    "model" => "N/A",
                    "plate_number" => "TF08",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 84
                ],
                [
                    "name" => "TF09",
                    "model" => "N/A",
                    "plate_number" => "TF09",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 84
                ],
                [
                    "name" => "TF10",
                    "model" => "N/A",
                    "plate_number" => "TF10",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 84
                ],
                [
                    "name" => "TF11",
                    "model" => "N/A",
                    "plate_number" => "TF11",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 84
                ],
                [
                    "name" => "TF12",
                    "model" => "N/A",
                    "plate_number" => "TF12",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 84
                ],
                [
                    "name" => "TF13",
                    "model" => "N/A",
                    "plate_number" => "TF13",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 84
                ],
                [
                    "name" => "TF14",
                    "model" => "N/A",
                    "plate_number" => "TF14",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 84
                ],
                [
                    "name" => "TF15",
                    "model" => "N/A",
                    "plate_number" => "TF15",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 84
                ],
                [
                    "name" => "TF16",
                    "model" => "N/A",
                    "plate_number" => "TF16",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 84
                ],
                [
                    "name" => "TF17",
                    "model" => "N/A",
                    "plate_number" => "TF17",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 84
                ],
                [
                    "name" => "TF18",
                    "model" => "N/A",
                    "plate_number" => "TF18",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 84
                ],
                [
                    "name" => "TF19",
                    "model" => "N/A",
                    "plate_number" => "TF19",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 84
                ],
                [
                    "name" => "TF20",
                    "model" => "N/A",
                    "plate_number" => "TF20",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 84
                ],
                [
                    "name" => "TF21",
                    "model" => "N/A",
                    "plate_number" => "TF21",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 84
                ],
                [
                    "name" => "TF22",
                    "model" => "N/A",
                    "plate_number" => "TF22",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 84
                ],
                [
                    "name" => "TF23",
                    "model" => "N/A",
                    "plate_number" => "TF23",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 84
                ],
                [
                    "name" => "TF24",
                    "model" => "N/A",
                    "plate_number" => "TF24",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 84
                ],
                [
                    "name" => "TF25",
                    "model" => "N/A",
                    "plate_number" => "TF25",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 84
                ],
                [
                    "name" => "TF26",
                    "model" => "N/A",
                    "plate_number" => "TF26",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 84
                ],
                [
                    "name" => "TF27",
                    "model" => "N/A",
                    "plate_number" => "TF27",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 84
                ],
                [
                    "name" => "TF28",
                    "model" => "N/A",
                    "plate_number" => "TF28",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 84
                ],
                [
                    "name" => "TF29",
                    "model" => "N/A",
                    "plate_number" => "TF29",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 84
                ],
                [
                    "name" => "TF30",
                    "model" => "N/A",
                    "plate_number" => "TF30",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 84
                ],
                [
                    "name" => "TF31",
                    "model" => "N/A",
                    "plate_number" => "TF31",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 84
                ],
                [
                    "name" => "TF32",
                    "model" => "N/A",
                    "plate_number" => "TF32",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 84
                ],
                [
                    "name" => "TF33",
                    "model" => "N/A",
                    "plate_number" => "TF33",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 84
                ],
                [
                    "name" => "TF34",
                    "model" => "N/A",
                    "plate_number" => "TF34",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 84
                ],
                [
                    "name" => "TF35",
                    "model" => "N/A",
                    "plate_number" => "TF35",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 84
                ],
                [
                    "name" => "TF36",
                    "model" => "N/A",
                    "plate_number" => "TF36",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 84
                ],
                [
                    "name" => "PC2",
                    "model" => "N/A",
                    "plate_number" => "PC2",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 85
                ],
                [
                    "name" => "PC3",
                    "model" => "N/A",
                    "plate_number" => "PC3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 85
                ],
                [
                    "name" => "PC4",
                    "model" => "N/A",
                    "plate_number" => "PC4",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 85
                ],
                [
                    "name" => "PC5",
                    "model" => "N/A",
                    "plate_number" => "PC5",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 85
                ],
                [
                    "name" => "PT 10",
                    "model" => "N/A",
                    "plate_number" => "PT 10",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 86
                ],
                [
                    "name" => "PT 15",
                    "model" => "N/A",
                    "plate_number" => "PT 15",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 86
                ],
                [
                    "name" => "PT 16",
                    "model" => "N/A",
                    "plate_number" => "PT 16",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 86
                ],
                [
                    "name" => "PT REF",
                    "model" => "N/A",
                    "plate_number" => "PT REF",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 86
                ],
                [
                    "name" => "PT 18",
                    "model" => "N/A",
                    "plate_number" => "PT 18",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 86
                ],
                [
                    "name" => "PT 19",
                    "model" => "N/A",
                    "plate_number" => "PT 19",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 86
                ],
                [
                    "name" => "T65",
                    "model" => "N/A",
                    "plate_number" => "T65",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 87
                ],
                [
                    "name" => "T66",
                    "model" => "N/A",
                    "plate_number" => "T66",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 87
                ],
                [
                    "name" => "T67",
                    "model" => "N/A",
                    "plate_number" => "T67",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 87
                ],
                [
                    "name" => "T68",
                    "model" => "N/A",
                    "plate_number" => "T68",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 87
                ],
                [
                    "name" => "T69",
                    "model" => "N/A",
                    "plate_number" => "T69",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 87
                ],
                [
                    "name" => "T70",
                    "model" => "N/A",
                    "plate_number" => "T70",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 87
                ],
                [
                    "name" => "T71",
                    "model" => "N/A",
                    "plate_number" => "T71",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 87
                ],
                [
                    "name" => "T72",
                    "model" => "N/A",
                    "plate_number" => "T72",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 87
                ],
                [
                    "name" => "T73",
                    "model" => "N/A",
                    "plate_number" => "T73",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 87
                ],
                [
                    "name" => "T74",
                    "model" => "N/A",
                    "plate_number" => "T74",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 87
                ],
                [
                    "name" => "T75",
                    "model" => "N/A",
                    "plate_number" => "T75",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 87
                ],
                [
                    "name" => "T46",
                    "model" => "N/A",
                    "plate_number" => "T46",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 88
                ],
                [
                    "name" => "T59",
                    "model" => "N/A",
                    "plate_number" => "T59",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 88
                ],
                [
                    "name" => "T60",
                    "model" => "N/A",
                    "plate_number" => "T60",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 88
                ],
                [
                    "name" => "T61",
                    "model" => "N/A",
                    "plate_number" => "T61",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 88
                ],
                [
                    "name" => "T62",
                    "model" => "N/A",
                    "plate_number" => "T62",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 88
                ],
                [
                    "name" => "T63",
                    "model" => "N/A",
                    "plate_number" => "T63",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 88
                ],
                [
                    "name" => "T64",
                    "model" => "N/A",
                    "plate_number" => "T64",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 88
                ],
                [
                    "name" => "T80",
                    "model" => "N/A",
                    "plate_number" => "T80",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 89
                ],
                [
                    "name" => "T81",
                    "model" => "N/A",
                    "plate_number" => "T81",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 89
                ],
                [
                    "name" => "T82",
                    "model" => "N/A",
                    "plate_number" => "T82",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 89
                ],
                [
                    "name" => "T83",
                    "model" => "N/A",
                    "plate_number" => "T83",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 89
                ],
                [
                    "name" => "T33",
                    "model" => "N/A",
                    "plate_number" => "T33",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 90
                ],
                [
                    "name" => "T34",
                    "model" => "N/A",
                    "plate_number" => "T34",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 90
                ],
                [
                    "name" => "T22",
                    "model" => "N/A",
                    "plate_number" => "T22",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 91
                ],
                [
                    "name" => "CAIS 6",
                    "model" => "N/A",
                    "plate_number" => "CAIS 6",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 92
                ],
                [
                    "name" => "Cais 7",
                    "model" => "N/A",
                    "plate_number" => "Cais 7",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 92
                ],
                [
                    "name" => "CAIS 9",
                    "model" => "N/A",
                    "plate_number" => "CAIS 9",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 92
                ],
                [
                    "name" => "Cais 10",
                    "model" => "N/A",
                    "plate_number" => "Cais 10",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 92
                ],
                [
                    "name" => "IP01",
                    "model" => "N/A",
                    "plate_number" => "IP01",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 93
                ],
                [
                    "name" => "IP02",
                    "model" => "N/A",
                    "plate_number" => "IP02",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 93
                ],
                [
                    "name" => "IP03",
                    "model" => "N/A",
                    "plate_number" => "IP03",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 93
                ],
                [
                    "name" => "IP04",
                    "model" => "N/A",
                    "plate_number" => "IP04",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 93
                ],
                [
                    "name" => "IP05",
                    "model" => "N/A",
                    "plate_number" => "IP05",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 93
                ],
                [
                    "name" => "IP06",
                    "model" => "N/A",
                    "plate_number" => "IP06",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 93
                ],
                [
                    "name" => "IP07",
                    "model" => "N/A",
                    "plate_number" => "IP07",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 93
                ],
                [
                    "name" => "IP08",
                    "model" => "N/A",
                    "plate_number" => "IP08",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 93
                ],
                [
                    "name" => "IP09",
                    "model" => "N/A",
                    "plate_number" => "IP09",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 93
                ],
                [
                    "name" => "IP10",
                    "model" => "N/A",
                    "plate_number" => "IP10",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 93
                ],
                [
                    "name" => "IP11",
                    "model" => "N/A",
                    "plate_number" => "IP11",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 93
                ],
                [
                    "name" => "IP12",
                    "model" => "N/A",
                    "plate_number" => "IP12",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 93
                ],
                [
                    "name" => "IP13",
                    "model" => "N/A",
                    "plate_number" => "IP13",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 93
                ],
                [
                    "name" => "IP14",
                    "model" => "N/A",
                    "plate_number" => "IP14",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 93
                ],
                [
                    "name" => "IP15",
                    "model" => "N/A",
                    "plate_number" => "IP15",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 93
                ],
                [
                    "name" => "IP16",
                    "model" => "N/A",
                    "plate_number" => "IP16",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 93
                ],
                [
                    "name" => "IP17",
                    "model" => "N/A",
                    "plate_number" => "IP17",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 93
                ],
                [
                    "name" => "IP18",
                    "model" => "N/A",
                    "plate_number" => "IP18",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 93
                ],
                [
                    "name" => "IP19",
                    "model" => "N/A",
                    "plate_number" => "IP19",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 93
                ],
                [
                    "name" => "IP20",
                    "model" => "N/A",
                    "plate_number" => "IP20",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 93
                ],
                [
                    "name" => "IP21",
                    "model" => "N/A",
                    "plate_number" => "IP21",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 93
                ],
                [
                    "name" => "IP22",
                    "model" => "N/A",
                    "plate_number" => "IP22",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 93
                ],
                [
                    "name" => "IP23",
                    "model" => "N/A",
                    "plate_number" => "IP23",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 93
                ],
                [
                    "name" => "IP24",
                    "model" => "N/A",
                    "plate_number" => "IP24",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 93
                ],
                [
                    "name" => "IP25",
                    "model" => "N/A",
                    "plate_number" => "IP25",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 93
                ],
                [
                    "name" => "AC-1-24000-DIR-Sala de Reunioes 2",
                    "model" => "N/A",
                    "plate_number" => "AC-1-24000-DIR-Sala de Reunioes 2",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 94
                ],
                [
                    "name" => "AC-2-24000-DIR-Sala de Reunioes 2",
                    "model" => "N/A",
                    "plate_number" => "AC-2-24000-DIR-Sala de Reunioes 2",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 94
                ],
                [
                    "name" => "AC-3-24000-DIR-Sala do Administrador Delegado",
                    "model" => "N/A",
                    "plate_number" => "AC-3-24000-DIR-Sala do Administrador Delegado",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 94
                ],
                [
                    "name" => "AC-4-24000-DIR-Contabilidade",
                    "model" => "N/A",
                    "plate_number" => "AC-4-24000-DIR-Contabilidade",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 95
                ],
                [
                    "name" => "AC-5-24000-DIR-Contabilidade",
                    "model" => "N/A",
                    "plate_number" => "AC-5-24000-DIR-Contabilidade",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-6-24000-DIR-Sala do Director Financeiro",
                    "model" => "N/A",
                    "plate_number" => "AC-6-24000-DIR-Sala do Director Financeiro",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-7-18000-DIR-Sala do chefe da contabilidade",
                    "model" => "N/A",
                    "plate_number" => "AC-7-18000-DIR-Sala do chefe da contabilidade",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-8-18000-DIR-Sala contabilidade / emissao de cheques",
                    "model" => "N/A",
                    "plate_number" => "AC-8-18000-DIR-Sala contabilidade / emissao de cheques",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 98
                ],
                [
                    "name" => "AC-9-24000-DIR-Atedimento Publico",
                    "model" => "N/A",
                    "plate_number" => "AC-9-24000-DIR-Atedimento Publico",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-10-24000-DIR-Atedimento Publico",
                    "model" => "N/A",
                    "plate_number" => "AC-10-24000-DIR-Atedimento Publico",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-11-24000-DIR-Atedimento Publico",
                    "model" => "N/A",
                    "plate_number" => "AC-11-24000-DIR-Atedimento Publico",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-12-24000-DIR-Atedimento Publico / Tisoraria",
                    "model" => "N/A",
                    "plate_number" => "AC-12-24000-DIR-Atedimento Publico / Tisoraria",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 94
                ],
                [
                    "name" => "AC-13-60000-DIR-Sala de servidor",
                    "model" => "N/A",
                    "plate_number" => "AC-13-60000-DIR-Sala de servidor",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 99
                ],
                [
                    "name" => "AC-14-60000-DIR-Sala de Servidor",
                    "model" => "N/A",
                    "plate_number" => "AC-14-60000-DIR-Sala de Servidor",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 99
                ],
                [
                    "name" => "AC-15-38000-DIR-Recepcao",
                    "model" => "N/A",
                    "plate_number" => "AC-15-38000-DIR-Recepcao",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 100
                ],
                [
                    "name" => "AC-16-24000-DIR-Secretaria Direccao",
                    "model" => "N/A",
                    "plate_number" => "AC-16-24000-DIR-Secretaria Direccao",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 101
                ],
                [
                    "name" => "AC-17-12000-DIR-Sala do Director Libombo",
                    "model" => "N/A",
                    "plate_number" => "AC-17-12000-DIR-Sala do Director Libombo",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 102
                ],
                [
                    "name" => "AC-18-12000-DIR-Copa",
                    "model" => "N/A",
                    "plate_number" => "AC-18-12000-DIR-Copa",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 102
                ],
                [
                    "name" => "AC-19-24000-DIR-Copa",
                    "model" => "N/A",
                    "plate_number" => "AC-19-24000-DIR-Copa",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 94
                ],
                [
                    "name" => "AC-20-24000-DIR-Gabinete Tecnico",
                    "model" => "N/A",
                    "plate_number" => "AC-20-24000-DIR-Gabinete Tecnico",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-21-24000-DIR-Procurement / sala dona Virginia",
                    "model" => "N/A",
                    "plate_number" => "AC-21-24000-DIR-Procurement / sala dona Virginia",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 94
                ],
                [
                    "name" => "AC-22-24000-DIR-Procurement / sala dona Rosilia",
                    "model" => "N/A",
                    "plate_number" => "AC-22-24000-DIR-Procurement / sala dona Rosilia",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-23-24000-DIR-Sala de formacao / Pablo",
                    "model" => "N/A",
                    "plate_number" => "AC-23-24000-DIR-Sala de formacao / Pablo",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-24-24000-DIR-Sala do chefe de Procurement",
                    "model" => "N/A",
                    "plate_number" => "AC-24-24000-DIR-Sala do chefe de Procurement",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 103
                ],
                [
                    "name" => "AC-25-24000-DIR-Sala dos RH / Marcia",
                    "model" => "N/A",
                    "plate_number" => "AC-25-24000-DIR-Sala dos RH / Marcia",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 104
                ],
                [
                    "name" => "AC-26-12000-DIR-Sala de RH / Salario",
                    "model" => "N/A",
                    "plate_number" => "AC-26-12000-DIR-Sala de RH / Salario",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 105
                ],
                [
                    "name" => "AC-27-18000-DIR-Sala da Auditora",
                    "model" => "N/A",
                    "plate_number" => "AC-27-18000-DIR-Sala da Auditora",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-28-24000-DIR-Engenharia",
                    "model" => "N/A",
                    "plate_number" => "AC-28-24000-DIR-Engenharia",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 106
                ],
                [
                    "name" => "AC-29-24000-DIR-Engenharia",
                    "model" => "N/A",
                    "plate_number" => "AC-29-24000-DIR-Engenharia",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 106
                ],
                [
                    "name" => "AC-30-12000-DIR-Engenharia / Chefe",
                    "model" => "N/A",
                    "plate_number" => "AC-30-12000-DIR-Engenharia / Chefe",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 107
                ],
                [
                    "name" => "AC-31-12000-DIR-IT / Fausio e Fernando",
                    "model" => "N/A",
                    "plate_number" => "AC-31-12000-DIR-IT / Fausio e Fernando",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 105
                ],
                [
                    "name" => "AC-32-24000-DIR-ICT",
                    "model" => "N/A",
                    "plate_number" => "AC-32-24000-DIR-ICT",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-33-24000-DIR-ICT",
                    "model" => "N/A",
                    "plate_number" => "AC-33-24000-DIR-ICT",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-34-12000-DIR-Chefe de IT",
                    "model" => "N/A",
                    "plate_number" => "AC-34-12000-DIR-Chefe de IT",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 105
                ],
                [
                    "name" => "AC-35-18000-DIR-Chefe de RH",
                    "model" => "N/A",
                    "plate_number" => "AC-35-18000-DIR-Chefe de RH",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 108
                ],
                [
                    "name" => "AC-36-18000-DIR-Directora do RH",
                    "model" => "N/A",
                    "plate_number" => "AC-36-18000-DIR-Directora do RH",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-37-18000-DIR-Arquivo de RH",
                    "model" => "N/A",
                    "plate_number" => "AC-37-18000-DIR-Arquivo de RH",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 98
                ],
                [
                    "name" => "AC-38-12000-DIR-Sala do Adjunto Director das Operacoes",
                    "model" => "N/A",
                    "plate_number" => "AC-38-12000-DIR-Sala do Adjunto Director das Operacoes",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 109
                ],
                [
                    "name" => "AC-39-18000-DIR-Director das Operacoes",
                    "model" => "N/A",
                    "plate_number" => "AC-39-18000-DIR-Director das Operacoes",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 108
                ],
                [
                    "name" => "AC-40-24000-DIR-Sala de reunioes 2",
                    "model" => "N/A",
                    "plate_number" => "AC-40-24000-DIR-Sala de reunioes 2",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 101
                ],
                [
                    "name" => "AC-41-24000-DIR-Sala de reunioes 2",
                    "model" => "N/A",
                    "plate_number" => "AC-41-24000-DIR-Sala de reunioes 2",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 94
                ],
                [
                    "name" => "AC-42-24000-DIR-Sala de reunioes 2",
                    "model" => "N/A",
                    "plate_number" => "AC-42-24000-DIR-Sala de reunioes 2",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 94
                ],
                [
                    "name" => "AC-43-24000-DIR-Sala de reunioes 3",
                    "model" => "N/A",
                    "plate_number" => "AC-43-24000-DIR-Sala de reunioes 3",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 94
                ],
                [
                    "name" => "AC-44-12000-DIR-Copa Gabinete Juridico",
                    "model" => "N/A",
                    "plate_number" => "AC-44-12000-DIR-Copa Gabinete Juridico",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 105
                ],
                [
                    "name" => "AC-45-24000-DIR-Gabinete Juridico",
                    "model" => "N/A",
                    "plate_number" => "AC-45-24000-DIR-Gabinete Juridico",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 106
                ],
                [
                    "name" => "AC-46-12000-DIR-Marketing e vendas",
                    "model" => "N/A",
                    "plate_number" => "AC-46-12000-DIR-Marketing e vendas",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 105
                ],
                [
                    "name" => "AC-47-18000-DIR-Marketing e vendas",
                    "model" => "N/A",
                    "plate_number" => "AC-47-18000-DIR-Marketing e vendas",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-48-9000-DIR-Recadacao marketing e Vendas",
                    "model" => "N/A",
                    "plate_number" => "AC-48-9000-DIR-Recadacao marketing e Vendas",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 110
                ],
                [
                    "name" => "AC-49-9000-DIR-Recadacao marketing e Vendas",
                    "model" => "N/A",
                    "plate_number" => "AC-49-9000-DIR-Recadacao marketing e Vendas",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 110
                ],
                [
                    "name" => "AC-50-9000-DIR-Recadacao marketing e Vendas",
                    "model" => "N/A",
                    "plate_number" => "AC-50-9000-DIR-Recadacao marketing e Vendas",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 110
                ],
                [
                    "name" => "AC-51-24000-DIR-Servidor R/C",
                    "model" => "N/A",
                    "plate_number" => "AC-51-24000-DIR-Servidor R/C",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 106
                ],
                [
                    "name" => "AC-52-24000-DIR-Servidor R/C",
                    "model" => "N/A",
                    "plate_number" => "AC-52-24000-DIR-Servidor R/C",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 106
                ],
                [
                    "name" => "AC-53-60000-DIR-Servidor R/C",
                    "model" => "N/A",
                    "plate_number" => "AC-53-60000-DIR-Servidor R/C",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 111
                ],
                [
                    "name" => "AC-54-12000-DIR-Marketing e vendas",
                    "model" => "N/A",
                    "plate_number" => "AC-54-12000-DIR-Marketing e vendas",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 112
                ],
                [
                    "name" => "AC-55-18000-DIR-Marketing e vendas",
                    "model" => "N/A",
                    "plate_number" => "AC-55-18000-DIR-Marketing e vendas",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 113
                ],
                [
                    "name" => "AC-56-12000-DIR-Marketing e vendas",
                    "model" => "N/A",
                    "plate_number" => "AC-56-12000-DIR-Marketing e vendas",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 114
                ],
                [
                    "name" => "AC-57-18000-DIR-Marketing e vendas",
                    "model" => "N/A",
                    "plate_number" => "AC-57-18000-DIR-Marketing e vendas",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-58-12000-DIR-Marketing e vendas",
                    "model" => "N/A",
                    "plate_number" => "AC-58-12000-DIR-Marketing e vendas",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 107
                ],
                [
                    "name" => "AC-59-12000-DIR-Marketing e vendas",
                    "model" => "N/A",
                    "plate_number" => "AC-59-12000-DIR-Marketing e vendas",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 107
                ],
                [
                    "name" => "AC-60-18000-DIR-Arquivo Direc;ao",
                    "model" => "N/A",
                    "plate_number" => "AC-60-18000-DIR-Arquivo Direc;ao",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 115
                ],
                [
                    "name" => "AC-61-12000-ARQ-DIR-Arquivo Direc;ao",
                    "model" => "N/A",
                    "plate_number" => "AC-61-12000-ARQ-DIR-Arquivo Direc;ao",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 112
                ],
                [
                    "name" => "AC-62-12000-ARQ-DIR-Arquivo Direc;ao",
                    "model" => "N/A",
                    "plate_number" => "AC-62-12000-ARQ-DIR-Arquivo Direc;ao",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 112
                ],
                [
                    "name" => "AC-63-12000-ARQ-DIR-Arquivo Direc;ao",
                    "model" => "N/A",
                    "plate_number" => "AC-63-12000-ARQ-DIR-Arquivo Direc;ao",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 112
                ],
                [
                    "name" => "AC-64-12000-ARQ-DIR-Arquivo Direc;ao",
                    "model" => "N/A",
                    "plate_number" => "AC-64-12000-ARQ-DIR-Arquivo Direc;ao",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 112
                ],
                [
                    "name" => "AC-65-12000-ARQ-DIR-Arquivo Direc;ao",
                    "model" => "N/A",
                    "plate_number" => "AC-65-12000-ARQ-DIR-Arquivo Direc;ao",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 112
                ],
                [
                    "name" => "AC-66-12000-ARQ-DIR-Arquivo Direc;ao",
                    "model" => "N/A",
                    "plate_number" => "AC-66-12000-ARQ-DIR-Arquivo Direc;ao",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 112
                ],
                [
                    "name" => "AC-67-12000-ARQ-DIR-Arquivo Direc;ao",
                    "model" => "N/A",
                    "plate_number" => "AC-67-12000-ARQ-DIR-Arquivo Direc;ao",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 112
                ],
                [
                    "name" => "AC-68-24000-ARQ-DIR-Refeitorio",
                    "model" => "N/A",
                    "plate_number" => "AC-68-24000-ARQ-DIR-Refeitorio",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 116
                ],
                [
                    "name" => "AC-69-24000-REF-DIR-Refeitorio",
                    "model" => "N/A",
                    "plate_number" => "AC-69-24000-REF-DIR-Refeitorio",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 116
                ],
                [
                    "name" => "AC-70-24000-REF-DIR-Refeitorio",
                    "model" => "N/A",
                    "plate_number" => "AC-70-24000-REF-DIR-Refeitorio",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 116
                ],
                [
                    "name" => "AC-71-24000-REF-DIR-Refeitorio",
                    "model" => "N/A",
                    "plate_number" => "AC-71-24000-REF-DIR-Refeitorio",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 116
                ],
                [
                    "name" => "AC-72-12000-REF-DIR-Escritorio / Refeitorio",
                    "model" => "N/A",
                    "plate_number" => "AC-72-12000-REF-DIR-Escritorio / Refeitorio",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 112
                ],
                [
                    "name" => "AC-73-9000-REF-DIR-Cozinha / Refeitorio",
                    "model" => "N/A",
                    "plate_number" => "AC-73-9000-REF-DIR-Cozinha / Refeitorio",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 117
                ],
                [
                    "name" => "AC-74-12000-REF-DIR-DMC",
                    "model" => "N/A",
                    "plate_number" => "AC-74-12000-REF-DIR-DMC",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 107
                ],
                [
                    "name" => "AC-75-12000-DMC-DMC",
                    "model" => "N/A",
                    "plate_number" => "AC-75-12000-DMC-DMC",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 107
                ],
                [
                    "name" => "AC-76-9000-DMC-DMC",
                    "model" => "N/A",
                    "plate_number" => "AC-76-9000-DMC-DMC",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 110
                ],
                [
                    "name" => "AC-77-12000-DIR-AccessWorld",
                    "model" => "N/A",
                    "plate_number" => "AC-77-12000-DIR-AccessWorld",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 118
                ],
                [
                    "name" => "AC-78-12000-DIR-AccessWorld",
                    "model" => "N/A",
                    "plate_number" => "AC-78-12000-DIR-AccessWorld",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 118
                ],
                [
                    "name" => "AC-79-12000-DIR-AccessWorld",
                    "model" => "N/A",
                    "plate_number" => "AC-79-12000-DIR-AccessWorld",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 118
                ],
                [
                    "name" => "AC-80-12000-MAN-Sala dos Supervisores de Manutencao",
                    "model" => "N/A",
                    "plate_number" => "AC-80-12000-MAN-Sala dos Supervisores de Manutencao",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 105
                ],
                [
                    "name" => "AC-81-18000-MAN-Sala dos Supervisores de Manutencao",
                    "model" => "N/A",
                    "plate_number" => "AC-81-18000-MAN-Sala dos Supervisores de Manutencao",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-82-9000-MAN-Antiga sala da Nectar / RH",
                    "model" => "N/A",
                    "plate_number" => "AC-82-9000-MAN-Antiga sala da Nectar / RH",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 110
                ],
                [
                    "name" => "AC-83-18000-MAN-Sala do Eng. Abdul e Sr. David",
                    "model" => "N/A",
                    "plate_number" => "AC-83-18000-MAN-Sala do Eng. Abdul e Sr. David",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-84-18000-MAN-Sala do Gestor de Manutencao",
                    "model" => "N/A",
                    "plate_number" => "AC-84-18000-MAN-Sala do Gestor de Manutencao",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-85-18000-MAN-Direccao da DANMO",
                    "model" => "N/A",
                    "plate_number" => "AC-85-18000-MAN-Direccao da DANMO",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-86-18000-MAN-Direccao da DANMO",
                    "model" => "N/A",
                    "plate_number" => "AC-86-18000-MAN-Direccao da DANMO",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 119
                ],
                [
                    "name" => "AC-87-24000-MAN-Escritorio da DANMO",
                    "model" => "N/A",
                    "plate_number" => "AC-87-24000-MAN-Escritorio da DANMO",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-88-24000-MAN-Sala do Coordenador TC",
                    "model" => "N/A",
                    "plate_number" => "AC-88-24000-MAN-Sala do Coordenador TC",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 104
                ],
                [
                    "name" => "AC-89-18000-MAN-Sala do Supervisor",
                    "model" => "N/A",
                    "plate_number" => "AC-89-18000-MAN-Sala do Supervisor",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 108
                ],
                [
                    "name" => "AC-90-24000-MAN-Escritorio do Stock",
                    "model" => "N/A",
                    "plate_number" => "AC-90-24000-MAN-Escritorio do Stock",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 104
                ],
                [
                    "name" => "AC-91-18000-MAN-Sala dos Supervisores da DANMO",
                    "model" => "N/A",
                    "plate_number" => "AC-91-18000-MAN-Sala dos Supervisores da DANMO",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 98
                ],
                [
                    "name" => "AC-92-24000-MAN-Sala de frescos Cozinha",
                    "model" => "N/A",
                    "plate_number" => "AC-92-24000-MAN-Sala de frescos Cozinha",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 94
                ],
                [
                    "name" => "AC-93-24000-MAN-Refeitorio Terminal de contentores",
                    "model" => "N/A",
                    "plate_number" => "AC-93-24000-MAN-Refeitorio Terminal de contentores",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 120
                ],
                [
                    "name" => "AC-94-24000-MAN-Refeitorio Terminal de contentores",
                    "model" => "N/A",
                    "plate_number" => "AC-94-24000-MAN-Refeitorio Terminal de contentores",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 120
                ],
                [
                    "name" => "AC-95-24000-MAN-Refeitorio Terminal de contentores",
                    "model" => "N/A",
                    "plate_number" => "AC-95-24000-MAN-Refeitorio Terminal de contentores",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 120
                ],
                [
                    "name" => "AC-96-24000-MAN-Refeitorio Terminal de contentores",
                    "model" => "N/A",
                    "plate_number" => "AC-96-24000-MAN-Refeitorio Terminal de contentores",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-97-24000-MAN-Refeitorio Terminal de contentores",
                    "model" => "N/A",
                    "plate_number" => "AC-97-24000-MAN-Refeitorio Terminal de contentores",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-98-24000-MAN-Refeitorio Terminal de contentores",
                    "model" => "N/A",
                    "plate_number" => "AC-98-24000-MAN-Refeitorio Terminal de contentores",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-99-18000-MAN-Refeitorio Terminal de contentores/ legumes",
                    "model" => "N/A",
                    "plate_number" => "AC-99-18000-MAN-Refeitorio Terminal de contentores/ legumes",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-100-9000-MAN-Supervisor Roling e Electrica TCG",
                    "model" => "N/A",
                    "plate_number" => "AC-100-9000-MAN-Supervisor Roling e Electrica TCG",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 121
                ],
                [
                    "name" => "AC-101-9000-MAN-Seguranca entrada da Oficina",
                    "model" => "N/A",
                    "plate_number" => "AC-101-9000-MAN-Seguranca entrada da Oficina",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 121
                ],
                [
                    "name" => "AC-102-12000-MAN-Porta Cabine Saida para o armazem 16",
                    "model" => "N/A",
                    "plate_number" => "AC-102-12000-MAN-Porta Cabine Saida para o armazem 16",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 107
                ],
                [
                    "name" => "AC-103-12000-MAN-Casa de abastecimento de combustivel",
                    "model" => "N/A",
                    "plate_number" => "AC-103-12000-MAN-Casa de abastecimento de combustivel",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 107
                ],
                [
                    "name" => "AC-269-18000-MAN-Palamenta",
                    "model" => "N/A",
                    "plate_number" => "AC-269-18000-MAN-Palamenta",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-270-18000-MAN-Palamenta",
                    "model" => "N/A",
                    "plate_number" => "AC-270-18000-MAN-Palamenta",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-271-18000-MAN-Salubridade",
                    "model" => "N/A",
                    "plate_number" => "AC-271-18000-MAN-Salubridade",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-272-18000-MAN-Electricistas",
                    "model" => "N/A",
                    "plate_number" => "AC-272-18000-MAN-Electricistas",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-273-18000-MAN-Sala de estar",
                    "model" => "N/A",
                    "plate_number" => "AC-273-18000-MAN-Sala de estar",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-104-18000-A1-Forteseguro r/c",
                    "model" => "N/A",
                    "plate_number" => "AC-104-18000-A1-Forteseguro r/c",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-105-18000-A1-Proximo da escada r/c",
                    "model" => "N/A",
                    "plate_number" => "AC-105-18000-A1-Proximo da escada r/c",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-106-18000-A1-Fiel do armazem 1",
                    "model" => "N/A",
                    "plate_number" => "AC-106-18000-A1-Fiel do armazem 1",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 98
                ],
                [
                    "name" => "AC-107-18000-A1-Armazem 1 1ºandar",
                    "model" => "N/A",
                    "plate_number" => "AC-107-18000-A1-Armazem 1 1ºandar",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-108-24000-A1-Armazem 1 1ºandar",
                    "model" => "N/A",
                    "plate_number" => "AC-108-24000-A1-Armazem 1 1ºandar",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-109-12000-A1-Balanca Armazem 1",
                    "model" => "N/A",
                    "plate_number" => "AC-109-12000-A1-Balanca Armazem 1",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 107
                ],
                [
                    "name" => "AC-110-9000-A1-Porta cabine Escritorio Armazem 1",
                    "model" => "N/A",
                    "plate_number" => "AC-110-9000-A1-Porta cabine Escritorio Armazem 1",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 121
                ],
                [
                    "name" => "AC-111-90000-A2-Dasso Bombeiro /antigo Escri Eng. Ferro",
                    "model" => "N/A",
                    "plate_number" => "AC-111-90000-A2-Dasso Bombeiro /antigo Escri Eng. Ferro",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 122
                ],
                [
                    "name" => "AC-112-18000-A2-Dasso Oficial Ambiente",
                    "model" => "N/A",
                    "plate_number" => "AC-112-18000-A2-Dasso Oficial Ambiente",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-113-12000-A2-Sala do fiel do armazem",
                    "model" => "N/A",
                    "plate_number" => "AC-113-12000-A2-Sala do fiel do armazem",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 107
                ],
                [
                    "name" => "AC-114-24000-A2-Antigo Controlo de Contentores /Desempacotamento",
                    "model" => "N/A",
                    "plate_number" => "AC-114-24000-A2-Antigo Controlo de Contentores /Desempacotamento",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 106
                ],
                [
                    "name" => "AC-115-24000-A2-Antigo Controlo de Contentores /Desempacotamento",
                    "model" => "N/A",
                    "plate_number" => "AC-115-24000-A2-Antigo Controlo de Contentores /Desempacotamento",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-116-60000-A2-Sala de servidor",
                    "model" => "N/A",
                    "plate_number" => "AC-116-60000-A2-Sala de servidor",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 123
                ],
                [
                    "name" => "AC-117-24000-A2-Sala de servidor",
                    "model" => "N/A",
                    "plate_number" => "AC-117-24000-A2-Sala de servidor",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 94
                ],
                [
                    "name" => "AC-118-24000-A2-Armazem dos Bombeiros",
                    "model" => "N/A",
                    "plate_number" => "AC-118-24000-A2-Armazem dos Bombeiros",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 94
                ],
                [
                    "name" => "AC-119-12000-A2-Desmpacotamento",
                    "model" => "N/A",
                    "plate_number" => "AC-119-12000-A2-Desmpacotamento",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 124
                ],
                [
                    "name" => "AC-120-12000-A2-Dasempacotamento",
                    "model" => "N/A",
                    "plate_number" => "AC-120-12000-A2-Dasempacotamento",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 125
                ],
                [
                    "name" => "AC-121-12000-A2-Sala dos Electricistas",
                    "model" => "N/A",
                    "plate_number" => "AC-121-12000-A2-Sala dos Electricistas",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 105
                ],
                [
                    "name" => "AC-122-12000-A2-Armazem de fardamento",
                    "model" => "N/A",
                    "plate_number" => "AC-122-12000-A2-Armazem de fardamento",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 105
                ],
                [
                    "name" => "AC-123-12000-A2-Dasso Bombeiro",
                    "model" => "N/A",
                    "plate_number" => "AC-123-12000-A2-Dasso Bombeiro",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 126
                ],
                [
                    "name" => "AC-124-18000-A2-Dasso Bombeiro",
                    "model" => "N/A",
                    "plate_number" => "AC-124-18000-A2-Dasso Bombeiro",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-125-12000-A2-Dasso Bombeiro",
                    "model" => "N/A",
                    "plate_number" => "AC-125-12000-A2-Dasso Bombeiro",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 102
                ],
                [
                    "name" => "AC-126-18000-A2-Dasso Bombeiro",
                    "model" => "N/A",
                    "plate_number" => "AC-126-18000-A2-Dasso Bombeiro",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 127
                ],
                [
                    "name" => "AC-127-12000-A2-Dasso Bombeiro",
                    "model" => "N/A",
                    "plate_number" => "AC-127-12000-A2-Dasso Bombeiro",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 125
                ],
                [
                    "name" => "AC-128-12000-A2-Dasso Bombeiro",
                    "model" => "N/A",
                    "plate_number" => "AC-128-12000-A2-Dasso Bombeiro",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 105
                ],
                [
                    "name" => "AC-129-12000-A3-Escritorio da Nectar",
                    "model" => "N/A",
                    "plate_number" => "AC-129-12000-A3-Escritorio da Nectar",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 105
                ],
                [
                    "name" => "AC-130-12000-A3-Escritorio da Nectar",
                    "model" => "N/A",
                    "plate_number" => "AC-130-12000-A3-Escritorio da Nectar",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 105
                ],
                [
                    "name" => "AC-131-12000-A3-Escritorio da Nectar",
                    "model" => "N/A",
                    "plate_number" => "AC-131-12000-A3-Escritorio da Nectar",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 105
                ],
                [
                    "name" => "AC-132-12000-A3-Escritorio da Nectar",
                    "model" => "N/A",
                    "plate_number" => "AC-132-12000-A3-Escritorio da Nectar",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 105
                ],
                [
                    "name" => "AC-133-12000-A3-Escritorio da Nectar",
                    "model" => "N/A",
                    "plate_number" => "AC-133-12000-A3-Escritorio da Nectar",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 105
                ],
                [
                    "name" => "AC-134-12000-A3-Escritorio da Nectar",
                    "model" => "N/A",
                    "plate_number" => "AC-134-12000-A3-Escritorio da Nectar",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 105
                ],
                [
                    "name" => "AC-135-18000-A3-Escritorio da Nectar",
                    "model" => "N/A",
                    "plate_number" => "AC-135-18000-A3-Escritorio da Nectar",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 108
                ],
                [
                    "name" => "AC-136-18000-A3-Escritorio da Nectar",
                    "model" => "N/A",
                    "plate_number" => "AC-136-18000-A3-Escritorio da Nectar",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 108
                ],
                [
                    "name" => "AC-137-18000-A3-Escritorio da Nectar",
                    "model" => "N/A",
                    "plate_number" => "AC-137-18000-A3-Escritorio da Nectar",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 108
                ],
                [
                    "name" => "AC-138-12000-A3-Escritorio da Nectar",
                    "model" => "N/A",
                    "plate_number" => "AC-138-12000-A3-Escritorio da Nectar",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 105
                ],
                [
                    "name" => "AC-139-24000-A3-Escritorio da Nectar",
                    "model" => "N/A",
                    "plate_number" => "AC-139-24000-A3-Escritorio da Nectar",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 104
                ],
                [
                    "name" => "AC-140-24000-A3-Escritorio da Nectar",
                    "model" => "N/A",
                    "plate_number" => "AC-140-24000-A3-Escritorio da Nectar",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 104
                ],
                [
                    "name" => "AC-141-24000-A3-Escritorio da Nectar",
                    "model" => "N/A",
                    "plate_number" => "AC-141-24000-A3-Escritorio da Nectar",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 104
                ],
                [
                    "name" => "AC-142-12000-A3-Alfandega",
                    "model" => "N/A",
                    "plate_number" => "AC-142-12000-A3-Alfandega",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 128
                ],
                [
                    "name" => "AC-143-24000-A4-Palamenta / Escritorio",
                    "model" => "N/A",
                    "plate_number" => "AC-143-24000-A4-Palamenta / Escritorio",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-144-24000-A4-Palamenta / Cassifos",
                    "model" => "N/A",
                    "plate_number" => "AC-144-24000-A4-Palamenta / Cassifos",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-145-24000-A5-Gabinete Medico",
                    "model" => "N/A",
                    "plate_number" => "AC-145-24000-A5-Gabinete Medico",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 104
                ],
                [
                    "name" => "AC-146-18000-A5-Assistente do Medico",
                    "model" => "N/A",
                    "plate_number" => "AC-146-18000-A5-Assistente do Medico",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 129
                ],
                [
                    "name" => "AC-147-24000-A5-Sala de espera",
                    "model" => "N/A",
                    "plate_number" => "AC-147-24000-A5-Sala de espera",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-148-24000-A5-Sector Pessoal",
                    "model" => "N/A",
                    "plate_number" => "AC-148-24000-A5-Sector Pessoal",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-149-18000-A5-Assistente social",
                    "model" => "N/A",
                    "plate_number" => "AC-149-18000-A5-Assistente social",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-150-12000-A5-Escritorio R/C lado varanda",
                    "model" => "N/A",
                    "plate_number" => "AC-150-12000-A5-Escritorio R/C lado varanda",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 105
                ],
                [
                    "name" => "AC-151-24000-A5-Fiel do armaz]em 5",
                    "model" => "N/A",
                    "plate_number" => "AC-151-24000-A5-Fiel do armaz]em 5",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-152-9000-A6-Escritorio do cais",
                    "model" => "N/A",
                    "plate_number" => "AC-152-9000-A6-Escritorio do cais",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 110
                ],
                [
                    "name" => "AC-153-18000-A6-Cbinete do Superintendente TCG",
                    "model" => "N/A",
                    "plate_number" => "AC-153-18000-A6-Cbinete do Superintendente TCG",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 130
                ],
                [
                    "name" => "AC-154-24000-A6-Planificação",
                    "model" => "N/A",
                    "plate_number" => "AC-154-24000-A6-Planificação",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-155-24000-A6-Chefe de TCG",
                    "model" => "N/A",
                    "plate_number" => "AC-155-24000-A6-Chefe de TCG",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-156-24000-A6-Sala de reuniões",
                    "model" => "N/A",
                    "plate_number" => "AC-156-24000-A6-Sala de reuniões",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-157-24000/18000-A6-Arquivo/copa",
                    "model" => "N/A",
                    "plate_number" => "AC-157-24000/18000-A6-Arquivo/copa",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 131
                ],
                [
                    "name" => "AC-158-18000-A6-Fiel do Armazém",
                    "model" => "N/A",
                    "plate_number" => "AC-158-18000-A6-Fiel do Armazém",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-159-24000-A6-Refeitório",
                    "model" => "N/A",
                    "plate_number" => "AC-159-24000-A6-Refeitório",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-160-24000-A6-Refeitório",
                    "model" => "N/A",
                    "plate_number" => "AC-160-24000-A6-Refeitório",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-161-24000-A6-Refeitório",
                    "model" => "N/A",
                    "plate_number" => "AC-161-24000-A6-Refeitório",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-162-24000-A6-Refeitório",
                    "model" => "N/A",
                    "plate_number" => "AC-162-24000-A6-Refeitório",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-163-18000-A6-Porta cabine / bascula",
                    "model" => "N/A",
                    "plate_number" => "AC-163-18000-A6-Porta cabine / bascula",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-164-18000-A6-Porta cabine / bascula",
                    "model" => "N/A",
                    "plate_number" => "AC-164-18000-A6-Porta cabine / bascula",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-165-18000-A6-Porta cabine / bascula - Klinker",
                    "model" => "N/A",
                    "plate_number" => "AC-165-18000-A6-Porta cabine / bascula - Klinker",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-166-24000-A7-CDIC",
                    "model" => "N/A",
                    "plate_number" => "AC-166-24000-A7-CDIC",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-167-24000-A7-CDIC",
                    "model" => "N/A",
                    "plate_number" => "AC-167-24000-A7-CDIC",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-168-24000-A7-Chefe do CDIC",
                    "model" => "N/A",
                    "plate_number" => "AC-168-24000-A7-Chefe do CDIC",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-169-18000-A7-Fiel do Armazém",
                    "model" => "N/A",
                    "plate_number" => "AC-169-18000-A7-Fiel do Armazém",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-170-9000-A7-Escritorio do cais",
                    "model" => "N/A",
                    "plate_number" => "AC-170-9000-A7-Escritorio do cais",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 110
                ],
                [
                    "name" => "AC-171-18000-A7-Sala do Supervisor",
                    "model" => "N/A",
                    "plate_number" => "AC-171-18000-A7-Sala do Supervisor",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-172-24000-A7-Salados Encarregados",
                    "model" => "N/A",
                    "plate_number" => "AC-172-24000-A7-Salados Encarregados",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-173-24000-A7-Gabinete de Minerio",
                    "model" => "N/A",
                    "plate_number" => "AC-173-24000-A7-Gabinete de Minerio",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-174-18000-A7-DDS",
                    "model" => "N/A",
                    "plate_number" => "AC-174-18000-A7-DDS",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-175-24000-A7-DDS",
                    "model" => "N/A",
                    "plate_number" => "AC-175-24000-A7-DDS",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-176-18000-A7-Porta cabine / bascula",
                    "model" => "N/A",
                    "plate_number" => "AC-176-18000-A7-Porta cabine / bascula",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-177-18000-A7-Porta cabine / bascula Terra Mar",
                    "model" => "N/A",
                    "plate_number" => "AC-177-18000-A7-Porta cabine / bascula Terra Mar",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-178-12000-PAZUL-Porta cabine Entrada",
                    "model" => "N/A",
                    "plate_number" => "AC-178-12000-PAZUL-Porta cabine Entrada",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 107
                ],
                [
                    "name" => "AC-179-12000-PAZUL-Porta cabine Entrada",
                    "model" => "N/A",
                    "plate_number" => "AC-179-12000-PAZUL-Porta cabine Entrada",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 107
                ],
                [
                    "name" => "AC-180-18000-PAZUL-Alfandega -Fiscalização, porta 17",
                    "model" => "N/A",
                    "plate_number" => "AC-180-18000-PAZUL-Alfandega -Fiscalização, porta 17",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-181-18000-PAZUL-Alfandega- Gestão de Expediente",
                    "model" => "N/A",
                    "plate_number" => "AC-181-18000-PAZUL-Alfandega- Gestão de Expediente",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-182-18000-PAZUL-Alfandega- Gabinete do Chefe, porta 19",
                    "model" => "N/A",
                    "plate_number" => "AC-182-18000-PAZUL-Alfandega- Gabinete do Chefe, porta 19",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-183-18000/12000-PAZUL-Alfandega- Arquivo, Porta 14",
                    "model" => "N/A",
                    "plate_number" => "AC-183-18000/12000-PAZUL-Alfandega- Arquivo, Porta 14",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 132
                ],
                [
                    "name" => "AC-184-18000/12000-PAZUL-Alfandega- Arquivo, Porta 14",
                    "model" => "N/A",
                    "plate_number" => "AC-184-18000/12000-PAZUL-Alfandega- Arquivo, Porta 14",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 132
                ],
                [
                    "name" => "AC-185-18000-PAZUL-Alfandega -Getão de mercadoria n contentorizada, Porta 13",
                    "model" => "N/A",
                    "plate_number" => "AC-185-18000-PAZUL-Alfandega -Getão de mercadoria n contentorizada, Porta 13",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-186-9000-PAZUL-Alfandega -Getão de mercadoria n contentorizada, Porta 13",
                    "model" => "N/A",
                    "plate_number" => "AC-186-9000-PAZUL-Alfandega -Getão de mercadoria n contentorizada, Porta 13",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 121
                ],
                [
                    "name" => "AC-187-18000-PAZUL-Gate Out - Porta 11",
                    "model" => "N/A",
                    "plate_number" => "AC-187-18000-PAZUL-Gate Out - Porta 11",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-188-24000-PAZUL-Controlador de Cameras",
                    "model" => "N/A",
                    "plate_number" => "AC-188-24000-PAZUL-Controlador de Cameras",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 133
                ],
                [
                    "name" => "AC-189-18000-PAZUL-Gate IN - Porta 2",
                    "model" => "N/A",
                    "plate_number" => "AC-189-18000-PAZUL-Gate IN - Porta 2",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-190-18000-PAZUL-Servidor",
                    "model" => "N/A",
                    "plate_number" => "AC-190-18000-PAZUL-Servidor",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-191-12000-PAZUL-Manutenção Civil",
                    "model" => "N/A",
                    "plate_number" => "AC-191-12000-PAZUL-Manutenção Civil",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 107
                ],
                [
                    "name" => "AC-192-18000-PAZUL-Servidor",
                    "model" => "N/A",
                    "plate_number" => "AC-192-18000-PAZUL-Servidor",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-193-18000-PAZUL-J & J - porta 9",
                    "model" => "N/A",
                    "plate_number" => "AC-193-18000-PAZUL-J & J - porta 9",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-194-18000-PAZUL-Servidor",
                    "model" => "N/A",
                    "plate_number" => "AC-194-18000-PAZUL-Servidor",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-195-18000-PAZUL-Alfandega- Porta 15",
                    "model" => "N/A",
                    "plate_number" => "AC-195-18000-PAZUL-Alfandega- Porta 15",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-196-18000-PAZUL-Alfandega- Porta 16",
                    "model" => "N/A",
                    "plate_number" => "AC-196-18000-PAZUL-Alfandega- Porta 16",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-197-18000-PAZUL-Alfandega- Porta 16",
                    "model" => "N/A",
                    "plate_number" => "AC-197-18000-PAZUL-Alfandega- Porta 16",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-198-12000-PAZUL-Dasso Oficial em serviço",
                    "model" => "N/A",
                    "plate_number" => "AC-198-12000-PAZUL-Dasso Oficial em serviço",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 134
                ],
                [
                    "name" => "AC-199-18000-PAZUL-Dasso Oficial em serviço",
                    "model" => "N/A",
                    "plate_number" => "AC-199-18000-PAZUL-Dasso Oficial em serviço",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 108
                ],
                [
                    "name" => "AC-200-18000-PAZUL-Dasso - Cadastro",
                    "model" => "N/A",
                    "plate_number" => "AC-200-18000-PAZUL-Dasso - Cadastro",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 130
                ],
                [
                    "name" => "AC-201-24000-POU-Sala 13",
                    "model" => "N/A",
                    "plate_number" => "AC-201-24000-POU-Sala 13",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-202-24000-POU-Sala 14",
                    "model" => "N/A",
                    "plate_number" => "AC-202-24000-POU-Sala 14",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-203-24000-POU-Sala 16",
                    "model" => "N/A",
                    "plate_number" => "AC-203-24000-POU-Sala 16",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-204-24000-POU-Sala 17",
                    "model" => "N/A",
                    "plate_number" => "AC-204-24000-POU-Sala 17",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-205-24000-POU-Sala 18",
                    "model" => "N/A",
                    "plate_number" => "AC-205-24000-POU-Sala 18",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-206-24000-POU-Sala 18",
                    "model" => "N/A",
                    "plate_number" => "AC-206-24000-POU-Sala 18",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-207-24000-POU-Sala 19",
                    "model" => "N/A",
                    "plate_number" => "AC-207-24000-POU-Sala 19",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-208-24000-POU-Sala 19",
                    "model" => "N/A",
                    "plate_number" => "AC-208-24000-POU-Sala 19",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-209-24000-POU-Sala 20",
                    "model" => "N/A",
                    "plate_number" => "AC-209-24000-POU-Sala 20",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-210-24000-POU-Sala 21",
                    "model" => "N/A",
                    "plate_number" => "AC-210-24000-POU-Sala 21",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-211-24000-POU-Sala 21",
                    "model" => "N/A",
                    "plate_number" => "AC-211-24000-POU-Sala 21",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-212-24000-POU-Sala 22",
                    "model" => "N/A",
                    "plate_number" => "AC-212-24000-POU-Sala 22",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-213-24000-POU-Sala 22",
                    "model" => "N/A",
                    "plate_number" => "AC-213-24000-POU-Sala 22",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-214-24000-POU-Sala 23",
                    "model" => "N/A",
                    "plate_number" => "AC-214-24000-POU-Sala 23",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-215-24000-POU-Sala 24",
                    "model" => "N/A",
                    "plate_number" => "AC-215-24000-POU-Sala 24",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-216-24000-POU-Sala 24",
                    "model" => "N/A",
                    "plate_number" => "AC-216-24000-POU-Sala 24",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-217-24000-POU-Sala 25",
                    "model" => "N/A",
                    "plate_number" => "AC-217-24000-POU-Sala 25",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-218-24000-POU-Sala 25",
                    "model" => "N/A",
                    "plate_number" => "AC-218-24000-POU-Sala 25",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-219-9000-TC-P8-Entrada de camiões",
                    "model" => "N/A",
                    "plate_number" => "AC-219-9000-TC-P8-Entrada de camiões",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 135
                ],
                [
                    "name" => "AC-220-9000-TC-P8-Entrada de camiões",
                    "model" => "N/A",
                    "plate_number" => "AC-220-9000-TC-P8-Entrada de camiões",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 135
                ],
                [
                    "name" => "AC-221-9000-TC-P8-Entrada de camiões",
                    "model" => "N/A",
                    "plate_number" => "AC-221-9000-TC-P8-Entrada de camiões",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 135
                ],
                [
                    "name" => "AC-222-9000-TC-P8-Entrada de camiões",
                    "model" => "N/A",
                    "plate_number" => "AC-222-9000-TC-P8-Entrada de camiões",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 135
                ],
                [
                    "name" => "AC-223-9000-TC-P8-Entrada de camiões",
                    "model" => "N/A",
                    "plate_number" => "AC-223-9000-TC-P8-Entrada de camiões",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 135
                ],
                [
                    "name" => "AC-224-18000-TC-Planificação TC",
                    "model" => "N/A",
                    "plate_number" => "AC-224-18000-TC-Planificação TC",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 113
                ],
                [
                    "name" => "AC-225-18000-TC-Planificação TC",
                    "model" => "N/A",
                    "plate_number" => "AC-225-18000-TC-Planificação TC",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 113
                ],
                [
                    "name" => "AC-226-18000-TC-Sala do superientendente",
                    "model" => "N/A",
                    "plate_number" => "AC-226-18000-TC-Sala do superientendente",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-227-18000-TC-Sala do chefe do TC",
                    "model" => "N/A",
                    "plate_number" => "AC-227-18000-TC-Sala do chefe do TC",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 113
                ],
                [
                    "name" => "AC-228-18000-TC-Vessel Planing TC",
                    "model" => "N/A",
                    "plate_number" => "AC-228-18000-TC-Vessel Planing TC",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 113
                ],
                [
                    "name" => "AC-229-18000-TC-Porta cabina",
                    "model" => "N/A",
                    "plate_number" => "AC-229-18000-TC-Porta cabina",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 136
                ],
                [
                    "name" => "AC-230-64000-TC-Sala de servidor",
                    "model" => "N/A",
                    "plate_number" => "AC-230-64000-TC-Sala de servidor",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 137
                ],
                [
                    "name" => "AC-231-64000-TC-Sala de servidor",
                    "model" => "N/A",
                    "plate_number" => "AC-231-64000-TC-Sala de servidor",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 137
                ],
                [
                    "name" => "AC-232-9000-TC-Segurança portão 8",
                    "model" => "N/A",
                    "plate_number" => "AC-232-9000-TC-Segurança portão 8",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 121
                ],
                [
                    "name" => "AC-233-9000-TC-Segurança portão 8",
                    "model" => "N/A",
                    "plate_number" => "AC-233-9000-TC-Segurança portão 8",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 121
                ],
                [
                    "name" => "AC-234-9000-TC-",
                    "model" => "N/A",
                    "plate_number" => "AC-234-9000-TC-",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 121
                ],
                [
                    "name" => "AC-235-18000-TC-Porta cabina PH 19",
                    "model" => "N/A",
                    "plate_number" => "AC-235-18000-TC-Porta cabina PH 19",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-236-18000-TC-Porta cabina PH 19",
                    "model" => "N/A",
                    "plate_number" => "AC-236-18000-TC-Porta cabina PH 19",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-237-18000-TC-Porta cabina PH 19",
                    "model" => "N/A",
                    "plate_number" => "AC-237-18000-TC-Porta cabina PH 19",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-238-12000-TC-Porta cabina PH 19",
                    "model" => "N/A",
                    "plate_number" => "AC-238-12000-TC-Porta cabina PH 19",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 107
                ],
                [
                    "name" => "AC-239-12000-DASSO-Dasso",
                    "model" => "N/A",
                    "plate_number" => "AC-239-12000-DASSO-Dasso",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 107
                ],
                [
                    "name" => "AC-240-12000-DASSO-Dasso",
                    "model" => "N/A",
                    "plate_number" => "AC-240-12000-DASSO-Dasso",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 107
                ],
                [
                    "name" => "AC-241-12000-DASSO-Dasso",
                    "model" => "N/A",
                    "plate_number" => "AC-241-12000-DASSO-Dasso",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 107
                ],
                [
                    "name" => "AC-242-12000-DASSO-Dasso",
                    "model" => "N/A",
                    "plate_number" => "AC-242-12000-DASSO-Dasso",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 107
                ],
                [
                    "name" => "AC-243-12000-DASSO-Dasso",
                    "model" => "N/A",
                    "plate_number" => "AC-243-12000-DASSO-Dasso",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 107
                ],
                [
                    "name" => "AC-244-12000-DASSO-Dasso",
                    "model" => "N/A",
                    "plate_number" => "AC-244-12000-DASSO-Dasso",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 107
                ],
                [
                    "name" => "AC-245-12000-DASSO-Dasso",
                    "model" => "N/A",
                    "plate_number" => "AC-245-12000-DASSO-Dasso",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 107
                ],
                [
                    "name" => "AC-246-12000-DASSO-Dasso",
                    "model" => "N/A",
                    "plate_number" => "AC-246-12000-DASSO-Dasso",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 107
                ],
                [
                    "name" => "AC-247-12000-DASSO-Dasso",
                    "model" => "N/A",
                    "plate_number" => "AC-247-12000-DASSO-Dasso",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 107
                ],
                [
                    "name" => "AC-248-12000-DASSO-Dasso",
                    "model" => "N/A",
                    "plate_number" => "AC-248-12000-DASSO-Dasso",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 107
                ],
                [
                    "name" => "AC-249-12000-DASSO-Dasso",
                    "model" => "N/A",
                    "plate_number" => "AC-249-12000-DASSO-Dasso",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 107
                ],
                [
                    "name" => "AC-250-24000-DASSO-Recapcao",
                    "model" => "N/A",
                    "plate_number" => "AC-250-24000-DASSO-Recapcao",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-251-18000-TC - TRI-Chefe do Parque",
                    "model" => "N/A",
                    "plate_number" => "AC-251-18000-TC - TRI-Chefe do Parque",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-252-18000-TC - TRI-TC",
                    "model" => "N/A",
                    "plate_number" => "AC-252-18000-TC - TRI-TC",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-253-18000-TC - TRI-TCG",
                    "model" => "N/A",
                    "plate_number" => "AC-253-18000-TC - TRI-TCG",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-254-18000-G1-Cabine do Operador G1",
                    "model" => "N/A",
                    "plate_number" => "AC-254-18000-G1-Cabine do Operador G1",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-255-9000-G1-Cabine de conefrente G1",
                    "model" => "N/A",
                    "plate_number" => "AC-255-9000-G1-Cabine de conefrente G1",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 138
                ],
                [
                    "name" => "AC-256-18000-G1-Sala Electrica G1",
                    "model" => "N/A",
                    "plate_number" => "AC-256-18000-G1-Sala Electrica G1",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-257-18000-G1-Sala Electrica G2",
                    "model" => "N/A",
                    "plate_number" => "AC-257-18000-G1-Sala Electrica G2",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-258-18000-G2-Cabine do Operador",
                    "model" => "N/A",
                    "plate_number" => "AC-258-18000-G2-Cabine do Operador",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-259-12000-G2-Cabine de conefrente",
                    "model" => "N/A",
                    "plate_number" => "AC-259-12000-G2-Cabine de conefrente",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 107
                ],
                [
                    "name" => "AC-260-18000-G3-Cabine do Operador",
                    "model" => "N/A",
                    "plate_number" => "AC-260-18000-G3-Cabine do Operador",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-261-12000-G3-Cabine de conefrente",
                    "model" => "N/A",
                    "plate_number" => "AC-261-12000-G3-Cabine de conefrente",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 107
                ],
                [
                    "name" => "AC-262-18000-G4-Cabine do Operador",
                    "model" => "N/A",
                    "plate_number" => "AC-262-18000-G4-Cabine do Operador",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-263-12000-G4-Cabine de conefrente",
                    "model" => "N/A",
                    "plate_number" => "AC-263-12000-G4-Cabine de conefrente",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 139
                ],
                [
                    "name" => "AC-264-18000-G4-Sala Electrica",
                    "model" => "N/A",
                    "plate_number" => "AC-264-18000-G4-Sala Electrica",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-265-18000-G4-Sala Electrica",
                    "model" => "N/A",
                    "plate_number" => "AC-265-18000-G4-Sala Electrica",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-266-18000-G5-Cabine do Operador",
                    "model" => "N/A",
                    "plate_number" => "AC-266-18000-G5-Cabine do Operador",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-267-24000-G5-Sala Electrica",
                    "model" => "N/A",
                    "plate_number" => "AC-267-24000-G5-Sala Electrica",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 96
                ],
                [
                    "name" => "AC-268-18000-PCB-Porta cabine movel",
                    "model" => "N/A",
                    "plate_number" => "AC-268-18000-PCB-Porta cabine movel",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-274-18000-P05-TC",
                    "model" => "N/A",
                    "plate_number" => "AC-274-18000-P05-TC",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-275-18000-P05-ALfandega",
                    "model" => "N/A",
                    "plate_number" => "AC-275-18000-P05-ALfandega",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-276-18000-P05-MECS",
                    "model" => "N/A",
                    "plate_number" => "AC-276-18000-P05-MECS",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ],
                [
                    "name" => "AC-277-9000-P05-TC",
                    "model" => "N/A",
                    "plate_number" => "AC-277-9000-P05-TC",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 121
                ],
                [
                    "name" => "AC-278-18000-PFR-Parque frigorifico",
                    "model" => "N/A",
                    "plate_number" => "AC-278-18000-PFR-Parque frigorifico",
                    "status" => 1,
                    "is_active" => 1,
                    "created_at"=> now(),
                    "equipment_fleet_id" => 97
                ]
            ]
        );
    }
}
