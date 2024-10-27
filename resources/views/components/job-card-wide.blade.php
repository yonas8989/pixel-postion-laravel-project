@props(['job'])
<div class="bg-gray-700 shadow-lg p-6 flex-column justify-between items-center mb-4 border-dashed border-2 border-transparent hover:border-indigo-400 rounded-lg transition duration-300 ease-in-out">
    <div>
        <x-employer-logo></x-employer-logo>
        <div>
            <div class="text-slate-400 font-semibold mb-4">Laracasts</div>
            <h4 class="text-xl font-semibold text-slate-100 hover:text-indigo-400 transition duration-300 ease-in-out">Video Producer</h4>
            <p class="text-slate-300 mt-2">Full Time - from $60,000</p> <div class="text-slate-400 font-semibold mb-4">Laracasts</div>
            <h4 class="text-xl font-semibold text-slate-100 hover:text-indigo-400 transition duration-300 ease-in-out">Video Producer</h4>
            <p class="text-slate-300 mt-2">Full Time - from $60,000</p>
        </div>

    </div>
    <div class="flex items-center mt-10 space-x-4">
        <div class="flex space-x-2 gap-4">
            @foreach ($job->tags as $tag )
            <x-tag :$tag>back end</x-tag>
                
            @endforeach

        </div>

    </div>
</div>
