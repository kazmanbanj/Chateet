<div class="border border-blue-400 rounded-lg px-8 py-6 mb-6">
    <form method="POST" action="/chats">
    @csrf
        <textarea name="body" id="" class="w-full h-24 border rounded focus:outline-none focus:shadow-outline" placeholder="What you got to share?" required></textarea>

        <hr class="my-1">

        <footer class="flex justify-between items-center">
            <img src="{!! $user->avatar ?? URL::asset('images/test1.jpg') !!}" class="rounded-full mr-2">

            <x-publish-button></x-publish-button>
        </footer>
    </form>

    @error('body')
        <p class="text-red-500 mt-2 text-sm">{{ $message }}</p>
    @enderror
</div>