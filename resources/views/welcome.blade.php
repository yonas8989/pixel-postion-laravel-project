<x-layout>
<div>
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
            <x-section-heading class="text-center text-3xl font-semibold text-white mb-8">
                Job Tags
            </x-section-heading>
            <div class="flex flex-wrap gap-3 mt-4">
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
