<x-master>
<div class="container mx-auto flex justify-center">
    <div class="px-12 py-4 bg-gray-200 border-gray-400 rounded-lg">
        <div class="col-md-8">
                <div class="font-bold text-lg mb-2 text-center text-gray-700">{{ __('Register') }}</div>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Full Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->
                        <div class="mb-3">
                            <label for="name" class="block mb-1 uppercase font-bold text-xs text-gray-700">{{ __('Full Name') }}</label>
                            <input type="text" name="name" id="name" class="border border-gray-400 p-2 w-64" autocomplete="name" value="{{ old('name') }}" required autofocus>

                            @error('name')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->
                        <div class="mb-3">
                            <label for="username" class="block mb-1 uppercase font-bold text-xs text-gray-700">{{ __('Username') }}</label>
                            <input type="text" name="username" id="username" class="border border-gray-400 p-2 w-full" autocomplete="username" value="{{ old('username') }}" required autofocus>

                            @error('username')
                                <p class="text-red-500 text-xs mt-2 font-bold">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->
                        <div class="mb-3">
                            <label for="email" class="block mb-1 uppercase font-bold text-xs text-gray-700">{{ __('Email Address') }}</label>
                            <input type="email" name="email" id="email" class="border border-gray-400 p-2 w-full" autocomplete="email" value="{{ old('email') }}" required autofocus>

                            @error('email')
                                <p class="text-red-500 text-xs mt-2 font-bold">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->
                        <div class="mb-3">
                            <label for="password" class="block mb-1 uppercase font-bold text-xs text-gray-700">{{ __('Password') }}</label>
                            <input type="password" name="password" id="password" class="border border-gray-400 p-2 w-full" autocomplete="new-password" required autofocus>

                            @error('password')
                                <p class="text-red-500 text-xs mt-2 font-bold">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- <div class="form-group row mb-6">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div> -->
                        <div class="mb-3">
                            <label for="password-confirm" class="block mb-1 uppercase font-bold text-xs text-gray-700">{{ __('Confirm Password') }}</label>
                            <input type="password" name="password_confirmation" id="password-confirm" class="border border-gray-400 p-2 w-full" autocomplete="new-password" required autofocus>

                            @error('password-confirm')
                                <p class="text-red-500 text-xs mt-2 font-bold">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="px-6 py-3 rounded text-sm uppercase bg-blue-600 text-white">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div> -->
                        <div class="text-center">
                            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-2">{{ __('Register') }}</button>
                        </div>
                    </form>
        </div>
    </div>
</div>
</x-master>
