<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class project_agent extends Model
{
    

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'project_agents';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'projet_id',
                  'Agent_id'
              ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];
    
    /**
     * Get the projet for this model.
     *
     * @return App\Models\Projet
     */
    public function projet()
    {
        return $this->belongsTo('App\Models\Project','projet_id');
    }

    /**
     * Get the agent for this model.
     *
     * @return App\Models\Agent
     */
    public function agent()
    {
        return $this->belongsTo('App\Models\Agent','Agent_id');
    }



}
