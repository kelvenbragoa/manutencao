<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use App\Models\EquipmentFleet;
use App\Models\EquipmentMovement;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function dashboard(){

        $aguardaaprovacao = EquipmentMovement::query()
            ->with('equipment.fleet')
            ->with('status')
            ->where('equipment_movement_status_id',1)
            ->orderBy('id','desc')
            ->get();

        $authorizedin = EquipmentMovement::query()
            ->with('equipment.fleet')
            ->with('status')
            ->where('equipment_movement_status_id',2)
            ->orderBy('id','desc')
            ->get();

        $oficina = EquipmentMovement::query()
            ->with('equipment.fleet')
            ->with('status')
            ->where('equipment_movement_status_id',3)
            ->orderBy('id','desc')
            ->get();

        $manutencao = EquipmentMovement::query()
            ->with('equipment.fleet')
            ->with('status')
            ->where('equipment_movement_status_id',4)
            ->orderBy('id','desc')
            ->get();

        $authorizedout = EquipmentMovement::query()
            ->with('equipment.fleet')
            ->with('status')
            ->where('equipment_movement_status_id',5)
            ->orderBy('id','desc')
            ->get();

        return response()->json([
            'in'=> $authorizedin,
            'out'=>$authorizedout,
            'aguardaaprovacao'=>$aguardaaprovacao,
            'oficina'=>$oficina,
            'manutencao'=>$manutencao
        ]);

    }


    public function dashboarddisponibilidade()
    {
        $fleets = EquipmentFleet::with(['equipments.lastmovement','equipments.fleet'])->get();

        $equipments = Equipment::with('lastmovement')->get();
        

        return response()->json([
            'fleet'=>$fleets,
            'equipments'=>$equipments
        ]);
    }
}
