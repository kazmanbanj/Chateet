<x-master>
<div class="container mx-auto flex justify-center">
    <div class="px-12 py-4 bg-gray-200 border-gray-400 rounded-lg">
        <div class="col-md-8">
                <div class="font-bold text-lg mb-2 text-center text-gray-700">{{ __('Confirm Password') }}</div>

                    {{ __('Please confirm your password before continuing.') }}

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <!-- <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->
                        <div class="mb-3">
                            <label for="password" class="block mb-1 uppercase font-bold text-xs text-gray-700">{{ __('Password') }}</label>
                            <input type="password" name="password" id="password" class="border border-gray-400 p-2 w-full" autocomplete="current-password" required>

                            @error('password')
                                <p class="text-red-500 text-xs mt-2 font-bold">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirm Password') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div> -->
                        <div class="text-center">
                            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-2">{{ __('Confirm Password') }}
                            </button>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </form>
        </div>
    </div>
</div>
</x-master>
