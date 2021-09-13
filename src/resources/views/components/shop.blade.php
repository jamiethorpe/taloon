<x-layouts.app>
    <div class="container mx-auto">
        <div class="text-center mt-24">
            <h2 class="text-2xl">
                Welcome back to <span class="text-blue-500">{{ $user->name }}'s</span> shop
            </h2>
            <h1 class="text-blue-500 text-5xl">
                {{ $shop->name }}
            </h1>
        </div>
        <div class="mt-8 grid grid-cols-3 gap-x-6">
            <div class="col-span-3">Current Gold {{ $shop->gold }}</div>
            <div class="col-span-2">
                <img src="{{ @asset('img/fantasy_shop.png') }}" alt="Your shop">
                <x-card title="Your Adventurers" class="mt-6">
                    <div class="w-full">
                        @foreach($ownedAdventurers as $adventurer)
                            <div class="w-4/12 flex flex-col items-center justify-center">
                                <div>Level {{ $adventurer->level }} {{ $adventurer->class }}</div>
                                <img class="max-h-32" src="{{ asset('img/'.$adventurer->sprite) }}" alt="">
                                <div>{{ $adventurer->name }}</div>
                            </div>
                        @endforeach
                    </div>
                </x-card>
            </div>
            <div class="col-span-1">
                <x-card title="Barracks">
                    <div class="w-full flex flex-row justify-evenly">
                        @foreach($adventurers as $adventurer)
                            <div class="flex flex-col items-center justify-center">
                                <div>Level 1 {{ $adventurer->class }}</div>
                                <img class="max-h-32" src="{{ asset('img/'.$adventurer->sprite) }}" alt="">
                                <div>{{ $adventurer->cost }} Gold</div>
                                <button class="inline-block bg-green-500 text-white px-5 py-3 rounded-lg shadow-sm uppercase tracking-wider font-semibold mx-4">
                                    Hire
                                </button>
                            </div>
                        @endforeach
                    </div>
                </x-card>

                <x-card title="Dungeons" class="mt-6">
                    <div class="w-full flex flex-row flex-wrap justify-start">
                        @foreach($shop->dungeons as $dungeon)
                            <div class="w-4/12 flex flex-col items-center justify-center pt-4">
                                <div class="font-medium">{{ $dungeon->name }}</div>
                                <div>Level {{ $dungeon->level }}</div>
                                <div>{{ $dungeon->experience }} XP</div>
                                <button class="inline-block bg-red-500 text-white px-5 py-3 rounded-lg shadow-sm uppercase tracking-wider font-semibold mx-4">
                                    Enter
                                </button>
                            </div>
                        @endforeach
                    </div>
                </x-card>
            </div>
        </div>
    </div>
</x-layouts.app>
