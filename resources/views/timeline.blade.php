<div class="border border-gray-300 rounded-lg">
    @forelse($chats as $chat)
        @include ('chat')
    @empty
        <p class="p-4">No chats yet</p>
    @endforelse

</div>