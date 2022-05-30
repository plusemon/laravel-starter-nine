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
                'url' => route('accounts.dashboard'),
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
                        'url' => route('accounts.roles.index'),
                    ],
                    [
                        'title' => 'Permissions',
                        'url' => route('accounts.permissions.index'),
                    ],
                ],
            ],
            [
                'icon' => '<i class="bx bx-user"></i>',
                'title' => 'Manage Users',
                'subs' => [
                    [
                        'title' => 'Create User',
                        'url' => route('accounts.users.create'),
                    ],
                    [
                        'title' => 'All Users ',
                        'url' => route('accounts.users.index'),
                    ],
                ],
            ],
            [
                'icon' => '<i class="bx bx-cog"></i>',
                'title' => 'Settings',
                'url' => route('accounts.dashboard'),
            ],
        ];

        return $menus;
    }
}
