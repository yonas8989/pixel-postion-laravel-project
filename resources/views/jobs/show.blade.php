<x-layout>
    <x-page-heading>
        JOB
    </x-page-heading>
    <div class="bg-gray-800 shadow-lg p-6 flex flex-col justify-between items-center mb-4 border-dashed border-2 border-transparent hover:border-indigo-500 rounded-lg transition duration-300 ease-in-out transform hover:scale-105 dark:bg-gray-900 dark:border-gray-700">
    
        <!-- Job Information -->
        <div class="flex items-center space-x-4">
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
    
        <!-- Tags and Button -->
        <div class="flex items-center mt-10 space-x-4">
            <!-- Tags -->
            <div class="flex space-x-2 gap-4">
                @foreach ($job->tags as $tag)
                <x-tag :tag="$tag" class="transition duration-300 ease-in-out hover:text-indigo-400 dark:hover:text-indigo-500" />
                @endforeach
            </div>
        </div>
    
        <!-- Delete Button -->
        <form action="{{ route('jobs.destroy', $job->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this job?');" class="mt-4 w-full flex justify-center">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition duration-300 ease-in-out dark:bg-red-600 dark:hover:bg-red-700">
                Delete Job
            </button>
        </form>
    </div>
    


</x-layout>
