<?php

namespace App\Policies;

use App\Models\Job;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class JobPolicy
{
    public function update(User $user, Job $job)
    {
        // Check if the user is an employer and owns the job
        return $user->employer && $user->employer->id === $job->employer_id
            ? Response::allow()
            : Response::deny("You do not own this job.");
    }

    public function delete(User $user, Job $job)
    {
        // Check if the user is an employer and owns the job
        return $user->employer && $user->employer->id === $job->employer_id
            ? Response::allow()
            : Response::deny("You do not own this job.");
    }
}
