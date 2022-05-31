<?php

namespace App\Helpers;

class MenuManager
{
    public static function all()
    {
        return [
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
                'url' => route('accounts.roles.index'),
            ],
            [
                'icon' => '<i class="bx bx-user"></i>',
                'title' => 'Manage Users',
                'url' => route('accounts.users.index'),
            ],
            [
                'icon' => '<i class="bx bxs-user-detail"></i>',
                'title' => 'Subscribers',
                'url' => route('accounts.subscribers.index'),
            ],
            [
                'icon' => '<i class="bx bx-cog"></i>',
                'title' => 'Settings',
                'url' => route('accounts.settings.general'),
            ],
        ];
    }
}
