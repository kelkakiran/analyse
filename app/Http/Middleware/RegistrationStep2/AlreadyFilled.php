<?php

namespace App\Http\Middleware\RegistrationStep2;

use App\Recruiters;
use App\Seekers;
use Closure;

class AlreadyFilled
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = $request->user();

        if ($user->hasRole('recruiter'))
            if (Recruiters::where('user_id', $user->id)->count() === 1)
                return redirect('/dashboard');

        return $next($request);
    }
}
