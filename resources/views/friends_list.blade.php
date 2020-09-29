<div class="bg-gray-200 rounded-lg border-gray-700 py-4 px-6">
<h3 class="font-bold text-xl mb-4 text-center">Following</h3>
<ul>
    @forelse (auth()->user()->follows as $user)
    <li class="{{$loop->last ? '' : 'mb-4'}}">
        <div>
            <a href="{{ route('profile', $user) }}" class="flex items-center text-sm">
                <img src="{{ $user->avatar }}" alt="" class="rounded-full mr-2 h-12 w-12" style="background-image: url('/images/test1.jpg'); background-size:cover;">
                <p class="break-all">{{ $user->name }}</p>
            </a>
        </div>
    </li>
    @empty
    <li>No friends yet</li>
    @endforelse
</ul>
</div>