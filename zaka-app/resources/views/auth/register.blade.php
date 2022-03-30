<div class="container">
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
              
            </a>
        </x-slot>
               

        <div class="formup-container">
    <div class="signup-signin">
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mbs-4" :errors="$errors" />
       
        <form method="POST" action="{{ route('register') }}"  class="sign-up-form">
            @csrf

            <!-- Name -->
            <h2 class="titles">تسجيل جديد</h2>
<div class="inputup-field">
  <i class="fa fa-user"></i>

                <x-input id="name" style=" text-align:right;" class="myinput"
                 type="text" name="name" :value="old('name')" placeholder="اسم المستخدم" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="inputup-field">
  <i class="fa fa-envelope"></i>
                <x-input id="email" style="text-align:right;" class="myinput"
                 type="email" name="email" :value="old('email')" placeholder="البريد الالكتروني" required />
            </div>

            <!-- Password -->
            <div class="inputup-field">
  <i class="fa fa-lock"></i>
                <x-input id="password" class="myinput" style=" text-align:right;"
                                type="password"
                                name="password"
                                placeholder="كلمة المرور"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="inputup-field">
  <i class="fa fa-lock"></i>
                <x-input id="password_confirmation" class="myinput" style=" text-align:right;"
                                type="password"
                                placeholder="تاكيد كلمة المرور"
                                name="password_confirmation" required />
            </div>
  <!-- Select Option Rol type -->
  <div class="inputup-field">
  <i class="fa fa-user"></i>
  
 <select name="role_id"style=" text-align:right;"   class="myinput" placeholder="مستخدم جديد">
 <option value="user" selected>نوع المستخدم</option>
 <option value="user">مستحق</option>
 <option value="msk">مذكي</option>
 </select>
 
 </div>
  <x-button class="btnup solid">
                    {{ __('تسجيل') }}
  </x-button>
      
 <a class="socials-text" href="{{ route('login') }}">
                    {{ __('مسجل من قبل؟') }}
 </a>
 <div class="socials-media">
 <a href="#" class=" socials-icon">
<i class="fab fa-facebook"></i>
</a>
<a href="#" class=" socials-icon">
 <i class="fab fa-twitter"></i>
</a>
<a href="#" class=" socials-icon">
<i class="fab fa-instagram"></i>
</a>
</div>
</div>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
</div>