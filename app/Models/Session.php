<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Session extends Model
{
    use HasFactory;

    protected $fillable = [
        "date","departure_hour","ending_hour","doctor_id","paramedical_service_id"
    ] ;

    public function doctors():BelongsTo
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');    }

    public function paramedical_service():BelongsTo
    {
        return $this->belongsTo(ParamedicalService::class);
    }

    public function paramedical_service_reservation(): HasOne
    {
        return $this->hasOne(ParamedicalSessionReservation::class);
    }
}
