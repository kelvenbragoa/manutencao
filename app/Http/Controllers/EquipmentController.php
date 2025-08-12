<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use App\Models\EquipmentFleet;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EquipmentController extends Controller
{
    public function index()
    {
        //
        $searchQuery = request('query');

            $departments = Equipment::query()
            ->when(request('query'),function($query,$searchQuery){
                $query->where('name','like',"%{$searchQuery}%");
            })
            ->with('fleet')
            ->orderBy('name','asc')
            ->paginate();

            return response()->json($departments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $fleets = EquipmentFleet::get();


        return response()->json([
            'fleets' => $fleets,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        // $request->validate([
        //     'name'=>'required|string',
        //     'email'=>'required|string|email|unique:users',
        //     'role_id'=>'required',
        //     'password'=>'required|min:8'
        // ]);
        $user = Equipment::create([
            'name' => $data['name'],
            'plate_number' => $data['plate_number'],
            'equipment_fleet_id' => $data['equipment_fleet_id'],
            'model' => $data['model'],
            'status'=>1
        ]);
        return response()->json($user);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $user = Equipment::
        with('role')
        ->find($id);

        return response()->json($user);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $equipment = Equipment::find($id);
        $fleets = EquipmentFleet::get();
        return response()->json([
            'equipment' => $equipment,
            'fleets' => $fleets,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = $request->all();
        $equipment = Equipment::find($id);
        $equipment->update($data);
        return response()->json($equipment);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        // $equipment = Equipment::find($id);
        // $equipment->delete();
        // return true;
    }
}
