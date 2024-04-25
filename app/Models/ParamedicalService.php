<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class ParamedicalService extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        "name",
        "description",
        
    ] ;


    public function session():HasMany
    {
        return $this->hasMany(Session::class);
    }

    public function member():BelongsToMany
    {
        return $this->belongsToMany(Member::class,'menbers_paramedical_services','member_id','paramedical_service_id');
    }


}
