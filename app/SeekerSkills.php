<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeekerSkills extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'seeker_skills';

    public function details()
    {
        return $this->belongsTo('App\TechnicalSkills', 'skill_id', 'id');
    }
}
