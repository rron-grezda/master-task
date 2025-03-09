<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img src="https://cdn-icons-png.flaticon.com/512/906/906334.png" alt="Master-task" width="100" height="100">
        </x-slot>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="{{ mix('js/app.js') }}" defer></script>
        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mb-3">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="mb-3 form-check">
                <x-jet-checkbox name="remember" id="remember" class="form-check-input" />
                <label class="form-check-label" for="remember">{{ __('Remember me') }}</label>
            </div>

            <div class="d-flex justify-content-between">
                <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>

                <x-jet-button class="btn btn-primary">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
