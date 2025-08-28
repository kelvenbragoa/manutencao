<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use App\Models\EquipmentMovement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EntryController extends Controller
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
            ->whereIn('equipment_movement_status_id',[1,2,3,4])
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
        $equipments = Equipment::get();


        return response()->json([
            'equipments' => $equipments,
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

        $exists = EquipmentMovement::where('equipment_id', $data['equipment_id'])
            ->where('equipment_movement_status_id','!=', 8)
            ->exists();

        if ($exists) {
            return response()->json(['message' => 'Este equipamento se encontra na oficina'], 409);
        }

        $user = EquipmentMovement::create([
            'equipment_id' => $data['equipment_id'],
            'entry_time' => now(),
            'entry_by_user_id' => Auth::user()->id,
            'requested_by_user_id' => Auth::user()->id,
            'equipment_movement_status_id'=>1,
            'observation'=>$data['observation'] ?? null,
            'created_by_user_id'=> Auth::user()->id
        ]);
        return response()->json($user);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $user = EquipmentMovement::
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
        $equipment = EquipmentMovement::find($id);
        $fleets = EquipmentMovement::get();
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
        $equipment = EquipmentMovement::find($id);
        $equipment->update($data);
        return response()->json($equipment);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        // $equipment = EquipmentMovement::find($id);
        // $equipment->delete();
        // return true;
    }

    public function nextstage(string $id)
    {
        $equipment = EquipmentMovement::findOrFail($id);

        // Pega o status atual
        $currentStatus = $equipment->equipment_movement_status_id;

        // Calcula o próximo
        $nextStatus = $currentStatus < 8 ? $currentStatus + 1 : 8; // não passa do último

        // Atualiza
        // Executa ações específicas antes de atualizar
        switch ($nextStatus) {

            case 2: // Na Oficina
                $equipment->approved_at = now();
                $equipment->approved_by_user_id = Auth::user()->id;
                break;

            case 3: // Em Manutenção
                $equipment->in_maintenance_at = now();
                $equipment->in_maintenance_by_user_id = Auth::user()->id;
                break;

            case 4: // Em Inspeção
                $equipment->maintenance_done_at = now();
                $equipment->maintenance_done_by_user_id = Auth::user()->id;
                
                break;

            case 5: // Manutenção Concluída
                $equipment->inspection_at = now();
                $equipment->inspection_done_by_user_id = Auth::user()->id;
                break;

            case 6: // Fora da Oficina
                $equipment->authorized_exit_at = now();
                $equipment->authorized_exit_by_user_id = Auth::user()->id;
                break;
            case 7: // Finalizado
                $equipment->exit_time = now();
                $equipment->exit_by_user_id = Auth::user()->id;
                break;
            case 8: // Finalizado
                $equipment->exit_time = now();
                $equipment->exit_by_user_id = Auth::user()->id;
                break;

        }

    // Atualiza status
        $equipment->equipment_movement_status_id = $nextStatus;
        $equipment->save();
        // $equipment->update([
        //     'equipment_movement_status_id' => $nextStatus
        // ]);

        return response()->json([
            'success' => true,
            'message' => 'Status atualizado com sucesso.',
            'new_status_id' => $nextStatus
        ]);
    }


    public function movements(){

        $searchQuery = request('query');
            $equipments = EquipmentMovement::query()
            ->with('equipment.fleet')
            ->with('status')
            // ->whereIn('equipment_movement_status_id',[1,2,3])
            ->orderBy('id','desc')
            ->paginate(100);
            return response()->json($equipments);
    }
}
