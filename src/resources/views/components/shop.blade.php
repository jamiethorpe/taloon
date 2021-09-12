<x-layouts.app>
    <div class="container">
        <div class="text-center mt-32">
            <h2 class="text-2xl">
                Welcome back to <span class="text-blue-500">{{ $user->name }}'s</span> shop
            </h2>
            <h1 class="text-blue-500 text-5xl">
                {{ $shop->name }}
            </h1>
        </div>
        <div class="mt-8 grid grid-cols-3">
            <div class="col-span-3">Current Gold {{ $shop->gold }}</div>
            <div class="col-span-2">
                <img src="{{ @asset('img/fantasy_shop.png') }}" alt="Your shop">
            </div>
            <div class="col-span-1">
                <div>Adventurers</div>
                <div>Dungeons</div>
            </div>
        </div>
    </div>
</x-layouts.app>
