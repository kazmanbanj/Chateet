<div class="border border-gray-300 rounded-lg">
    <div class="flex p-4 {{ $loop->last ? '' : 'border-b border-b-gray-400' }} ">
        <div class="mr-2 flex-shrink-0">
            <a href="{{ $chat->user->path() }}">
                {{-- URL::asset('avatars/'. $chat->user->id .'/'. str_replace('http://chateet.herokuapp.com/', '',  --}}
                <img src="{!! $chat->user->avatar !!}"  class="rounded-full mr-2" style="width:50px; height:50px;">
            </a>
        </div>

        <div>
            <a href="{{ $chat->user->path() }}">
                <h5 class="font-bold">{{ $chat->user->name }}</h5>
            </a>
            <h6 class="text-sm text-gray-600">Posted {{ $chat->created_at->diffForHumans() }}</h6>
            <p class="text-sm mb-3">{{ $chat->body }}</p>

            <!-- zondicon icons here -->
            @auth
                <x-like-buttons :chat="$chat" />
            @endauth
        </div>
    </div>
</div>
