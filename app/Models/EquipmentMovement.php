<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EquipmentMovement extends Model
{
    //
    protected $guarded = [];

    public function equipment(){
        return $this->hasOne(Equipment::class, 'id', 'equipment_id');
    }

    public function status()
    {
        return $this->hasOne(EquipmentMovementStatus::class, 'id', 'equipment_movement_status_id');
    }
}
