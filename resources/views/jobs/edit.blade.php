<x-layout>
    <div class="container mx-auto p-6 max-w-2xl bg-gray-800 rounded-lg shadow-lg dark:bg-gray-900">
        <h2 class="text-2xl font-bold text-gray-100 mb-6 dark:text-gray-200">Edit Job</h2>
    
        <form action="{{ route('jobs.update', $job->id) }}" method="POST">
            @csrf
            @method('PUT')
    
            <!-- Job Title -->
            <div class="mb-4">
                <label for="title" class="block text-gray-300 mb-1 dark:text-gray-400">Job Title</label>
                <input type="text" id="title" name="title" value="{{ old('title', $job->title) }}" required class="w-full p-2 bg-gray-700 text-gray-100 rounded-md focus:border-indigo-400 focus:ring-indigo-500 dark:bg-gray-800 dark:text-gray-200">
                @error('title')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
    
            <!-- Location -->
            <div class="mb-4">
                <label for="location" class="block text-gray-300 mb-1 dark:text-gray-400">Location</label>
                <input type="text" id="location" name="location" value="{{ old('location', $job->location) }}" required class="w-full p-2 bg-gray-700 text-gray-100 rounded-md focus:border-indigo-400 focus:ring-indigo-500 dark:bg-gray-800 dark:text-gray-200">
                @error('location')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
    
            <!-- Salary -->
            <div class="mb-4">
                <label for="salary" class="block text-gray-300 mb-1 dark:text-gray-400">Salary</label>
                <input type="text" id="salary" name="salary" value="{{ old('salary', $job->salary) }}" required class="w-full p-2 bg-gray-700 text-gray-100 rounded-md focus:border-indigo-400 focus:ring-indigo-500 dark:bg-gray-800 dark:text-gray-200">
                @error('salary')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
    
            <!-- Schedule -->
            <div class="mb-4">
                <label for="schedule" class="block text-gray-300 mb-1 dark:text-gray-400">Schedule</label>
                <select id="schedule" name="schedule" required class="w-full p-2 bg-gray-700 text-gray-100 rounded-md focus:border-indigo-400 focus:ring-indigo-500 dark:bg-gray-800 dark:text-gray-200">
                    <option value="Full time" {{ $job->schedule == 'Full time' ? 'selected' : '' }}>Full time</option>
                    <option value="Part time" {{ $job->schedule == 'Part time' ? 'selected' : '' }}>Part time</option>
                </select>
                @error('schedule')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
    
            <!-- URL -->
            <div class="mb-4">
                <label for="url" class="block text-gray-300 mb-1 dark:text-gray-400">Application URL</label>
                <input type="url" id="url" name="url" value="{{ old('url', $job->url) }}" required class="w-full p-2 bg-gray-700 text-gray-100 rounded-md focus:border-indigo-400 focus:ring-indigo-500 dark:bg-gray-800 dark:text-gray-200">
                @error('url')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
    
            <!-- Tags -->
            <div class="mb-6">
                <label for="tags" class="block text-gray-300 mb-1 dark:text-gray-400">Tags (comma separated)</label>
                <input type="text" id="tags" name="tags" value="{{ old('tags', implode(',', $job->tags->pluck('name')->toArray())) }}" class="w-full p-2 bg-gray-700 text-gray-100 rounded-md focus:border-indigo-400 focus:ring-indigo-500 dark:bg-gray-800 dark:text-gray-200">
                @error('tags')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
    
            <!-- Update Button -->
            <div class="text-center">
                <button type="submit" class="inline-block bg-indigo-900 text-white font-semibold px-5 py-2 rounded-md shadow-md hover:bg-indigo-700 hover:shadow-lg transition duration-300 ease-in-out transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-900 dark:bg-indigo-700 dark:hover:bg-indigo-800">
                    Update Job
                </button>
            </div>
        </form>
    </div>
</x-layout>