<div class="bg-gray-200 rounded-lg border-gray-700 py-4 px-6">
<h3 class="font-bold text-xl mb-4 text-center">Following</h3>
<ul>
    @forelse (auth()->user()->follows as $user)
    <li class="{{$loop->last ? '' : 'mb-4'}}">
        <div>
            <a href="{{ route('profile', $user) }}" class="flex items-center text-sm">
                <img src="{!! URL::asset('avatars/'. $user->id .'/'. str_replace('http://127.0.0.1:8000/', '', $user->avatar)) !!}" alt="{{ $user->username }}'s avatar" class="mr-2" style="background-image: url('/images/test1.jpg'); background-size:cover;width:40px; height:30px;">
                <p class="break-all">{{ $user->name }}</p>
            </a>
        </div>
    </li>
    @empty
    <li>No friends yet</li>
    @endforelse
</ul>
</div>