<x-app>
    <h1 class="text-center text-xl font-bold">Edit Profile</h1>
    <form action="{{ $user->path() }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="mb-6">
            <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">Name</label>
            <input type="text" class="border border-gray-400 p-2 w-full" name="name" id="name" value="{{ $user->name }}" required>
            @error('name')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">Username</label>
            <input type="text" class="border border-gray-400 p-2 w-full" name="username" id="username" value="{{ $user->username }}" required>
            @error('username')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="gender" class="block mb-2 uppercase font-bold text-xs text-gray-700">Gender</label>
            <select name="gender" id="gender" required>
                <!-- <option value="">choose</option> -->
                <option value="male" @if($user->gender=='male') selected='selected' @endif>male</option>
                <option value="female" @if($user->gender=='female') selected='selected' @endif>female</option>
            </select>
            @error('gender')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- <div class="mb-6">
            <label for="birthday" class="block mb-2 uppercase font-bold text-xs text-gray-700">Birthday</label>
            <input type="date" class="border border-gray-400 p-2 w-full" name="birthday" id="birthday" value="{{ $user->birthday }}">
            @error('birthday')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div> -->

        <div class="mb-6">
            <label for="avatar" class="block mb-2 uppercase font-bold text-xs text-gray-700">Avatar</label>
            <div>
                <img src="{!! URL::asset('avatars/'. $user->id .'/'. str_replace('http://chateet.herokuapp.com/', '', $user->avatar)) !!}" width="100">
                <input type="file" class="border border-gray-400 p-2 w-full" name="avatar" id="avatar">
            </div>
            @error('avatar')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="quote" class="block mb-2 uppercase font-bold text-xs text-gray-700">Favourite Quote</label>
            <input name="quote" id="quote" class="w-full h-24 border border-gray-400 rounded" value="{{ $user->quote }}">
            @error('quote')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        
        <div class="mb-6">
            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-4">
                Submit
            </button>
            <a href="{{$user->path()}}" class="hover:underline">Cancel</a>
        </div>
    </form>
</x-app>