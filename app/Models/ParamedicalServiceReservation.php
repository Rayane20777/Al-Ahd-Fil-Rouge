<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ParamedicalServiceReservation extends Model
{
    use HasFactory;

    protected $fillable = [
        "session_id",
        "member_id",
    ] ;

    public function session(): BelongsTo {
        return $this->belongsTo(Session::class);
    }

    public function member(): BelongsTo {
        return $this->belongsTo(Member::class,'menbers_paramedical_services','member_id','paramedical_service_id');
    }
}
