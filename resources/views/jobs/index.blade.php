<x-layout>

    <div class="w-fll ">
        @if (session('success'))
        <script>
            window.onload = function() {
                alert("{{ session('success') }}");
            };

        </script>
        @endif

        <section class="bg-black p-10 rounded-xl shadow-2xl text-center max-w-lg mx-auto mt-12 transition duration-300 ease-in-out transform hover:scale-105 border border-gray-800 mb-5 ">
            <!-- Heading -->
            <h1 class="text-4xl font-extrabold text-white mb-8">Find Your Dream Job</h1>


            <x-forms.form action="/search " class="w-fll">
                <x-forms.input :label="false" name="q" placeholder="Laravel developer..." />
            </x-forms.form>
        </section>
        <section class="bg-gray-800 py-12">
            <div class="container mx-auto px-4">
                <!-- Section Heading -->
                <x-section-heading class="text-center text-3xl font-semibold text-white mb-8">
                    Featured Jobs
                </x-section-heading>

                <!-- Job Card Grid -->
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($featuredJobs as $job )
                    <x-job-card :$job></x-job-card>

                    @endforeach
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
                    @foreach ($tags as $tag )
                    <x-tag :tag="$tag"></x-tag>
                    @endforeach

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
                    @foreach ($jobs as $job )
                    <x-job-card-wide :$job></x-job-card-wide>

                    @endforeach
                </div>
            </div>
        </section>

    </div>

</x-layout>
