<x-master>
<div class="container mx-auto flex justify-center">
    <div class="px-10 py-4 bg-gray-200 border-gray-400 rounded-lg">
        <div class="col-md-8">
            <div class="font-bold text-lg mb-2 text-center text-gray-700">{{ __('Register') }}</div>

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="block mb-1 uppercase font-bold text-xs text-gray-700">{{ __('Full Name') }}</label>
                    <input type="text" name="name" id="name" class="border border-gray-400 p-2 w-full" autocomplete="name" value="{{ old('name') }}" required autofocus>

                    @error('name')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="username" class="block mb-1 uppercase font-bold text-xs text-gray-700">{{ __('Username') }}</label>
                    <input type="text" name="username" id="username" class="border border-gray-400 p-2 w-full" autocomplete="username" value="{{ old('username') }}" required autofocus>

                    @error('username')
                        <p class="text-red-500 text-xs mt-2 font-bold">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="email" class="block mb-1 uppercase font-bold text-xs text-gray-700">{{ __('Email Address') }}</label>
                    <input type="email" name="email" id="email" class="border border-gray-400 p-2 w-full" autocomplete="email" value="{{ old('email') }}" required autofocus>

                    @error('email')
                        <p class="text-red-500 text-xs mt-2 font-bold">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="password" class="block mb-1 uppercase font-bold text-xs text-gray-700">{{ __('Password') }}</label>
                    <input type="password" name="password" id="password" class="border border-gray-400 p-2 w-full" autocomplete="new-password" required autofocus>

                    @error('password')
                        <p class="text-red-500 text-xs mt-2 font-bold">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="password-confirm" class="block mb-1 uppercase font-bold text-xs text-gray-700">{{ __('Confirm Password') }}</label>
                    <input type="password" name="password_confirmation" id="password-confirm" class="border border-gray-400 p-2 w-full" autocomplete="new-password" required autofocus>

                    @error('password-confirm')
                        <p class="text-red-500 text-xs mt-2 font-bold">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="text-center">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-2">{{ __('Register') }}</button>
                </div>
            </form>
            <div class="text-center mt-4">
                <p>Already have an account? <span><a href="{{ route('login') }}">Login here</a></span></p>
            </div>
        </div>
    </div>
</div>
</x-master>
