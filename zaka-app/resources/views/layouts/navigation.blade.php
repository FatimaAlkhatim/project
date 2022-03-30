<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <!-- <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                    </a>
                </div> -->

                <!-- Navigation Links -->
                <!-- <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
            </div> -->
            
            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="left" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')" style="float:center;"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('...تسجيل خروج') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
          


            <!-- Hamburger -->
            <!-- <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div> -->

    @if (Auth::user()->hasRole('overseer'))
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard.overseer')" :active="request()->routeIs('dashboard.overseer')">
                    {{ __('صفحة المشرف') }}<i class="fas fa-user"></i>
                    </x-nav-link>
                </div>
                @endif
                @if (Auth::user()->hasRole('committee'))
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard.myprofile')" :active="request()->routeIs('dashboard.myprofile')">
                   {{ __('صفحة اللجنه القاعديه') }}   <i class="fas fa-user"></i>

                    </x-nav-link>
                </div>
                @endif

                @if (Auth::user()->hasRole('admin'))
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard.postcreate')" :active="request()->routeIs('dashboard.postcreate')">
                        {{ __('صفحة المدير') }}    <i class="fas fa-user-lock"></i>        
                    </x-nav-link>
                </div>
                @endif

                
                 @if (Auth::user()->hasRole('admin'))
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('messages.create')" :active="request()->routeIs('messages.create')">
                        {{ __(' ارسل رساله') }}<i class="fas fa-envelope"></i>      
                    </x-nav-link>
                </div>
                @endif
                
               <!-- @if (Auth::user()->hasRole('admin'))
               <ul >
               <li class="nav-item dropdown" style="padding: 10px; ">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:black; ">
          المحاصيل 
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="{{ route('zaka.cropety') }}" >  المحاصيل التي توزن    </a></li>
          <li><a class="dropdown-item" href="{{ route('zaka.cro') }}" >  المحاصيل التي تكال    </a></li>


               </ul>
               @endif  -->
            

  @if (Auth::user()->hasRole('admin'))
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('zaka.cropety')" :active="request()->routeIs('zaka.cropety') " style="color:black;">
                        {{ __('     المحاصيل التي توزن') }} <i class="fa-solid fa-wheat-awn"></i>
                    </x-nav-link>
                </div>
                @endif 

                @if (Auth::user()->hasRole('admin'))
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('zaka.cro')" :active="request()->routeIs('zaka.cropety') " style="color:black;">
                        {{ __('  المحاصيل التي تكال') }} <i class="fa-solid fa-wheat-awn"></i>
                    </x-nav-link>
                </div>
                @endif 


                @if (Auth::user()->hasRole('admin'))
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('zaka.metty')" :active="request()->routeIs('zaka.metty')" style="color:black;">
                      {{ __('       المعادن') }}
                    </x-nav-link>
                </div>
                @endif 
                @if (Auth::user()->hasRole('admin'))
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('zaka.count')" :active="request()->routeIs('zaka.count')" style="color:black;">
                        {{ __('    حسابات') }}
                    </x-nav-link>
                </div>
                @endif 

                @if (Auth::user()->hasRole('committee'))
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('messages.create')" :active="request()->routeIs('messages.create')" >
                        {{ __(' ارسل رساله') }}<i class="fas fa-envelope"></i>  
                    </x-nav-link>
                </div>
                @endif

                
                @if (Auth::user()->hasRole('overseer'))
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('messages.create')" :active="request()->routeIs('messages.create')">
                        {{ __(' ارسل رساله') }}<i class="fas fa-envelope"></i>  
                    </x-nav-link>
                </div>
                @endif 

              
       <!-- //homeeee   -->
 <h6 class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="padding: 20px; color:black;"> <a href="{{url('/dashboard')}}" style="color:black;">الصفحه الرئيسيه <i class="fas fa-home"></i>
 </a></h6>

 <!-- @if (Auth::user()->hasRole('msk'))
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style=" color:black;">
                    <x-nav-link :href="route('zaka.payment')" :active="request()->routeIs('zaka.payment')" style=" color:black;">
                        {{ __('    ادفع زكاتك  ') }}<i class="fa fa-credit-card"></i> 
                    </x-nav-link>
                </div>
                @endif  -->
 
 @if (Auth::user()->hasRole('msk'))
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="padding: 25px; color:black;">
                    <x-nav-link :href="route('messages')" :active="request()->routeIs('messages.create')">
                        {{ __('  تحقق من صفحة رسائلك ') }}<i class="fas fa-envelope"></i>  
                    </x-nav-link>
                </div>
                @endif 
           
 @if (Auth::user()->hasRole('user'))
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex" style="padding: 25px; color:black;">
                    <x-nav-link :href="route('messages')" :active="request()->routeIs('messages.create')">
                        {{ __('  تحقق من صفحة رسائلك ') }}<i class="fas fa-envelope"></i>  
                    </x-nav-link>
                </div>
                @endif 

                @if (Auth::user()->hasRole('admin'))
               <ul >
               <li class="nav-item dropdown" style="padding: 10px; ">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:black; ">
التقارير 
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="{{ route('zaka.report') }}" >  تقرير المعادن    </a></li>
          <li><a class="dropdown-item" href="{{ route('zaka.print') }}" >   تقرير الانعام </a></li>
          <li><a class="dropdown-item" href="{{ route('zaka.show') }}" >  تقرير الزروع التي توزن </a></li>

          <li><a class="dropdown-item" href="{{ route('zaka.shew') }}" >  تقرير الزروع  التي تكال </a></li>

            <li><a class="dropdown-item" href="{{ route('zaka.crope') }}" > زروع حسب نوع المحاصيل التي توزن </a></li>
            <li><a class="dropdown-item" href="{{ route('zaka.crop') }}" > زروع حسب نوع المحاصيل التي تكال </a></li>

               </ul>
               @endif 



               
            </div>


            @if (Auth::user()->hasRole('msk'))

    <h3 style="padding: 10px ; margin-left:450px; ">زكاة<span style="color:green;">السودان</span></h3>
    <img src="{{asset('home/images/icons/images.jpeg')}}" width=35px; height=10px;/>
@endif

@if (Auth::user()->hasRole('overseer'))

<h3 style="padding: 10px ; margin-left:450px; ">زكاة<span style="color:green;">السودان</span></h3>
<img src="{{asset('home/images/icons/images.jpeg')}}" width=35px; height=10px;/>
@endif

@if (Auth::user()->hasRole('committee'))

<h3 style="padding: 10px ; margin-left:300px; ">زكاة<span style="color:green;">السودان</span></h3>
<img src="{{asset('home/images/icons/images.jpeg')}}" width=35px; height=10px;/>
@endif

@if (Auth::user()->hasRole('user'))

<h3 style="padding: 10px ; margin-left:480px; ">زكاة<span style="color:green;">السودان</span></h3>
<img src="{{asset('home/images/icons/images.jpeg')}}" width=35px; height=10px;/>
@endif

@if (Auth::user()->hasRole('admin'))
<h3 style="padding:8px; margin-left:15px;">زكاة<span style="color:green;">السودان</span></h3>
<img src="{{asset('home/images/icons/images.jpeg')}}" width=35px; height=10px;/>
@endif




    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>
      
                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('تسجيل خروج') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
<script src="{{ asset('js/jquery-2.2.1.min.js') }}"></script>

<script type="text/javascript" src="{{asset('core-2.8.4/package/dist/umd/popper.js')}}"></script>

<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
