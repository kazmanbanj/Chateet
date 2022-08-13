<x-app>
    @if(auth()->user()->is_admin)
    @forelse($notifications as $notification)
        <div class="alert alert-success" role="alert">
            [{{ $notification->created_at }}] User {{ $notification->data['name'] }} ({{ $notification->data['email'] }}) has just registered.
            <a class="d-flex p-3 border-bottom" href="{{ route('ReadNotification', ['id' => $notification->id]) }}"  data-id="{{$notification->id}}" >
                <span id="badge-dismiss-green" class="inline-flex items-center py-1 px-2 mr-2 text-sm font-medium text-green-800 bg-green-100 rounded dark:bg-green-200 dark:text-green-800">
                    Mark as read
                </span>
            </a>
        </div>
        <br>
        @if($loop->last)
            <a href="" id="mark-all">
                <span id="badge-dismiss-default" class="inline-flex items-center py-1 px-2 mr-2 text-sm font-medium text-blue-800 bg-blue-100 rounded dark:bg-blue-200 dark:text-blue-800">
                    Mark all as read
                </span>
            </a>
        @endif
    @empty
        There are no new notifications
    @endforelse
@endif

@if(auth()->user()->is_admin)
    <script>
    function sendMarkRequest(id = null) {
        return $.ajax("{{ route('markNotification') }}", {
            method: 'POST',
            data: {
                _token,
                id
            }
        });
    }
    $(function() {
        $('.mark-as-read').click(function() {
            let request = sendMarkRequest($(this).data('id'));
            request.done(() => {
                $(this).parents('div.alert').remove();
            });
        });
        $('#mark-all').click(function() {
            let request = sendMarkRequest();
            request.done(() => {
                $('div.alert').remove();
            })
        });
    });
    </script>
@endif
</x-app>
