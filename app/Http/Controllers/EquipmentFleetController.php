<?php

namespace App\Http\Controllers;

use App\Models\EquipmentFleet;
use Illuminate\Http\Request;

class EquipmentFleetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $searchQuery = request('query');

            $departments = EquipmentFleet::query()
            ->when(request('query'),function($query,$searchQuery){
                $query->where('name','like',"%{$searchQuery}%");
            })
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
        $user = EquipmentFleet::create([
            'name' => $data['name'],
        ]);
        return response()->json($user);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $user = EquipmentFleet::find($id);

        return response()->json($user);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $equipment = EquipmentFleet::find($id);
        return response()->json([
            'equipment' => $equipment,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = $request->all();
        $equipment = EquipmentFleet::find($id);
        $equipment->update($data);
        return response()->json($equipment);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        // $equipment = EquipmentFleet::find($id);
        // $equipment->delete();
        // return true;
    }
}
