<?php

namespace App\Models;

use App\Models\Traits\OneToOneTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        "first_name",
        "last_name",
        "address",
        "profession_id",

    ] ;

    public function session():HasMany
    {
        return $this->hasMany(Session::class);
    }

    public function profession():BelongsTo
    {
        return $this->belongsTo(Profession::class,);
    }
}
