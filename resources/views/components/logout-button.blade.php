<form method="POST" action="{{ route("logout") }}">
    @csrf
    <button
        type="submit"
        class="ml-4 cursor-pointer text-white hover:underline md:ml-0"
    >
        <i class="fa fa-sign-out"></i>
        Logout
    </button>
</form>
