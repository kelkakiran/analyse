<?php

namespace App\Http\Controllers\JobSeeker;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DemoController extends Controller
{
    public function index(Request $request)
    {
        return view('home', [
            'type' => 'Job-seeker',
        ]);
    }
}
