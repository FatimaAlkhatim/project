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

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('الاسم')" />

                <x-input id="name" style=" text-align:right;" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('البريد الاكتروني')" />

                <x-input id="email" style="text-align:right;" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('كلمه السر')" />

                <x-input id="password" class="block mt-1 w-full" style=" text-align:right;"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('تاكيد كلمة السر')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" style=" text-align:right;"
                                type="password"
                                name="password_confirmation" required />
            </div>
  <!-- Select Option Rol type -->
  <div class="mt-4">
                            <x-label for="role_id" value="{{ __(': نوع المستخدم') }}" />
                            <select name="role_id"style=" text-align:right;" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                <option value="user">مستحق</option>
                                <option value="msk">مذكي</option>
                            </select>
                        </div>
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('مسجل من قبل؟') }}
                </a>

                <x-button class="ml-4">
                    {{ __('تسجيل') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
