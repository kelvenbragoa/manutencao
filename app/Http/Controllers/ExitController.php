<?php

namespace App\Http\Controllers;

use App\Models\EquipmentMovement;
use Illuminate\Http\Request;

class ExitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $searchQuery = request('query');

            $departments = EquipmentMovement::query()
            // ->when(request('query'),function($query,$searchQuery){
            //     $query->where('name','like',"%{$searchQuery}%");
            // })
            ->with('equipment.fleet')
            ->with('status')
            ->where('equipment_movement_status_id',5)
            ->orderBy('id','desc')
            ->paginate();

            return response()->json($departments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
