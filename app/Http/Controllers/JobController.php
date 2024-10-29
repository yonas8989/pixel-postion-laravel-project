<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use Illuminate\Http\Request;

use App\Models\Tag;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class JobController extends Controller
{
    public function index()
    {
        $featuredJobs = Job::with(["employer"  ,"tags"])->where('featured', true)->latest()->get();
        $jobs = Job::with(["employer"  ,"tags"])->where("featured", false)->latest()->get();
    
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
    public function store(Request $request)
    {
        // validate 
        $attributes = $request->validate([
            "title" => ["required"],
            "salary" => ["required"],
            "location" => ["required"],
            "schedule" => ["required", Rule::in(["Full time", "Part time"])],
            "url" => ["required", 'active_url'],
            "tags" => ["nullable"]

        ]);
        $attributes["featured"] = $request->has('featured');
        // if it pass validation create the job
        $job = Auth::user()->employer->jobs()->create(Arr::except($attributes, ['tags']));
        if ($attributes["tags"] ?? false) {
            foreach (explode(",", $attributes["tags"]) as $tag) {
                $job->tag($tag);
            }
        }
        // after that redirect 

        return redirect("/");
    }

//    show specific resource 
    public function show(Job $job)
    {
        //
    }

//    edit job
    public function edit(Job $job)
    {
        //
    }

//  update a resource 
    public function update(UpdateJobRequest $request, Job $job)
    {
        //
    }

// delete resourece 
    public function destroy(Job $job)
    {
        //
    }
}
