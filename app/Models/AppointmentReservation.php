<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class AppointmentReservation extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        "member_id",
        "appointment_id",
    ] ;
    public function member(): BelongsTo
    {
        return $this->belongsTo(Member::class);
    } 
    
    public function appointment(): BelongsTo
    {
        return $this->belongsTo(Appointment::class);
    } 
    
    
}
