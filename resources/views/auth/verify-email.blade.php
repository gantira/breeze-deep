<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-capitalize">
            {{ __('Verify your email address') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="card">
            <div class="bg-white p-6 mt-6 overflow-hidden shadow-sm sm:rounded-lg">

                <div class="card-header">
                    Verify Email Address
                </div>
                <div class="card-body">
                    {{ __('Thanks for signing up! Before getting started, could you verify your email address by
                    clicking on
                    the link we just emailed to you? If you didn\'t receive the email, we will gladly send you
                    another.') }}

                    @if (session('status') == 'verification-link-sent')
                    <div class="my-4 alert alert-success">
                        {{ __('A new verification link has been sent to the email address you provided during
                        registration.') }}
                    </div>
                    @endif

                    <div class="mt-4 d-flex align-items-center justify-content-between">
                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf

                            <div>
                                <x-button>
                                    {{ __('Resend Verification Email') }}
                                </x-button>
                            </div>
                        </form>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <button type="submit" class="btn btn-dark">
                                {{ __('Log Out') }}
                            </button>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>
