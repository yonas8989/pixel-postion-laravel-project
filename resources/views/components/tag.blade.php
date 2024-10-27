@props(["tag"]);

<a href="#" class="px-6 py-3 rounded-full text-sm font-semibold text-blue-400 bg-gray-800 hover:bg-blue-900 hover:text-white border border-blue-500 transition duration-300 ease-in-out">
    {{ $tag->name }}
</a>
