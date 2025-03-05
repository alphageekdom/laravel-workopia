@props(["title" => "Find Your Dream Job"])

<section
    class="hero relative flex min-h-[50vh] items-center justify-center bg-cover bg-center bg-no-repeat"
>
    <div class="overlay"></div>
    <div class="z-10 container mx-auto text-center">
        <h2 class="mb-8 text-4xl font-bold text-white md:text-5xl">
            {{ $title }}
        </h2>
        <form class="mx-5 block space-y-2 md:mx-auto md:space-x-2">
            <input
                type="text"
                name="keywords"
                placeholder="Keywords"
                class="w-full bg-white px-4 py-3 focus:outline-none md:w-72"
            />
            <input
                type="text"
                name="location"
                placeholder="Location"
                class="w-full bg-white px-4 py-3 focus:outline-none md:w-72"
            />
            <button
                class="w-full bg-blue-700 px-4 py-3 text-white hover:bg-blue-600 focus:outline-none md:w-auto"
            >
                <i class="fa fa-search mr-1"></i>
                Search
            </button>
        </form>
    </div>
</section>
