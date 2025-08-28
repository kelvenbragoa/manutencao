<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index()
    {
        //
        $searchQuery = request('query');

            $vehicles = Vehicle::query()
            ->when(request('query'),function($query,$searchQuery){
                $query->where('plate_number','like',"%{$searchQuery}%");
            })
            ->orderBy('id','desc')
            ->paginate();

            return response()->json($vehicles);
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
        $data = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('vehicles', 'public');
            $data['image'] = $imagePath;
        }

        $vehicle = Vehicle::create([
            'owner' => $data['owner'] ?? null,
            'plate_number' => $data['plate_number'] ?? null,
            'make' => $data['make'] ?? null,
            'status' => $data['status'] ?? null,
            'image' => $data['image'] ?? null,
        ]);

        return response()->json($vehicle);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $user = Vehicle::
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
        $vehicle = Vehicle::find($id);
        // $fleets = vehicleFleet::get();
        return response()->json([
            'vehicle' => $vehicle,
            // 'fleets' => $fleets,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $equipment = Vehicle::find($id);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('vehicles', 'public');
            $data['image'] = $imagePath;
        }

        $equipment->update($data);

        return response()->json($equipment);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        // $equipment = Vehicle::find($id);
        // $equipment->delete();
        // return true;
    }
}
