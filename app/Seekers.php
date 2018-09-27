<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seekers extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'seekers';

    protected $fillable = [
        'user_id', 'profile_photo', 'resume', 'resume_file_path',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function experiences()
    {
        return $this->hasMany('App\SeekerExperiences', 'seeker_id');
    }

    public function educations()
    {
        return $this->hasMany('App\SeekerEducationDetails', 'seeker_id');
    }

    public function skills()
    {
        return $this->hasManyThrough('App\TechnicalSkills', 'App\SeekerSkills',
            'seeker_id', 'id', 'id', 'skill_id');
    }

    public function jobApplications()
    {
        return $this->hasMany('App\JobApplications');
    }
}
