<?php

namespace App\Models;

use App\Models\Traits\OneToOneTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admin extends Model
{
    use HasFactory,OneToOneTrait,SoftDeletes;

    protected $fillable = [
        "user_id",
    ] ;
}
