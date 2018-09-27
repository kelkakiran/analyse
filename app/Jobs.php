<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'jobs';

    protected $fillable = [
        'title', 'description', 'position', 'location', 'min_salary', 'max_salary', 'website', 'email'
    ];

    public function skills()
    {
        return $this->belongsToMany('App\TechnicalSkills', 'skills_for_jobs', 'job_id',
            'skill_id'
        );
    }

    public function recruiter()
    {
        return $this->belongsTo('App\Recruiters');
    }
}
