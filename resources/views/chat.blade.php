<div class="border border-gray-300 rounded-lg">
    <div class="flex p-4 {{ $loop->last ? '' : 'border-b border-b-gray-400' }} ">
        <div class="mr-2 flex-shrink-0">
            <a href="{{ $chat->user->path() }}">
                <img src="{{ $chat->user->avatar }}" alt="" class="rounded-full mr-2" style="width:50px; height:50px; background-image: url('/images/test1.jpg'); background-size:cover">
            </a>
        </div>

        <div>
            <a href="{{ $chat->user->path() }}">
                <h5 class="font-bold">{{ $chat->user->name }}</h5>
            </a>
            <h6 class="text-sm font-bold">Posted: {{ $chat->created_at->diffForHumans() }}</h6>
            <p class="text-sm">{{ $chat->body }}</p>
        </div>
    </div>
</div>