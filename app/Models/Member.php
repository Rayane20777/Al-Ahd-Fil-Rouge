<?php

namespace App\Models;

use App\Models\Traits\OneToOneTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends Model
{
    use HasFactory,OneToOneTrait,SoftDeletes;

    protected $fillable = [

        "user_id",
        "child_first_name",
        "child_last_name",
        "date_of_birth",
        "disorder",
        "status",
        
    ] ;
    public function appointment_reservation() : HasOne
    {
        return $this->hasOne(AppointmentReservation::class);
    }

    public function paramedical_session_reservation() : HasMany
    {
        return $this->hasMany(ParamedicalSessionReservation::class);
    }
    
    public function paramedical_service():BelongsToMany
    {
        return $this->belongsToMany(ParamedicalService::class,'menbers_paramedical_services','member_id','paramedical_service_id');
    }

}
