<?php

namespace App\Http\Controllers\Recruiter;

use App\Http\Requests\Recruiter\PostNewJob as Request;
use App\Http\Controllers\Controller;
use App\Jobs;
use App\Recruiters;
use App\SkillsForJob;
use App\TechnicalSkills;
use App\User;
use Illuminate\Support\Facades\Auth;

class PostNewJob extends Controller
{
    public function index()
    {
        return view('recruiter.post-job', [
            'user' => Auth::user(),
        ]);
    }

    public function store(Request $request)
    {
        // TODO: Complete this function!!!!
        return view('recruiter.post-job', [
            'user' => Auth::user(),
        ]);

        $validated = $request->validated();


        $job = new Jobs([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'position' => $validated['position'],
            'location' => $validated['location'],
            'min_salary' => $validated['min_salary'],
            'max_salary' => $validated['max_salary'],
            'website' => $validated['website'],
            'email' => $validated['email'],
        ]);

//        Auth::user()->recruiter->jobOpenings()->save($job);
    }
}
