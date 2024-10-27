<button {{ $attributes->merge(['class' => 'px-6 py-3 bg-black text-white font-semibold rounded-lg shadow-md transition duration-300 ease-in-out hover:bg-gray-800 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500']) }}>
    {{ $slot }}
</button>
