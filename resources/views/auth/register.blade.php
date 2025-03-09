<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img src="https://cdn-icons-png.flaticon.com/512/906/906334.png" alt="Master-task" width="100" height="100">
        </x-slot>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="{{ mix('js/app.js') }}" defer></script>
        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-3">
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mb-3">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mb-3">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mb-3">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mb-3">
                    <x-jet-label for="terms">
                        <div class="form-check">
                            <x-jet-checkbox name="terms" id="terms" class="form-check-input" />
                            <label class="form-check-label" for="terms">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </label>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="d-flex justify-content-between">
                <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="btn btn-primary">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
