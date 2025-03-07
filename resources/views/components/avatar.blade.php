@props([
    "user",
])

<div class="mt-2 flex justify-center">
    <img
        src="{{ asset("storage/" . $user->avatar) }}"
        alt="{{ $user->name }}"
        class="h-32 w-32 rounded-full object-cover"
    />
</div>
