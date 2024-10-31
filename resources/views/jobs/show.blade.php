<x-layout>
    <x-page-heading>
        JOB
    </x-page-heading>
    <div class="bg-gray-800 shadow-lg p-6 flex flex-col justify-between mb-4 border-dashed border-2 border-transparent hover:border-indigo-500 rounded-lg transition duration-300 ease-in-out transform hover:scale-105 dark:bg-gray-900 dark:border-gray-700">
        <!-- Job Header -->
        <div class="flex items-start justify-between">
            <!-- Employer Logo and Job Info -->
            <div class="flex items-start space-x-4">
                <!-- Company Logo -->
                <x-employer-logo :employer="$job->employer" />
    
                <!-- Job Details -->
                <div class="px-4">
                    <div class="text-gray-400 font-semibold mb-4 transition duration-300 ease-in-out hover:text-indigo-400 dark:text-gray-300 dark:hover:text-indigo-500">
                        {{ $job->employer->name }}
                    </div>
                    <h4 class="text-xl font-semibold text-gray-100 transition duration-300 ease-in-out hover:text-indigo-400 transform hover:scale-105 dark:text-gray-200 dark:hover:text-indigo-500">
                        <a href="{{ $job->url }}"> {{ $job->title }}</a>
                    </h4>
                    <p class="text-gray-300 mt-2 transition duration-300 ease-in-out hover:text-gray-200 dark:text-gray-400 dark:hover:text-gray-300">
                        {{ $job->location }}
                    </p>
                    <p class="text-gray-300 mt-2 transition duration-300 ease-in-out hover:text-gray-200 dark:text-gray-400 dark:hover:text-gray-300">
                        {{ $job->salary }}
                    </p>
                </div>
            </div>
    
            <!-- Buttons for Edit and Delete, aligned right -->
            <div class="flex space-x-4 ml-auto">
                @can("update", $job)
                    <a href="{{ route('jobs.edit', $job->id) }}" class="bg-indigo-900 text-white font-semibold px-5 py-2 rounded-md shadow-md hover:bg-indigo-700 hover:shadow-lg transition duration-300 ease-in-out transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-900 dark:bg-indigo-700 dark:hover:bg-indigo-800">
                        Edit Job
                    </a>
                @endcan
    
                @can("delete", $job)
                    <form action="{{ route('jobs.destroy', $job->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this job?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-800 text-white font-semibold px-5 py-2 rounded-md shadow-md hover:bg-red-600 hover:shadow-lg transition duration-300 ease-in-out transform hover:scale-105 dark:bg-red-600 dark:hover:bg-red-700">
                            Delete Job
                        </button>
                    </form>
                @endcan
            </div>
        </div>
    
        <!-- Tags Section, aligned to bottom -->
        <div class="flex flex-wrap mt-6 space-x-2 gap-2">
            @foreach ($job->tags as $tag)
                <x-tag :tag="$tag" class="transition duration-300 ease-in-out hover:text-indigo-400 dark:hover:text-indigo-500" />
            @endforeach
        </div>
    </div>
    
</x-layout>
