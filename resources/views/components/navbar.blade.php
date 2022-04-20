<div class="navbar bg-base-100 flex justify-between">
    <a href="/" class="btn btn-ghost normal-case text-xl">
        <img src="/images/Logo.svg" alt="YouDev logo" class="w-auto h-8">
    </a>
    @if (Str::contains(Route::current()->getName(), 'offer') || Str::contains(Route::current()->getName(), 'project'))
        <div class="space-x-3">
            <a href="{{ Route::current()->getName() == 'offers' ? '/offers/create' : '/projects/create' }}">
                <button class="btn p-2 px-2.5 min-h-fit h-fit border-0 bg-blue-600 rounded-full">+</button>
            </a>
            <a href="/logout">
                <button
                    class="p-2 px-3 border-2 border-blue-600 rounded-full bg-transparent text-black text-sm hover:bg-blue-600 hover:text-white">Logout
                    →</button>
            </a>
        </div>
    @endif
</div>
