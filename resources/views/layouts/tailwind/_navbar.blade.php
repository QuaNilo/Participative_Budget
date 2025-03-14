<!-- Start Navbar -->
<nav id="topnav" class="fixed top-0 w-full bg-white z-50">
    <div class="container mx-auto">
        <!-- Logo container-->
        <a class="logo" href="{{ route('home') }}">
            @if(isset($lightNav) && $lightNav == true)
                <span class="inline-block dark:hidden">
                    <img src="/assets-frontend/images/logo-dark.png" class="l-dark" height="24" alt="{{ config('app.name', 'Laravel') }}">
                    <img src="/assets-frontend/images/logo-light.png" class="l-light" height="24" alt="{{ config('app.name', 'Laravel') }}">
                </span>
                <img src="/assets-frontend/images/logo-light.png" height="24" class="hidden dark:inline-block" alt="{{ config('app.name', 'Laravel') }}">
            @else
                <img src="/assets-frontend/images/logo-dark.png" class="inline-block dark:hidden" alt="{{ config('app.name', 'Laravel') }}">
                <img src="/assets-frontend/images/logo-light.png" class="hidden dark:inline-block" alt="{{ config('app.name', 'Laravel') }}">
            @endif
        </a>

{{--        <!-- End Logo container-->--}}
{{--        <div class="menu-extras">--}}
{{--            <div class="menu-item">--}}
{{--                <!-- Mobile menu toggle-->--}}
{{--                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">--}}
{{--                    <div class="lines">--}}
{{--                        <span></span>--}}
{{--                        <span></span>--}}
{{--                        <span></span>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--                <!-- End mobile menu toggle-->--}}
{{--            </div>--}}
{{--        </div>--}}

        @guest
            <!--Login button Start-->
            <ul class="buy-button list-none mb-0">
                <li class="inline mb-0">
                    @if(isset($lightNav) && $lightNav == true)
                        <a href="{{ route('login') }}" class="btn btn-icon rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"><i data-feather="log-in" class="h-4 w-4"></i></a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-icon rounded-full bg-primary/5 hover:bg-primary border-primary/10 hover:border-primary text-primary hover:text-white dark:bg-slate-900 dark:hover:bg-gray-700 dark:border-gray-700 dark:hover:border-gray-700 dark:text-white"><i data-feather="log-in" class="h-4 w-4"></i></a>
                    @endif
                </li>
            </ul>
            <!--Login button End-->
        @else
            <!--Login button Start-->
            <ul class="buy-button list-none mb-0">
                <li class="inline mb-0">
                    @if(isset($lightNav) && $lightNav == true)
{{--                        <a href="{{ route('users.me_edit') }}" class="btn btn-icon rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"><i data-feather="settings" class="h-4 w-4"></i></a>--}}
                    @else
{{--                        <a href="{{ route('users.me_edit') }}" class="btn btn-icon rounded-full bg-primary/5 hover:bg-primary border-primary/10 hover:border-primary text-primary hover:text-white dark:bg-slate-900 dark:hover:bg-gray-700 dark:border-gray-700 dark:hover:border-gray-700 dark:text-white"><i data-feather="settings" class="h-4 w-4"></i></a>--}}
                    @endif
                </li>
            </ul>
            <!--Login button End-->
        @endguest

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu justify-end {{ isset($lightNav) && $lightNav == true ? 'nav-light' : '' }}">
                <li><a href="{{ route('home') }}" class="sub-menu-item {{ request()->routeIs('home') ? "active" : "" }}">{{ __('Home') }}</a></li>

                <li><a href="{{ route('home') }}#price" class="sub-menu-item ">{{ __('Price') }}</a></li>

                <li><a href="{{ route('contacts.create') }}" class="sub-menu-item">{{ __('Contacts') }}</a></li>

            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</nav><!--end header-->
<!-- End Navbar -->
