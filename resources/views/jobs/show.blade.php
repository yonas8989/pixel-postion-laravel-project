<x-layout>
    <x-page-heading>
        JOB
    </x-page-heading>
    <div class="bg-gray-700 shadow-lg p-6 flex flex-col justify-between items-center mb-4 border-dashed border-2 border-transparent hover:border-indigo-400 rounded-lg transition duration-300 ease-in-out transform hover:scale-105">
        <!-- Job Information -->
        <div class="flex items-center space-x-4">
            <!-- Company Logo -->
            <x-employer-logo :employer="$job->employer" />

            <!-- Job Details -->
            <div class="px-4">
                <div class="text-slate-400 font-semibold mb-4 transition duration-300 ease-in-out hover:text-indigo-400">
                    {{ $job->employer->name }}
                </div>
                <h4 class="text-xl font-semibold text-slate-100 transition duration-300 ease-in-out hover:text-indigo-400 transform hover:scale-105">
                    <a href="{{ $job->url }}"> {{ $job->title }}
                    </a>
                </h4>
                <p class="text-slate-300 mt-2 transition duration-300 ease-in-out hover:text-slate-200">
                    {{ $job->location }}
                </p>
                <p class="text-slate-300 mt-2 transition duration-300 ease-in-out hover:text-slate-200">
                    {{ $job->salary }}
                </p>
            </div>
        </div>

        <!-- Tags and Button -->
        <div class="flex items-center mt-10 space-x-4">
            <!-- Tags -->
            <div class="flex space-x-2 gap-4">
                @foreach ($job->tags as $tag)
                <x-tag :tag="$tag" class="transition duration-300 ease-in-out hover:text-indigo-400" />
                @endforeach
            </div>
        </div>
    </div>



</x-layout>
