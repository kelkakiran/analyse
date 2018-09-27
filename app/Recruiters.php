<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruiters extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'recruiters';

    protected $fillable = [
        'organization_name', 'office_address_line_1', 'office_address_line_2', 'designation', 'organization_logo',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function jobOpenings()
    {
        return $this->hasMany('App\Jobs', 'recruiter_id', 'id');
    }

//    public function jobApplicants()
//    {
//        return $this->hasManyThrough('App\Users', 'App\JobApplications', 'seeker_id',
//            'job_id', 'id', 'id'
//        );
//    }
}
