<x-master>
    <div class="container mx-auto flex justify-center">
        <div class="px-12 py-4 bg-gray-200 border-gray-400 rounded-lg">
            <div class="col-md-8">
                <div class="font-bold text-lg mb-2 text-center text-gray-700">{{ __('Verify Your Email Address') }}
                </div>

                @if (session('resent'))
                <div class="text-green-500 text-xs mt-2 font-bold">
                    {{ __('A fresh verification link has been sent to your email address.') }}
                </div>
                @endif

                {{ __('Before proceeding, please check your email for a verification link.') }}
                {{ __('If you did not receive the email') }},
                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button type="submit" class="btn btn-link p-0 m-0 align-baseline">
                        {{ __('click here to request another') }}
                    </button>.
                </form>
            </div>
        </div>
    </div>
</x-master>