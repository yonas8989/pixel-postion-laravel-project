<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

use App\Models\Tag;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
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

    //  update a resource 
    public function update(Job $job)
    {
        // validate
        request()->validate([
            "title" => ["required"],
            "salary" => ["required"],
            "location" => ["required"],
            "schedule" => ["required", Rule::in(["Full time", "Part time"])],
            "url" => ["required", 'active_url'],
            "tags" => ["nullable"]

        ]);

        //update
        $job->update([
            "title" => request("title"),
            "salary" => request("salary"),
            "location" => request("location"),
            "schedule" => request("schedule"),
            "url" => request("url"),
            // "tags" => request("tags")
        ]);
        return redirect("/");
    }

    // delete resourece 
    public function destroy(Job $job)
    {
        $job->delete();
        redirect("/");
    }
}
