<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarsShowroom extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function vehicleDirectory()
    {
        return $this->belongsTo(VehicleDirectory::class, 'vehicle_id');
    }
}
