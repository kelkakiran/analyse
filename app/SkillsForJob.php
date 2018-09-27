<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SkillsForJob extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'skills_for_jobs';

    protected $fillable = [
        'job_id', 'skill_id',
    ];
}
