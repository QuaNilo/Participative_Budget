<!-- BEGIN: Side Menu -->
<nav class="side-nav hidden w-[85px] overflow-x-hidden pr-5 pb-16 md:block xl:w-[230px]">
    <a
        class="intro-x flex items-center pt-4 pl-5"
        href=""
    >
        <img
            class="w-80"
            src="{{ asset('assets-frontend/images/OP_white.png') }}"
            alt="{{ config('app.name') }}"
        />
        @if(false)
            <span class="ml-3 hidden text-lg text-white xl:block"> {{ config('app.name') }} </span>
        @endif
    </a>
    <div class="side-nav__divider my-6"></div>
    <ul>
        @foreach ($sideMenu as $menuKey => $menu)
            @if ($menu == 'divider')
                <li @class([
                                    'side-nav__divider my-6',

                                    // Animation
                                    'opacity-0 animate-[0.4s_ease-in-out_0.1s_intro-divider] animate-fill-mode-forwards animate-delay-' .
                                    (array_search($menuKey, array_keys($sideMenu)) + 1) * 10,
                                ])></li>
            @else
                <li>
                    <a
                        href="{{ isset($menu['route_name']) ? route($menu['route_name'], $menu['params']) : 'javascript:;' }}"
                        @class([
                            $firstLevelActiveIndex == $menuKey
                                ? 'side-menu side-menu--active'
                                : 'side-menu',

                            // Animation
                            '[&:not(.side-menu--active)]:opacity-0 [&:not(.side-menu--active)]:translate-x-[50px] animate-[0.4s_ease-in-out_0.1s_intro-menu] animate-fill-mode-forwards animate-delay-' .
                            (array_search($menuKey, array_keys($sideMenu)) + 1) * 10,
                        ])
                    >
                        <div class="side-menu__icon">
                            <x-base.lucide icon="{{ $menu['icon'] }}" />
                        </div>
                        <div class="side-menu__title">
                            {{ $menu['title'] }}
                            @if (isset($menu['sub_menu']))
                                <div
                                    class="side-menu__sub-icon {{ $firstLevelActiveIndex == $menuKey ? 'transform rotate-180' : '' }}">
                                    <x-base.lucide icon="ChevronDown" />
                                </div>
                            @endif
                        </div>
                    </a>
                    @if (isset($menu['sub_menu']))
                        <ul class="{{ $firstLevelActiveIndex == $menuKey ? 'side-menu__sub-open' : '' }}">
                            @foreach ($menu['sub_menu'] as $subMenuKey => $subMenu)
                                <li>
                                    <a
                                        href="{{ isset($subMenu['route_name']) ? route($subMenu['route_name'], $subMenu['params']) : 'javascript:;' }}"
                                        @class([
                                            $secondLevelActiveIndex == $subMenuKey
                                                ? 'side-menu side-menu--active'
                                                : 'side-menu',

                                            // Animation
                                            '[&:not(.side-menu--active)]:opacity-0 [&:not(.side-menu--active)]:translate-x-[50px] animate-[0.4s_ease-in-out_0.1s_intro-menu] animate-fill-mode-forwards animate-delay-' .
                                            (array_search($subMenuKey, array_keys($menu['sub_menu'])) + 1) * 10,
                                        ])
                                    >
                                        <div class="side-menu__icon">
                                            <x-base.lucide icon="{{ $subMenu['icon'] }}" />
                                        </div>
                                        <div class="side-menu__title">
                                            {{ $subMenu['title'] }}
                                            @if (isset($subMenu['sub_menu']))
                                                <div
                                                    class="side-menu__sub-icon {{ $secondLevelActiveIndex == $subMenuKey ? 'transform rotate-180' : '' }}">
                                                    <x-base.lucide icon="ChevronDown" />
                                                </div>
                                            @endif
                                        </div>
                                    </a>
                                    @if (isset($subMenu['sub_menu']))
                                        <ul
                                            class="{{ $secondLevelActiveIndex == $subMenuKey ? 'side-menu__sub-open' : '' }}">
                                            @foreach ($subMenu['sub_menu'] as $lastSubMenuKey => $lastSubMenu)
                                                <li>
                                                    <a
                                                        href="{{ isset($lastSubMenu['route_name']) ? route($lastSubMenu['route_name'], $lastSubMenu['params']) : 'javascript:;' }}"
                                                        @class([
                                                            $thirdLevelActiveIndex == $lastSubMenuKey
                                                                ? 'side-menu side-menu--active'
                                                                : 'side-menu',

                                                            // Animation
                                                            '[&:not(.side-menu--active)]:opacity-0 [&:not(.side-menu--active)]:translate-x-[50px] animate-[0.4s_ease-in-out_0.1s_intro-menu] animate-fill-mode-forwards animate-delay-' .
                                                            (array_search($lastSubMenuKey, array_keys($subMenu['sub_menu'])) + 1) * 10,
                                                        ])
                                                    >
                                                        <div class="side-menu__icon">
                                                            <x-base.lucide icon="{{ $lastSubMenu['icon'] }}" />
                                                        </div>
                                                        <div class="side-menu__title">
                                                            {{ $lastSubMenu['title'] }}
                                                        </div>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endif
        @endforeach
    </ul>
</nav>
<!-- END: Side Menu -->

@once
    @push('scripts')
        @vite('resources/js/vendor/tippy/index.js')
    @endpush
@endonce

@once
    @push('scripts')
        @vite('resources/js/layouts/side-menu/index.js')
    @endpush
@endonce

