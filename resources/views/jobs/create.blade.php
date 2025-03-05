<x-layout>
    <x-slot name="title">Create Job</x-slot>
    <h1>Create New Job</h1>
    <form action="/jobs" method="POST">
        @csrf
        <div class="my-5">
            <input
                type="text"
                name="title"
                placeholder="title"
                class="border"
                value="{{ old("title") }}"
            />
            @error("title")
                <div class="mt-2 text-sm text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-5">
            <input
                type="text"
                name="description"
                placeholder="description"
                class="border"
                value="{{ old("description") }}"
            />
            @error("description")
                <div class="mt-2 text-sm text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <button
            type="submit"
            class="btn btn-outline-primary border bg-yellow-400 p-2"
        >
            Submit
        </button>
    </form>
</x-layout>
