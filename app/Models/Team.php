<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'image','name','position','facebook','instagram','twitter','github'
    ];
}
