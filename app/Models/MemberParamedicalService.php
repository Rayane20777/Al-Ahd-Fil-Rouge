<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;

class MemberParamedicalService extends Model
{
    use HasFactory;

    protected $fillable = [
        "member_id",
        "paramedical_service_id",
    ] ;

    public function member():BelongsToMany
    {
        return $this->belongsToMany(Member::class);
    }

    public function paramedicalService():BelongsToMany
    {
        return $this->belongsToMany(ParamedicalService::class);
    }
}
