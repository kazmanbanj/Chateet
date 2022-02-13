<x-app>
    @if(auth()->user()->is_admin)
    @forelse($notifications as $notification)
        <div class="alert alert-success" role="alert">
            [{{ $notification->created_at }}] User {{ $notification->data['name'] }} ({{ $notification->data['email'] }}) has just registered.
            {{-- <a href="" class="float-right mark-as-read" data-id="{{ $notification->id }}">
                Mark as read
            </a> --}}
            <a class="d-flex p-3 border-bottom" href="{{ route('ReadNotification', ['id' => $notification->id]) }}"  data-id="{{$notification->id}}" >mark as read</a>
        </div>

        @if($loop->last)
            <a href="" id="mark-all">
                Mark all as read
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