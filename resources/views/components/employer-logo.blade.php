@props(['employer'])

<img src="{{ asset('storage/' . $employer->logo) }}" alt="employer logo"
    class="h-24 w-24 rounded-xl object-cover transition-transform duration-300 ease-in-out transform hover:scale-110 p-2 bg-gray-800 shadow-xl hover:shadow-2xl ring-2 ring-gray-700 hover:ring-gray-500">
