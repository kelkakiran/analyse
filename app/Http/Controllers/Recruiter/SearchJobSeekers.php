<?php

namespace App\Http\Controllers\Recruiter;

use App\Http\Controllers\Controller;
use App\Seekers;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class SearchJobSeekers extends Controller
{
    private $query;

    public function index(Request $request)
    {
        if ($request->hasAny(['skills', 'education']))
            return $this->getSearchResults();

        $seekers = Seekers::with(['user', 'skills', 'educations', 'experiences'])
            ->limit(10)
            ->get()
            ->map(function ($user) {
                $user['user']['profile_url'] = env('APP_URL') . '/profile/' . $user->id;
                return $user;
            });

        // TODO: Return data in the view.
        return $seekers;
    }

    public function getSearchResults()
    {
        $this->query = Seekers::with(['user', 'skills', 'educations', 'experiences']);

        if (isset($_GET['skills'])) {

            $this->query = $this->query->whereHas('skills', function ($query) {
                $skills = $this->fetchSkills(
                    explode(',', $this->sanitize($_GET['skills']), '5')
                );

                $query->whereIn('name', $skills);
            });
        }

        if (isset($_GET['education'])) {
            $this->query = $this->query->whereHas('educations', function ($query) {

                $course = $this->sanitize($_GET['education']);

                if (strlen($course) > 0) {
                    $query->where('course', $course);
                }
            });
        }

        $this->query = $this->query->paginate(10);

        $seekers = $this->query->map(function ($user) {
            $user['user']['profile_url'] = env('APP_URL') . '/profile/' . $user->id;
            return $user;
        });

        // TODO: Return data in the view.
        return $seekers;
    }

    public function getTotalPageCount()
    {
        if ($this->query instanceof LengthAwarePaginator) {
            return $this->query->total();
        }

        return 0;
    }

    public function getCurrentPage()
    {
        if ($this->query instanceof LengthAwarePaginator) {
            return $this->query->currentPage();
        }

        return 1;
    }


    /**
     * Helper function for fetching required skills from query string.
     *
     * @param $arr
     * @return array
     */
    private function fetchSkills($arr)
    {
        if (! is_array($arr))
            return array();

        $_arr = [];

        for ($i = 0; $i < sizeof($arr) && $i < 4; $i++)
            if ($arr[$i] !== "")
                $_arr[] = $arr[$i];

        return $_arr;
    }

    /**
     * Helper function for sanitizing string.
     *
     * @string $string
     * @return mixed
     */
    private function sanitize($string)
    {
        return filter_var($string, FILTER_SANITIZE_STRING);
    }
}
