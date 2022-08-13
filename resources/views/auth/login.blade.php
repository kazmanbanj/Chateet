<x-master>
    <div class="container mx-auto flex justify-center">
        <div class="px-12 py-4 bg-gray-200 border-gray-400 rounded-lg">
            <div class="col-md-8">
                <div class="font-bold text-lg mb-4 text-center text-gray-700">{{ __('Login') }}</div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-6">
                        <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">{{ __('E-Mail Address') }}</label>
                        <input type="email" name="email" id="email" class="border border-gray-400 p-2 w-64"
                            autocomplete="email" value="{{ old('email') }}" required autofocus>

                        @error('email')
                        <p class="text-red-500 text-xs mt-2 font-bold">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">{{ __('Password') }}</label>
                        <input type="password" name="password" id="password" class="border border-gray-400 p-2 w-64"
                            autocomplete="current-password" required>

                        @error('password')
                        <p class="text-red-500 text-xs mt-2 font-bold">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <div>
                            <input class="mr-1" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>

                            <label class="text-xs text-gray-700 font-bold uppercase" for="remember">
                                Remember Me
                            </label>
                        </div>

                        @error('remember')
                        <p class="text-red-500 text-xs mt-2 font-bold">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="text-center">
                        <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-2">{{ __('Login') }}</button>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-xs text-gray-700">{{ __('Forgot Your Password?') }}</a>
                        @endif
                    </div>
                </form>
                <div class="text-center mt-4">
                    <p>Don't have an account? <span><a href="{{ route('register') }}">Register here</a></span></p>
                </div>
            </div>
        </div>
    </div>
</x-master>
