<!-- Start Navbar -->
<nav id="topnav" class="defaultscroll is-sticky">
    <div class="container relative border-b-2 border-gray-600/5">
        <!-- Logo container-->
        <a class="logo" href="{{ route('home') }}">
            <img src="/assets-frontend/images/op.png" class="inline-block dark:hidden w-10" alt="{{ config('app.name', 'Laravel') }}">
            <img src="/assets-frontend/images/op.png" class="hidden dark:inline-block w-10" alt="{{ config('app.name', 'Laravel') }}">
        </a>

        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        @guest
            <!--Login button Start-->
            <ul class="buy-button list-none mb-0">
                <li class="inline mb-0">
                    <a href="{{ route('login') }}" class="h-9 w-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border border-indigo-600 hover:border-indigo-700 text-white"><i data-feather="log-in" class="h-4 w-4"></i></a>
                </li>
            </ul>
            <!--Login button End-->
        @else
            <!--Login button Start-->
            <ul class="buy-button list-none mb-0">
                <li class="inline mb-0">
                    <a href="{{ route('users_dashboard') }}" class="h-9 w-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border border-indigo-600 hover:border-indigo-700 text-white"><i data-feather="settings" class="h-4 w-4"></i></a>
                </li>
                @if(false)
                    <li class="inline ps-1 mb-0">
                        <a href="https://1.envato.market/techwind" target="_blank" class="btn btn-icon rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i data-feather="shopping-cart" class="h-4 w-4"></i></a>
                    </li>
                @endif
            </ul>
            <!--Login button End-->
        @endguest

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu space-x-8">
                <li><a href="{{ route('home') }}" class="sub-menu-item {{ request()->routeIs('home') ? "active" : "" }}">{{ __('Home') }}</a></li>

                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Informações</a><span class="menu-arrow"></span><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li>
                            <ul>
                                <li><a href="{{ route('calendar-page') }}" class="sub-menu-item">{{ __('Calendario') }}</a></li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li><a href="{{ route('rules-page') }}" class="sub-menu-item">Regulamento</a></li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li><a href="{{ route('faq-page') }}" class="sub-menu-item">FAQ</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="{{route('editions-fe')}}" class="sub-menu-item">{{ __('Edições') }}</a></li>

                <li><a href="{{ route('mapa') }}" class="sub-menu-item">{{ __('Mapa') }}</a></li>


            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</nav><!--end header-->
<!-- End Navbar -->
