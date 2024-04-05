<?php

namespace App\Models;

use App\Models\Traits\OneToOneTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Member extends Model
{
    use HasFactory,OneToOneTrait;

    protected $fillable = [

        "user_id",
        "first_name",
        "last_name",
        "date_of_birth",
        "disorder",
        "description",
        "status",
        
    ] ;
    public function appointment_reservation() : HasOne
    {
        return $this->hasOne(AppointmentReservation::class);
    }

    public function paramedical_session_reservation() : HasMany
    {
        return $this->hasMany(ParamedicalServiceReservation::class);
    }
    
    public function paramedical_service():BelongsToMany
    {
        return $this->belongsToMany(ParamedicalService::class,'menbers_paramedical_services','member_id','paramedical_service_id');
    }

}
