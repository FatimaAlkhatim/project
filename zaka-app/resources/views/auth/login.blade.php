<div class="container">
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
            
            </a>
        </x-slot>
       

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mbb-4" :errors="$errors" />
        
      <div class="forms-container">
    <div class="signin-signup">
        <form method="POST" action="{{ route('login') }}" class="sign-in-form">
            @csrf

            <!-- Email Address -->
            <h2 class="title">تسجيل دخول</h2>
<div class="input-field">
  <i class="fa fa-envelope"></i>     
 <x-input id="email" class="myinput" type="email"
  name="email" :value="old('email')" 
  style=" text-align:right;" 
   placeholder="البريد الالكتروني" required autofocus />
            </div>

            <!-- Password -->
            <div class="input-field">
<i class="fa fa-lock"></i>
                <x-input id="password" class="myinput" style=" text-align:right;"
                                type="password"
                                name="password"
                                placeholder="كلمة المرور"
                                required autocomplete="current-password" />
            </div>
 <!-- Remember Me -->
 <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('ذكرني') }}</span>
                </label>
            </div>
            <x-button class="btn solid">
                    {{ __('تسجيل الدخول') }}
                </x-button>
                <div class="logins">
       
                @if (Route::has('password.request'))
                    <a class="social-text" href="{{ route('password.request') }}">
                        {{ __('نسيت كلمة السر؟') }}
                    </a>
                    <a class="social-text" href="{{ route('register') }}">
                    {{ __('تسجيل جديد') }}
 </a>
                </div>
                @endif
    

  <div class="social-media">
 <a href="#" class=" social-icon">
<i class="fab fa-facebook"></i>
</a>
<a href="#" class=" social-icon">
 <i class="fab fa-twitter"></i>
</a>
<a href="#" class=" social-icon">
<i class="fab fa-instagram"></i>
</a>
</div>
</div>
</div>
        </form>
        
    </x-auth-card>
</x-guest-layout>
</di>
