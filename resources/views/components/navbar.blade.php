<nav
    class="bg-blue-600 text-white dark:bg-blue-800 pt-2 pb-2 pl-4 pr-4 flex justify-between items-center m-2 rounded-xl">
    <div class="flex items-center gap-2">
        <img src="{{ Storage::url('ajatic_logo.jpeg') }}" alt="Logo" class="rounded-full h-12 w-12">

        <h1 class="text-2xl italic font-semibold">{{ config('app.name') }}</h1>
    </div>
    <div>
        {{ $slot }}
    </div>
</nav>
