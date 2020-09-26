@if (current_user()->isNot($user))
    <form method="POST" action="/profiles/{{ $user->username }}/follow" class="lg:mt-3 md:mt-3 xl:mt-3 sm:mt-3">
        @csrf
        <button type="submit" class="bg-green-500 text-xs py-2 px-2 text-white rounded-full shadow">
            {{ auth()->user()->following($user) ? 'Unfollow Me' : 'Follow Me' }}
        </button>
    </form>
@endif