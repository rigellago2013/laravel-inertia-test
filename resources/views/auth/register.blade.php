@if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>    
    </div>
@endif
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" enctype=multipart/form-data action="{{ route('register') }}">
            @csrf
            
            <div>   
                <x-jet-label for="prefixname" value="{{ __('Prefixname') }}" />
                <x-jet-input id="prefixname" class="block mt-1 w-full" type="text" name="prefixname" :value="old('prefixname')" required autofocus autocomplete="prefixname" />
            </div>

            <div>
                <x-jet-label for="name" value="{{ __('Firstname') }}" />
                <x-jet-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required autofocus autocomplete="firstname" />
            </div>

            <div>
                <x-jet-label for="name" value="{{ __('Middlename') }}" />
                <x-jet-input id="middlename" class="block mt-1 w-full" type="text" name="middlename" :value="old('middlename')" required autofocus autocomplete="middlename" />
            </div>

            <div>
                <x-jet-label for="name" value="{{ __('Lastname') }}" />
                <x-jet-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autofocus autocomplete="lastname" />
            </div>

            <div>
                <x-jet-label for="name" value="{{ __('Suffixname') }}" />
                <x-jet-input id="suffixname" class="block mt-1 w-full" type="text" name="suffixname" :value="old('suffixname')" required autofocus autocomplete="suffixname" />
            </div>

            <div>
                <x-jet-label for="name" value="{{ __('Username') }}" />
                <x-jet-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus autocomplete="suffixname" />
            </div>

            <div>
                <x-jet-label for="name" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="email" />
            </div>


            <div>
                <x-jet-label for="photo" value="{{ __('Photo') }}" />
                <x-jet-input id="photo" class="block mt-1 w-full" type="file" name="photo" :value="old('photo')" required autofocus autocomplete="photo" />
            </div>

            
            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>
    

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
            
            <div>
                <x-jet-label for="name" value="{{ __('Type') }}" />
                <x-jet-input id="type" class="block mt-1 w-full" type="text" name="type" :value="old('type')" required autofocus autocomplete="type" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
