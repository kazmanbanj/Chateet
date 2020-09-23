<x-app>
    <header class="mb-6">
        <div class="">
            <img src="{{ $user->avatar }}" alt="" class="rounded-lg border-none h-full mb-2 bg-gray-400 mr-auto ml-auto" style="height:300px; width: 300px; background-image: url('/images/test1.jpg'); background-size:cover">
            <!-- <img src="{{ $user->avatar }}" alt="" class="rounded-lg mr-2 mb-8 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2" width="150" style="left: 50%"> -->
        </div>

        <div class="flex justify-between items-center mb-3">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
            @if (auth()->user()->is($user))
                <a href="{{ $user->path('edit') }}" class="text-xs py-2 px-2 text-black rounded-full border border-gray-300 mr-2">Edit Profile</a>
            @endif
                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>

        <div class="text-center">
            <h3><b>My Favourite Quote</b></h3>
            <p class="text-sm justify-between">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis tempora in tenetur dolorem officiis! Perferendis modi maxime, aut dolores similique voluptas consequuntur fugiat ipsa, cupiditate excepturi soluta sunt officia quod.</p>
        </div>

    </header>

    <hr>
    @include ('timeline', [
        'chats' => $user->chats
    ])
</x-app>