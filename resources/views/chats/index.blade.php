<x-app>
    <div>
        <!-- for message box -->
        @include ('publish_chat_panel')

        <!-- for timeline -->
        @include ('timeline')
    </div>
    {{ $chats->links() }}
</x-app>