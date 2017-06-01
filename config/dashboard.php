<?php
/**
 * Creating a dashboard Options
**/

return [
    // Dashoard Menu
    'menus'      =>      [
        // Link to the dashboard
        'dashboard'     =>  [
            'text'      =>  'Dashboard',
            'icon'      =>  'dashboard',
            'url'       =>  url( 'dashboard' )
        ],

        // Links to the modules
        'modules'       =>  [
            'text'      =>  'Modules',
            'icon'      =>  'apps',
            'url'       =>  url( 'dashboard/modules' )
        ],

        // link to the users
        'users'         =>  [
            'text'      =>  'Users',
            'icon'      =>  'people',
            'sub'       =>  [
                'users.list'       =>  [
                    'text'      =>  'All Users',
                    'icon'      =>  'apps',
                    'url'       =>  url( 'dashboard/users' )
                ],
                'users.add'       =>  [
                    'text'      =>  'Add a new User',
                    'icon'      =>  'apps',
                    'url'       =>  url( 'dashboard/users/add' )
                ],
            ]
        ],

        // link to the settings
        'settings'      =>  [
            'text'      =>  'Settings',
            'icon'      =>  'settings',
            'url'       =>  url( 'dashboard/settings' )
        ]
    ]
];