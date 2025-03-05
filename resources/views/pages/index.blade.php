<x-layout>
    <h2 class="mb-4 border border-gray-300 p-3 text-center text-3xl font-bold">
        Welcome to Workopia
    </h2>

    <div class="mb-6 grid grid-cols-1 gap-4 md:grid-cols-3">
        @forelse ($jobs as $job)
            <x-job-card :job="$job" />
        @empty
            <p>No jobs available</p>
        @endforelse
    </div>

    <a href="{{ route("jobs.index") }}" class="block text-center text-xl">
        <span
            class="inline-flex items-center gap-3 text-xl text-black transition-colors duration-200 hover:text-blue-800"
        >
            <i class="fa fa-arrow-alt-circle-right"></i>
            Show All Jobs
        </span>
    </a>

    <x-bottom-banner />
</x-layout>
