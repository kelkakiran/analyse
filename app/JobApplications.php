<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobApplications extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'job_applications';

    public function applicant()
    {
        return $this->belongsTo('App\Seekers', 'seeker_id', 'id');
    }

    public function job()
    {
        return $this->belongsTo('App\Jobs', 'job_id', 'id');
    }
}
