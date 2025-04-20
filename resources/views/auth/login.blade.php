<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Login Method Tabs -->
    <div class="mb-4 border-b border-gray-200">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="loginTabs" role="tablist">
            <li class="mr-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 active"
                        id="password-tab"
                        data-tabs-target="#password-login"
                        type="button"
                        role="tab"
                        aria-controls="password-login"
                        aria-selected="true">Password Login</button>
            </li>
            <li class="mr-2" role="presentation">
                <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300"
                        id="otp-tab"
                        data-tabs-target="#otp-login"
                        type="button"
                        role="tab"
                        aria-controls="otp-login"
                        aria-selected="false">OTP Login</button>
            </li>
        </ul>
    </div>

    <!-- Password Login Form -->
    <div class="block" id="password-login" role="tabpanel" aria-labelledby="password-tab">
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

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

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
    <div class="hidden" id="otp-login" role="tabpanel" aria-labelledby="otp-tab">
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

    <div class="mt-4 text-center">
        <p class="text-sm text-gray-600">
            {{ __('Don\'t have an account?') }}
            <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                {{ __('Register') }}
            </a>
        </p>
    </div>

    @push('scripts')
    <script>
        // Simple tab functionality
        document.addEventListener('DOMContentLoaded', function() {
            const tabs = document.querySelectorAll('[data-tabs-target]');
            const tabContents = document.querySelectorAll('[role="tabpanel"]');

            tabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    const target = document.querySelector(tab.dataset.tabsTarget);

                    tabContents.forEach(tabContent => {
                        tabContent.classList.add('hidden');
                    });

                    tabs.forEach(t => {
                        t.classList.remove('active', 'border-indigo-600', 'text-indigo-600');
                        t.classList.add('border-transparent');
                        t.setAttribute('aria-selected', false);
                    });

                    tab.classList.add('active', 'border-indigo-600', 'text-indigo-600');
                    tab.classList.remove('border-transparent');
                    tab.setAttribute('aria-selected', true);

                    target.classList.remove('hidden');
                });
            });
        });
    </script>
    @endpush
</x-guest-layout>
