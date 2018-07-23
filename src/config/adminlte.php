<?php
/**
 * Configure adminlte
 * @author Lucas Brito
 */
return [
    // mini logo for sidebar mini 50x50 pixels
    "logo-mini" => "<b>A</b>LT",
    // logo for regular state and mobile devices
    "logo-lg" => "<b>Admin</b>LTE",
    // Skin usage [black, black-light, blue , blue-light, green, green-light, purple, purple-light, red, red-light, yellow, yellow-light]
    'skin' => 'red',
    // As the "collapse" will appear on = open off = close
    'collapse' => 'on',
    // use URL to be accessed by URL or use route to access by route name
    'menuRoute' => 'url',
    'menu' => [
        "MAIN NAVIGATION" => [
            [
                "text" => "Dashboard",
                "icon" => "fa fa-dashboard",
                "menus" => [
                    "/" => [
                        "text" => "Dashboard",
                        "icon" => "fa fa-dashboard"
                    ],
                ]
            ],
            [
                "text" => "Sign up",
                "icon" => "fa fa-plus",
                "menus" => [
                    "/signup/admin" => [
                        "text" => "Admins",
                        "icon" => "fa fa-users"
                    ],
                    "/signup/user" => [
                        "text" => "User",
                        "icon" => "fa fa-user"
                    ],
                ]
            ],
        ],
        "DEVELOPER" => [
            [
                "text" => "Tests",
                "icon" => "fa fa-server",
                "href" => "/tests"
            ]
        ]
    ]
];