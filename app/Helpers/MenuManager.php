<?php

namespace App\Helpers;

class MenuManager
{
    public static function all()
    {
        $menus = [
            [
                'label' => 'Pages'
            ],
            [
                'icon' => '<i class="bx bx-home"></i>',
                'title' => 'Dashboard',
                'url' => route('admin.dashboard'),
            ],


            // multi level menu example
            [
                'label' => 'Administration'
            ],
            [
                'icon' => '<i class="bx bx-lock"></i>',
                'title' => 'Access Control',
                'subs' => [
                    [
                        'title' => 'Roles',
                        'url' => route('admin.roles.index'),
                    ],
                    [
                        'title' => 'Permissions',
                        'url' => route('admin.permissions.index'),
                    ],
                ],
            ],
            [
                'icon' => '<i class="bx bx-user"></i>',
                'title' => 'Manage Users',
                'subs' => [
                    [
                        'title' => 'Create User',
                        'url' => '/roles',
                    ],
                    [
                        'title' => 'All Users ',
                        'url' => '/permissions',
                    ],
                ],
            ],
            [
                'icon' => '<i class="bx bx-cog"></i>',
                'title' => 'Settings',
                'url' => route('admin.dashboard'),
            ],
        ];

        return $menus;
    }
}
