<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <x-application-logo  />
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <h5 class="text-light mt-4 col-9">Зарегистрируйтесь</h5>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="mt-4 col-9">
{{--                <x-label for="name" :value="__('Name')" />--}}

                <x-input id="name" class="block mt-1 w-full" placeholder="Логин"
                         type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4 col-9">
{{--                <x-label for="email" :value="__('Email')" />--}}

                <x-input id="email" class="block mt-1 w-full" placeholder="Email"
                         type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4 col-9">
{{--                <x-label for="password" :value="__('Password')" />--}}

                <x-input id="password" class="block mt-1 w-full" placeholder="Пароль"
                                type="password" name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4 col-9">
{{--                <x-label for="password_confirmation" :value="__('Confirm Password')" />--}}

                <x-input id="password_confirmation" class="block mt-1 w-full" placeholder="Повтор пароля"
                                type="password" name="password_confirmation" required />
            </div>
            <div class=" mt-4 col-9">
            <x-button id="press" class="btn btn-primary btn-block"
                      type="submit" name="press" >
                {{ __('Зарегистрировать') }}
            </x-button>
            </div>
            <div class="mt-4 col-9">
                <a class="underline text-sm text-light" href="{{ route('login') }}">
                    {{ __('Уже зарегистрирован?') }}
                </a>

                {{--<x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>--}}
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
