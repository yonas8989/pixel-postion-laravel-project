<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pixel-project</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="bg-gray-800 text-white py-4">
        <nav class="container mx-auto flex items-center justify-between px-4">
            <!-- Logo Section -->
            <div class="flex items-center space-x-2">
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.jpg') }}" alt="Logo" class="h-10 w-10 object-cover rounded-full">
                </a>
                <span class="text-xl font-bold">Pixel Project</span>
            </div>

            <!-- Links Section -->
            <div class="hidden md:flex space-x-6">
                <a href="#" class="hover:text-blue-400 transition duration-200">Jobs</a>
                <a href="#" class="hover:text-blue-400 transition duration-200">Careers</a>
                <a href="#" class="hover:text-blue-400 transition duration-200">Salaries</a>
                <a href="#" class="hover:text-blue-400 transition duration-200">Companies</a>
            </div>

            <!-- Post a Job Button -->
            <div>
                <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg transition duration-200">
                    Post a Job
                </a>
            </div>

            <!-- Mobile Menu Button (for small screens) -->
            <div class="md:hidden">
                <button class="text-white focus:outline-none">
                    <!-- Hamburger Icon -->
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </nav>
    </div>

    <main class="container mx-auto py-8 px-4">
        {{ $slot }}
    </main>

</body>
</html>
