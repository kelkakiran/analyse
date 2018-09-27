<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $recruiterRole = new Role();
        $recruiterRole->name = 'recruiter';
        $recruiterRole->save();

        $jobSeekerRole = new Role();
        $jobSeekerRole->name = 'job-seeker';
        $jobSeekerRole->save();
    }
}
