<div class="border border-gray-300 rounded-lg">
    <div class="flex p-4 {{ $loop->last ? '' : 'border-b border-b-gray-400' }} ">
        <div class="mr-2 flex-shrink-0">
            <a href="{{ $chat->user->path() }}">
                <img src="{{ $chat->user->avatar }}" alt="" class="rounded-full mr-2" width="50" height="50">
            </a>
        </div>

        <div>
            <a href="{{ $chat->user->path() }}">
                <h5 class="font-bold mb-4">{{ $chat->user->name }}</h5>
            </a>
            <p class="text-sm">{{ $chat->body }}</p>
        </div>
    </div>
</div>