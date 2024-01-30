<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleModel extends Model
{
    use HasFactory;

    // has a make
    public function make()
    {
        return $this->belongsTo('App\Models\Make');
    }
}
