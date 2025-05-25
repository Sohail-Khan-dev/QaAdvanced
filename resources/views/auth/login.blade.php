<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="flex md:flex-row gap-6 justify-center items-start mt-8">
        <!-- Password Login Form -->
        <div class="w-full md:w-1/2 border rounded-lg p-6 shadow">
            <h2 class="text-xl font-semibold mb-4 text-center">Login with Email &amp; Password</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />
                    <div class="relative">
                        <x-text-input id="password" class="block mt-1 w-full pr-10"
                                      type="password"
                                      name="password"
                                      required autocomplete="current-password" />
                        <button type="button" class="absolute inset-y-0 right-0 flex items-center pr-3" style="margin-top: -2rem; margin-right:.5rem;" onclick="togglePasswordVisibility('password')">
                            <svg id="password_confirmation_toggle_icon" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                <path id="password_line" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4l16 16" style="display: none;" />
                            </svg>
                        </button>
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>
                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                    <x-primary-button class="ms-3">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>
        </div>

        <!-- OTP Login Form -->
        <div class="w-full md:w-1/2 border rounded-lg p-6 shadow">
            <h2 class="text-xl font-semibold mb-4 text-center">Login with OTP</h2>
            <form method="POST" action="{{ route('otp.send') }}">
                @csrf
                <!-- Email Address -->
                <div>
                    <x-input-label for="email_otp" :value="__('Email')" />
                    <x-text-input id="email_otp" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="flex items-center justify-end mt-4">
                    <x-primary-button>
                        {{ __('Send OTP') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>

    <div class="mt-4 text-center">
        <p class="text-sm text-gray-600">
            {{ __('Don\'t have an account?') }}
            <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                {{ __('Register') }}
            </a>
        </p>
    </div>
       <script>
            function togglePasswordVisibility(inputId) {
            var input = document.getElementById(inputId);
            var svgPath = document.querySelector(`#${inputId} + button svg path#password_line`);
            
            if (input.type === "password") {
                input.type = "text";
                if (svgPath) {
                svgPath.style.display = "block";
                }
            } else {
                input.type = "password";
                if (svgPath) {
                svgPath.style.display = "none";
                }
            }
            }
        </script>
</x-guest-layout>
