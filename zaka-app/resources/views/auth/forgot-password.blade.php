<div class="container">
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
</a>
        </x-slot>
        
        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <div class="forms-container">
    <div class="signin-signup">
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mbd-4" :errors="$errors" />
       
        <form method="POST" action="{{ route('password.email') }}"  class="sign-up-form">
            @csrf

            <!-- Email Address -->
            <div class="input-fields">
  <i class="fa fa-envelope"></i>  
                <x-input id="email" class="myinput" type="email" name="email"
                 :value="old('email')" placeholder="البريد الالكتروني"  required autofocus />
            </div>

            <div class="btns solid">
                <x-button>
                    {{ __('اعادة تعين كلمة السر للبريد الالكتروني') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
</div>