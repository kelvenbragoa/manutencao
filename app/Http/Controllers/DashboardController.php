<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use App\Models\EquipmentFleet;
use App\Models\EquipmentMovement;
use App\Models\User;
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

    public function statistics(){

        $equipments = Equipment::count();
        $fleets = EquipmentFleet::count();
        $user = User::count();

        $availableMachinesCount = Equipment::where('status', 'available')->count();

        $startDate = EquipmentMovement::min('created_at');
        $endDate = EquipmentMovement::max('created_at');

        if ($startDate && $endDate) {
            $period = \Carbon\CarbonPeriod::create(
                \Carbon\Carbon::parse($startDate)->startOfDay(),
                \Carbon\Carbon::parse($endDate)->endOfDay()
            );

            $barChartData = [];
            foreach ($period as $date) {
                $count = EquipmentMovement::whereDate('created_at', $date->format('Y-m-d'))->count();
                $barChartData[] = [
                    'date' => $date->format('Y-m-d'),
                    'total' => $count
                ];
            }
        } else {
            $barChartData = [];
        }


        $aguardaAprovacaoCount = EquipmentMovement::where('equipment_movement_status_id', 1)->count();
        $aguardandoEntradaCount = EquipmentMovement::where('equipment_movement_status_id', 2)->count();
        $naOficinaCount = EquipmentMovement::where('equipment_movement_status_id', 3)->count();
        $manutencaoCount = EquipmentMovement::where('equipment_movement_status_id', 4)->count();
        $manutencaoDoneCount = EquipmentMovement::where('equipment_movement_status_id', 5)->count();
        $outOficinaCount = EquipmentMovement::where('equipment_movement_status_id', 6)->count();

        return response()->json([
            'fleets'=>$fleets,
            'equipments'=>$equipments,
            'user'=>$user,
            'availableMachinesCount'=>$availableMachinesCount,
            'barChartData'=>$barChartData,
            'aguardaAprovacaoCount'=>$aguardaAprovacaoCount,
            'aguardandoEntradaCount'=>$aguardandoEntradaCount,
            'naOficinaCount'=>$naOficinaCount,
            'manutencaoCount'=>$manutencaoCount,
            'manutencaoDoneCount'=>$manutencaoDoneCount,
            'outOficinaCount'=>$outOficinaCount

        ]);
    }
}
