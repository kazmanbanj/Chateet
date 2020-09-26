<x-app>
    <header class="mb-6">
        <div class="">
            <img src="{{ $user->avatar }}" alt="" class="rounded-lg border-none h-full mb-2 bg-gray-400 mr-auto ml-auto" style="height:300px; width: 300px;">
        </div>

        <div class="flex justify-between items-center mb-3">
            <div style="max-width:250px">
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                @can ('edit', $user)
                    <button><a href="{{ $user->path('edit') }}" class="text-xs py-2 px-2 text-black bg-green-400 rounded-full mr-2">Edit Profile</a></button>
                @endcan
                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>

        <div class="text-center">
            <h3><b class="text-gray-600">My Favourite Quote</b></h3>
            <p class="text-sm justify-between text-gray-600">{{ $user->quote }}</p>
        </div>
    </header>

    <hr class="mb-3">
    @include ('timeline', [
        'chats' => $chats
    ])
</x-app>