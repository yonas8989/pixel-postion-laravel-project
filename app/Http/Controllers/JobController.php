<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Mail\JobPosted;
use App\Models\Job;
use Illuminate\Http\Request;

use App\Models\Tag;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;

class JobController extends Controller
{
    public function index()
    {
        $featuredJobs = Job::with(["employer", "tags"])->where('featured', true)->latest()->get();
        $jobs = Job::with(["employer", "tags"])->where("featured", false)->latest()->get();

        return view('jobs.index', [
            'jobs' => $jobs,
            'featuredJobs' => $featuredJobs,
            'tags' => Tag::all()
        ]);
    }

    public function create()
    {
        return view("jobs.create");
    }
    public function store(StoreJobRequest $request)
    {
        // validate 
        $attributes = $request->validated();
        $attributes["featured"] = $request->has('featured');
        // if it pass validation create the job
        $job = Auth::user()->employer->jobs()->create(Arr::except($attributes, ['tags']));
        if ($attributes["tags"] ?? false) {
            foreach (explode(",", $attributes["tags"]) as $tag) {
                $job->tag($tag);
            }
        }

        Mail::to($job->employer->user)->queue(new JobPosted($job));

        // after that redirect 

        return redirect("/");
    }

    //    show specific resource 
    public function show(Job $job)
    {
        $job = Job::find($job->id);
        return view("jobs.show", [
            'job' => $job,
        ]);
    }

    //    edit job
    public function edit(Job $job)
    {
        $this->authorize("update", $job);
        return view("jobs.edit", ["job" => $job]);
    }

    public function update(UpdateJobRequest $request, Job $job)
    {
        // Validate the incoming request and get the validated attributes
        $attributes = $request->validated();

        // Update the job attributes except for 'tags'
        $job->update(Arr::except($attributes, ['tags']));

        // If there are tags provided, handle them
        if ($attributes["tags"] ?? false) {
            // Assuming the 'tag' method is defined in the Job model
            // Clear existing tags first if needed (optional)
            $job->tags()->detach(); // Detach existing tags, adjust as per your needs

            foreach (explode(",", $attributes["tags"]) as $tag) {
                $job->tag($tag);
            }
        }

        // Redirect to the home page or another appropriate route
        return redirect("/")->with('success', 'Job updated successfully!');
    }


    // delete resourece 
    public function destroy(Job $job)
    {
        $job->delete();
        redirect("/");
    }
}
