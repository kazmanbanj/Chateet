<x-app>
    @foreach($users as $user)

    <div class="sm:flex mb-4 border border-gray-400 rounded">
        <a href="{{ $user->path() }}" class="flex items-center p-3">
            {{--URL::asset('avatars/'. $user->id .'/'. str_replace('http://chateet.herokuapp.com/', '', --}}
            <img src="{!!  $user->avatar ?? URL::asset('images/test1.jpg')  !!}" width="60" class="mr-4 rounded">

            <div>
                <h4 class="font-bold">{{ '@' . $user->username }}</h4>
            </div>
        </a>
        <div class="lg:ml-auto md:ml-auto xl:ml-auto sm:ml-auto p-3">
            <button type="submit"><a class="bg-green-500 text-xs py-2 px-2 text-white rounded-full shadow" href="{{ $user->path() }}">View Profile</a></button>
            <x-follow-button :user="$user"></x-follow-button>
        </div>
    </div>
    @endforeach
    {{ $users->links() }}
</x-app>
