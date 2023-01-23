<x-guest-layout>

    <div>
        <img src="{{ asset('/storage/background/Login_bg.png') }}" style="width:100vw; position:absolute" alt="">
    </div>
    <div style="position:absolute; display: flex; justify-content: center">

        {{-- <x-jet-authentication-card> --}}



        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <div style="display: flex; justify-content: center; width:100vw; height:100vh; align-items: center">

            <form method="POST" action="{{ route('login') }}" class="pt-6"
                style="background-color: rgba(255, 255, 255, 0.842);
                                                                                padding: 1.5rem;
                                                                                border-radius: 10px">
                @csrf
                <x-jet-validation-errors class="mb-4" />
                <h3
                    style="font-size: 1.5rem;
                            font-weight: bold;
                            text-align: center">
                    Visit Bali
                </h3>

                <div>
                    <x-jet-label value="Email" />
                    <x-jet-input class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                        autofocus />
                </div>

                <div class="mt-4">
                    <x-jet-label value="Password" />
                    <x-jet-input class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="current-password" />
                </div>

                <div class="block mt-4">
                    <label class="flex items-center">
                        <input type="checkbox" class="form-checkbox" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-jet-button class="ml-4">
                        {{ __('Login') }}
                    </x-jet-button>
                    <x-jet-button class="ml-4">
                        <a href="{{ route('register') }}">Register</a>
                    </x-jet-button>
                </div>
                {{-- <div class="flex items-center justify-end mt-4">
                <a href="{{ url('auth/google') }}">
                    <img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png"
                        style="margin-left: 3em;">
                </a>
            </div> --}}
            </form>
        </div>
        {{-- </x-jet-authentication-card> --}}
    </div>
</x-guest-layout>
