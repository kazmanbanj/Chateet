@if (auth()->user()->isNot($user))
    <form method="POST" action="/profiles/{{ $user->username }}/follow">
        @csrf
        <button type="submit" class="bg-green-500 text-xs py-2 px-2 text-white rounded-full shadow">
            {{ auth()->user()->following($user) ? 'Unfollow Me' : 'Follow Me' }}
        </button>
    </form>
@endif