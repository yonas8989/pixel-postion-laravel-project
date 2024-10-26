<x-layout>
<div class="w-fll">
    <section class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 p-8 rounded-lg shadow-xl text-center max-w-lg mx-auto mt-10 ">
        <!-- Heading -->
        <h1 class="text-3xl font-bold text-white mb-6">Let Us Find a Great Job for You</h1>
    
        <!-- Form -->
        <form action="" class="flex flex-col items-center space-y-4">
            <input 
                type="text" 
                placeholder="Search for a job..." 
                class="w-full px-4 py-3 rounded-lg shadow-md text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-300 transition"
            />
            <button 
                type="submit" 
                class="px-6 py-2 mt-4 text-lg font-semibold text-white bg-indigo-600 rounded-lg shadow hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400 transition duration-300"
            >
                Search
            </button>
        </form>
    </section>
    
    <section class="bg-gray-800 py-12">
        <div class="container mx-auto px-4">
            <!-- Section Heading -->
            <x-section-heading class="text-center text-3xl font-semibold text-white mb-8">
                Featured Jobs
            </x-section-heading>
    
            <!-- Job Card Grid -->
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Job Cards -->
                <x-job-card class="transform transition duration-300 hover:scale-105 hover:shadow-lg bg-gray-900 rounded-lg p-6"></x-job-card>
                <x-job-card class="transform transition duration-300 hover:scale-105 hover:shadow-lg bg-gray-900 rounded-lg p-6"></x-job-card>
                <x-job-card class="transform transition duration-300 hover:scale-105 hover:shadow-lg bg-gray-900 rounded-lg p-6"></x-job-card>
            </div>
        </div>
    </section>
    
    <section class="bg-gray-800 py-12">
        <div class="container mx-auto px-4">
            <!-- Section Heading -->
            <x-section-heading class="text-center text-1xl font-semibold text-white mb-8">
                Job Tags
            </x-section-heading>
            <div class="flex flex-wrap mt-4 gap-6">
                <x-tag href="#" >
                    Tag
                </x-tag>
                <x-tag href="#" >
                    Tag
                </x-tag>
                <x-tag href="#" >
                    Tag
                </x-tag>
                <x-tag href="#" >
                    Tag
                </x-tag>
                <x-tag href="#" >
                    Tag
                </x-tag>
                <x-tag href="#" >
                    Tag
                </x-tag>
                <x-tag href="#" >
                    Tag
                </x-tag>
                <x-tag href="#" >
                    Tag
                </x-tag>
                <x-tag href="#" >
                    Tag
                </x-tag>
                <x-tag href="#" >
                    Tag
                </x-tag>
            </div>
            
 
        </div>
    </section>
    
    <section class="bg-gray-800 py-12">
        <div class="container mx-auto px-4">
            <!-- Section Heading -->
            <x-section-heading class="text-center text-3xl font-semibold text-white mb-8">
                Recent Jobs
            </x-section-heading>
            <div class="bg-gray-900 p-6 rounded-lg shadow-lg space-y-6">
                <x-job-card-wide></x-job-card-wide>
                <x-job-card-wide></x-job-card-wide>
                <x-job-card-wide></x-job-card-wide>
                <x-job-card-wide></x-job-card-wide>
            </div>

    

        </div>
    </section>
    
</div>

</x-layout>
