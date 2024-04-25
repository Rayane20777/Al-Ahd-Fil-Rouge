<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        "date",
        "departure_hour",
        "ending_hour",
    ] ;

    public function appointment_reservation() : HasOne
    {
        return $this->hasOne(AppointmentReservation::class);
    }
    
    }

