<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\StoreRecruiterDetails;
use App\Http\Controllers\Controller;
use App\Recruiters;
use App\User;
use Illuminate\Support\Facades\Auth;

class StepTwoDetails extends Controller
{
    public function index()
    {
        return view('auth.step-2.recruiter', [
            'title' => 'Analysed | Recruiter Registration',
        ]);
    }

    public function store(StoreRecruiterDetails $request)
    {
        $validated = $request->validated();

        $logoPath = [
            0 => null,
            1 => null,
        ];

        if ($request->hasFile('organization_logo')) {
            $logoPath = $validated['organization_logo']->store('public');
            $logoPath = explode('/', $logoPath, 2);
        }

        $recruiter = new Recruiters([
            'organization_name' => preg_replace('/\s+/', ' ', $validated['organization_name']),
            'office_address_line_1' => preg_replace('/\s+/', ' ', $validated['office_address_line_1']),
            'office_address_line_2' => $validated['office_address_line_1'] ?
                                    preg_replace('/\s+/', ' ', $validated['office_address_line_1']) :
                                    $validated['office_address_line_1'],
            'designation' => preg_replace('/\s+/', ' ', $validated['designation']),
            'organization_logo' => $logoPath[1],
        ]);

        $user = User::find(Auth::user()->id);

        $recruiter->user()->associate($user)->save();

        return redirect('/dashboard');
    }
}
