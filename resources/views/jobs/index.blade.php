<x-layout>
    <x-slot name="title">All Jobs</x-slot>

    <div class="mb-6 grid grid-cols-1 gap-4 md:grid-cols-3">
        @forelse ($jobs as $job)
            <x-job-card :job="$job" />
        @empty
            <p>No jobs available</p>
        @endforelse
    </div>

    {{-- Pagination Link --}}
    {{ $jobs->links() }}
</x-layout>
