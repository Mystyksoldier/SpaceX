<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    public function departure()
    {
        return $this->belongsTo(Location::class, 'departure_id');
    }

    public function arrival()
    {
        return $this->belongsTo(Location::class, 'arrival_id');
    }
}
