<?php

namespace App\Http\Middleware\RegistrationStep2;

use App\Recruiters;
use Closure;

class ValidProfile
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

        if (! $user->hasRole(['recruiter'])) {
            return $next($request);
        }

        /**
         * If recruiter's or job-seeker's profile is complete, move on.
         *
         */
        if (! (Recruiters::where('user_id', $user->id)->count() === 1))
            return redirect('/register/step-2');

        return $next($request);
    }
}
