<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TechnicalSkills extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'technical_skills';

    public function users()
    {
        return $this->belongsToMany('App\User', 'seeker_skills', 'skill_id', 'user_id');
    }
}
