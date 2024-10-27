@prop(['job'])

<div class="bg-gray-800 rounded-lg shadow-lg p-6 flex flex-col md:flex-row justify-between items-center mb-4 border-2 border-transparent border-dashed hover:border-indigo-400 transition duration-300 ease-in-out space-y-4 md:space-y-0">
    <!-- Job Information -->
    <div class="flex items-center space-x-4 md:space-x-10 px-4 md:px-8 w-full md:w-auto">
        <!-- Company Logo -->
        <img src="http://picsum.photos/120/120" alt="Job Logo" class="h-20 w-20 md:h-16 md:w-16 rounded-lg object-cover shadow-md">

        <div class="px-2 md:px-4">
            <div class="text-slate-400 font-semibold text-center md:text-left">Laracasts</div>
            <h4 class="text-lg md:text-xl font-semibold text-slate-100 hover:text-indigo-400 transition duration-300 ease-in-out text-center md:text-left">Video Producer</h4>
            <p class="text-slate-300 text-center md:text-left">Full Time - from $60,000</p>
        </div>
    </div>

    <!-- Tags and Button -->
    <div class="flex items-center space-x-2 gap-2 justify-center md:justify-end w-full md:w-auto">
        @foreach ($job ->tags as $tag )
        <x-tag :$tag> backend</x-tag>
        @endforeach


    </div>
</div>