<?php

namespace App\Models;

use App\Models\Traits\OneToOneTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Doctor extends Model
{
    use HasFactory,OneToOneTrait;

    protected $fillable = [
        "user_id",
        "profession_id",
        "status",
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
