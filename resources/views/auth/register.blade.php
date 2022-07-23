<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- First Name -->
            <div>
                <x-label for="first_name" :value="__('First Name')" />

                <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" required autofocus />
            </div>

             <!-- Last Name -->
             <div>
                <x-label for="last_name" :value="__('Last Name')" />

                <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="mt-4">
                <x-label for="date_of_birth" :value="__('Date of Birth')" />

                <x-input id="date_of_birth" class="block mt-1 w-full" type="date" name="date_of_birth" :value="old('date_of_birth')" required />
            </div>

            <div class="mt-4">
                <x-label for="gender" :value="__('Gender')" />

                <x-input id="gender-male"  type="radio" name="gender" :value="1" checked /> Male
                <x-input id="gender-female" type="radio" name="gender" :value="0"  /> Female
            </div>

            <div class="mt-4">
                <x-label for="annual_income" :value="__('Annual Income')" />

                <x-input id="annual_income" class="block mt-1 w-full" type="number" name="annual_income" :value="old('annual_income')" required autofocus />
            </div>

            <div class="mt-4">
                <x-label for="occupation" :value="__('occupation')" />
                <select class="form-control slot-field" name="ticket[ticket1][slot]" multiple required>
                    <option value="">Select</option>
                    <option value='fdsf'>sdfsdfs</option>
                </select>
                  
            </div>
            

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
