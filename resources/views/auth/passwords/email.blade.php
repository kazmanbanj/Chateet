<x-master>
<div class="container mx-auto flex justify-center">
    <div class="px-12 py-4 bg-gray-200 border-gray-400 rounded-lg">
        <div class="col-md-8">
                <div class="font-bold text-lg mb-2 text-center text-gray-700">{{ __('Reset Password') }}</div>

                    @if (session('status'))
                        <div class="text-green-500 text-xs mt-2 font-bold">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <!-- <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->
                        <div class="mb-3">
                            <label for="email" class="block mb-1 uppercase font-bold text-xs text-gray-700">{{ __('E-Mail Address') }}</label>
                            <input type="email" name="email" id="email" class="border border-gray-400 p-2 w-64" autocomplete="email" value="{{ old('email') }}" required autofocus>

                            @error('email')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div> -->
                        <div class="text-center">
                            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-2">{{ __('Send Password Reset Link') }}</button>
                        </div>
                    </form>
        </div>
    </div>
</div>
</x-master>
