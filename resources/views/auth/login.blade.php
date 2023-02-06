<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <x-application-logo/>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')"/>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors"/>

        <h5 class="text-light mt-4 col-9">Выполните вход</h5>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mt-4 col-9">
                {{--                <x-label for="email" :value="__('Email')"/>--}}
                <x-input id="email" class="block mt-1 " placeholder="Email"
                         type="email" name="email"
                         :value="old('email')" required autofocus/>
            </div>

            <!-- Password -->
            <div class="mt-4 col-9">
                {{--                <x-label for="password" :value="__('Password')""/>--}}
                <x-input id="password" class="block mt-1 " placeholder="Пароль"
                         type="password" name="password"
                         required autocomplete="current-password"/>
            </div>
            <div class="mt-4 col-8">
            <x-button id="press" class="btn btn-primary btn-block"
                      type="submit" name="press">
                {{ __('Войти') }}
            </x-button>
            </div>

            <!-- Remember Me -->
            <div class="block mt-3 col-9">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                           class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                           name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Запомнить меня') }}</span>
                </label>
            </div>

            <div class="mt-3 col-9">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-light"
                       href="{{ route('password.request') }}">
                        {{ __('Забыли пароль?') }}
                    </a>
                @endif
            </div>
            <div class="mt-4 col-9">
                <a class="underline text-sm text-light"
                   href="{{route('reg.create')}}">Регистрация</a>
            </div>
            {{--<x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>--}}
        </form>

    </x-auth-card>
</x-guest-layout>
