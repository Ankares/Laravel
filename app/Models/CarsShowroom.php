<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarsShowroom extends Model
{
    public function vehicleDirectory()
    {
        return $this->belongsTo(VehicleDirectory::class, 'vehicle_id');
    }
}
