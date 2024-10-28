<x-layout>
    <x-page-heading>
        Result
    </x-page-heading>
    <div class="bg-gray-900 p-6 rounded-lg shadow-lg space-y-6">
        @foreach ($jobs as $job )
        <x-job-card-wide :$job></x-job-card-wide>

        @endforeach
    </div>
</x-layout>