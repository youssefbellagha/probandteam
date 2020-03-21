<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $fillable = [
        'countrie_id','citie_id','image','first_name','last_name','address','email','password','phone','facebook','instagram','github','twitter','gender',
    ];

    public function Countrie(){
        return $this->belongsTo('App\Models\Countrie');
    }

    public function Citie(){
        return $this->belongsTo('App\Models\Citie');
    }

    public function formattedName()
    {
        return $this->first_name . ' ' .$this->last_name;
    }
}


