<x-app>
    <header class="mb-6">
        <div class="">
            <img src="{!! URL::asset('avatars/'. $user->id .'/'. str_replace('http://chateet.herokuapp.com/', '', $user->avatar)) !!}" alt="{{ $user->username }}'s avatar" class="rounded-lg border-none h-full mb-2 bg-gray-400 mr-auto ml-auto" style="height:300px; width: 300px;">
        </div>

        <div class="justify-between items-center mb-3 p-5 pt-0">
            <div class="mb-3">
                <h2 class="font-bold text-2xl mb-0 text-center break-all">{{ $user->username }}'s profile</h2>
                <h4 class="text-sm break-all">Name - {{ $user->name }}</h4><hr>
                <p class="text-sm">Time Joined - {{ $user->created_at->diffForHumans() }}</p><hr>
                <!-- <p class="text-sm">{{ $user->birthday ? 'Birthday - ' . $user->birthday : '' }}</p> -->
                <p class="text-sm">{{ $user->gender ? 'Gender - ' . $user->gender : '' }}</p><hr>
                <p class="text-sm break-all">{{ $user->quote ? 'My Favourite Quote - ' . $user->quote : '' }}</p>
            </div>

            <div class="flex">
                @can ('edit', $user)
                    <button><a href="{{ $user->path('edit') }}" class="text-xs py-2 px-2 text-black bg-green-400 rounded-full mr-2">Edit Profile</a></button>
                @endcan
                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>
    </header>

    <hr class="mb-3">
    @include ('timeline', [
        'chats' => $chats
    ])
</x-app>