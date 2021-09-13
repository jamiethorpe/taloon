<div {{ $attributes }} class="shadow-md rounded-lg" >
    <div class="w-full flex items-center justify-between bg-blue-500 text-white rounded-t-lg border-l border-t border-r border-blue-500 border-solid p-2 font-semibold">
        <span>{{ $title }}</span>
    </div>
    <div class="bg-white rounded-b-lg border-l border-b border-r border-gray-300 border-solid p-2">
        {{ $slot }}
    </div>
</div>
