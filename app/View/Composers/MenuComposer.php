<?php

namespace App\View\Composers;

use Illuminate\View\View;
use App\Main\TopMenu;
use App\Main\SideMenu;
use App\Main\SimpleMenu;

class   MenuComposer
{
    /**
     * Bind menu to the view.
     */
    public function compose(View $view): void
    {

        if (!is_null(request()->route())) {
            $sideMenu = [
                'dashboard' => [
                    'icon' => 'home',
                    'title' => __('Dashboard'),
                    'route_name' => 'dashboard',
                    'params' => [],
                ],
                'divider',
                'profile.show' => [
                    'icon' => 'user',
                    'route_name' => 'profile.show',
                    'params' => [],
                    'title' => __('My profile')
                ],
                'Calendar' => [
                    'icon' => 'calendar',
                    'title' => __('Calendar'),
                    'sub_menu' => [
                        'calendar.index' => [
                            'icon' => 'list',
                            'route_name' => 'calendar-dynamics.index',
                            'params' => [],
                            'title' => __('List calendars')
                        ],
                        'calendar.create' => [
                            'icon' => 'plus-circle',
                            'route_name' => 'calendar-dynamics.create',
                            'params' => [],
                            'title' => __('Create calendar')
                        ],
                    ]
                ],
                'users' => [
                    'icon' => 'users',
                    'title' => __('Users'),
                    'sub_menu' => [
                        'users.index' => [
                            'icon' => 'list',
                            'route_name' => 'users.index',
                            'params' => [],
                            'title' => __('List users')
                        ],
                        'users.create' => [
                            'icon' => 'plus-circle',
                            'route_name' => 'users.create',
                            'params' => [],
                            'title' => __('Create user')
                        ],
                    ]
                ],
                'Edições' => [
                    'icon' => 'list',
                    'title' => __('Edições'),
                    'sub_menu' => [
                        'editions.index' => [
                            'icon' => 'list',
                            'route_name' => 'editions.index',
                            'params' => [],
                            'title' => __('List Editions')
                        ],
                        'editions.create' => [
                            'icon' => 'plus-circle',
                            'route_name' => 'editions.create',
                            'params' => [],
                            'title' => __('Create Edition')
                        ],
                    ]
                ],
                'Proposals' => [
                    'icon' => 'list',
                    'title' => __('Proposals'),
                    'sub_menu' => [
                        'proposal.index' => [
                            'icon' => 'list',
                            'route_name' => 'proposals.index',
                            'params' => [],
                            'title' => __('List proposals')
                        ],
                        'proposal.create' => [
                            'icon' => 'plus-circle',
                            'route_name' => 'proposals.create',
                            'params' => [],
                            'title' => __('Create Proposal')
                        ],
                    ]
                ],
                'Categories' => [
                    'icon' => 'Bookmark',
                    'title' => __('Categories'),
                    'sub_menu' => [
                        'categories.index' => [
                            'icon' => 'list',
                            'route_name' => 'categories.index',
                            'params' => [],
                            'title' => __('List Categories')
                        ],
                        'categories.create' => [
                            'icon' => 'plus-circle',
                            'route_name' => 'categories.create',
                            'params' => [],
                            'title' => __('Create Categories')
                        ],
                    ]
                ],
                'Votes' => [
                    'icon' => 'Heart',
                    'title' => __('Votes'),
                    'sub_menu' => [
                        'votes.index' => [
                            'icon' => 'list',
                            'route_name' => 'votes.index',
                            'params' => [],
                            'title' => __('List Votes')
                        ],
                        'votes.create' => [
                            'icon' => 'plus-circle',
                            'route_name' => 'votes.create',
                            'params' => [],
                            'title' => __('Create Votes')
                        ],
                    ]
                ],
                'translations' => [
                    'icon' => 'globe',
                    'route_name' => 'translations.index',
                    'params' => [],
                    'title' => __('Translations')
                ],
                'settings' => [
                    'icon' => 'settings',
                    'route_name' => 'settings.index',
                    'params' => [],
                    'title' => __('Settings')
                ],

            ];
            $pageName = request()->route()->getName();
            //$layout = $this->layout($view);
            $layout = 'side-menu';
            $activeMenu = $this->activeMenu($pageName, $layout, $sideMenu);

            //$view->with('topMenu', TopMenu::menu());
            $view->with('sideMenu', $sideMenu);
            //$view->with('simpleMenu', SimpleMenu::menu());
            $view->with('firstLevelActiveIndex', $activeMenu['first_level_active_index']);
            $view->with('secondLevelActiveIndex', $activeMenu['second_level_active_index']);
            $view->with('thirdLevelActiveIndex', $activeMenu['third_level_active_index']);
            //$view->with('pageName', $pageName);
            $view->with('layout', $layout);
        }
    }

    /**
     * Specify used layout.
     */
    public function layout($view): string
    {
        if (isset($view->layout)) {
            return $view->layout;
        } else if (request()->has('layout')) {
            return request()->query('layout');
        }

        return 'side-menu';
    }

    /**
     * Determine active menu & submenu.
     */
    public function activeMenu($pageName, $layout, $currentMenu): array
    {
        $firstLevelActiveIndex = '';
        $secondLevelActiveIndex = '';
        $thirdLevelActiveIndex = '';


        if ($layout == 'top-menu') {
            foreach ($currentMenu as $menuKey => $menu) {
                if (isset($menu['route_name']) && $menu['route_name'] == $pageName && empty($firstPageName)) {
                    $firstLevelActiveIndex = $menuKey;
                }

                if (isset($menu['sub_menu'])) {
                    foreach ($menu['sub_menu'] as $subMenuKey => $subMenu) {
                        if (isset($subMenu['route_name']) && $subMenu['route_name'] == $pageName && $menuKey != 'menu-layout' && empty($secondPageName)) {
                            $firstLevelActiveIndex = $menuKey;
                            $secondLevelActiveIndex = $subMenuKey;
                        }

                        if (isset($subMenu['sub_menu'])) {
                            foreach ($subMenu['sub_menu'] as $lastSubMenuKey => $lastSubMenu) {
                                if (isset($lastSubMenu['route_name']) && $lastSubMenu['route_name'] == $pageName) {
                                    $firstLevelActiveIndex = $menuKey;
                                    $secondLevelActiveIndex = $subMenuKey;
                                    $thirdLevelActiveIndex = $lastSubMenuKey;
                                }
                            }
                        }
                    }
                }
            }
        } else if ($layout == 'simple-menu') {
            foreach ($currentMenu as $menuKey => $menu) {
                if ($menu !== 'divider' && isset($menu['route_name']) && $menu['route_name'] == $pageName && empty($firstPageName)) {
                    $firstLevelActiveIndex = $menuKey;
                }

                if (isset($menu['sub_menu'])) {
                    foreach ($menu['sub_menu'] as $subMenuKey => $subMenu) {
                        if (isset($subMenu['route_name']) && $subMenu['route_name'] == $pageName && $menuKey != 'menu-layout' && empty($secondPageName)) {
                            $firstLevelActiveIndex = $menuKey;
                            $secondLevelActiveIndex = $subMenuKey;
                        }

                        if (isset($subMenu['sub_menu'])) {
                            foreach ($subMenu['sub_menu'] as $lastSubMenuKey => $lastSubMenu) {
                                if (isset($lastSubMenu['route_name']) && $lastSubMenu['route_name'] == $pageName) {
                                    $firstLevelActiveIndex = $menuKey;
                                    $secondLevelActiveIndex = $subMenuKey;
                                    $thirdLevelActiveIndex = $lastSubMenuKey;
                                }
                            }
                        }
                    }
                }
            }
        } else {
            foreach ($currentMenu as $menuKey => $menu) {
                if ($menu !== 'divider' && isset($menu['route_name']) && $menu['route_name'] == $pageName && empty($firstPageName)) {
                    $firstLevelActiveIndex = $menuKey;
                }

                if (isset($menu['sub_menu'])) {
                    foreach ($menu['sub_menu'] as $subMenuKey => $subMenu) {
                        if (isset($subMenu['route_name']) && $subMenu['route_name'] == $pageName && $menuKey != 'menu-layout' && empty($secondPageName)) {
                            $firstLevelActiveIndex = $menuKey;
                            $secondLevelActiveIndex = $subMenuKey;
                        }

                        if (isset($subMenu['sub_menu'])) {
                            foreach ($subMenu['sub_menu'] as $lastSubMenuKey => $lastSubMenu) {
                                if (isset($lastSubMenu['route_name']) && $lastSubMenu['route_name'] == $pageName) {
                                    $firstLevelActiveIndex = $menuKey;
                                    $secondLevelActiveIndex = $subMenuKey;
                                    $thirdLevelActiveIndex = $lastSubMenuKey;
                                }
                            }
                        }
                    }
                }
            }
        }

        return [
            'first_level_active_index' => $firstLevelActiveIndex,
            'second_level_active_index' => $secondLevelActiveIndex,
            'third_level_active_index' => $thirdLevelActiveIndex
        ];
    }
}
