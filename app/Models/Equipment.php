<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    //
    protected $guarded = [];

    public function fleet(){
        return $this->hasOne(EquipmentFleet::class, 'id', 'equipment_fleet_id');
    }
}
