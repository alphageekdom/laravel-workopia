<x-layout>
    <div
        class="mx-auto mt-12 w-full rounded-lg bg-white p-8 py-12 shadow-md md:max-w-xl"
    >
        <h2 class="mb-4 text-center text-4xl font-bold">Register</h2>
        <form method="POST" action="{{ route("register.store") }}">
            @csrf
            <x-inputs.text id="name" name="name" placeholder="Full name" />
            <x-inputs.text
                id="email"
                name="email"
                type="email"
                placeholder="Email address"
            />
            <x-inputs.text
                id="password"
                name="password"
                type="password"
                placeholder="Password"
            />
            <x-inputs.text
                id="password_confirmation"
                type="password"
                name="password_confirmation"
                placeholder="Confirm password"
            />

            <button
                type="submit"
                class="w-full rounded bg-blue-500 px-4 py-2 text-white hover:bg-blue-600 focus:outline-none"
            >
                Register
            </button>

            <p class="mt-4 text-gray-500">
                Already have an account?
                <a
                    class="text-blue-900 hover:underline"
                    href="{{ route("login") }}"
                >
                    Login
                </a>
            </p>
        </form>
    </div>
</x-layout>
