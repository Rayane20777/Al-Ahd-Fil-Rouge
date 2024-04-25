<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MemberParamedicalService extends Model
{
    
    use HasFactory,SoftDeletes;

    protected $table = 'menbers_paramedical_services';

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
