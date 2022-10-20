<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/guestbook' => [[['_route' => 'guestbook.listing', '_controller' => 'App\\Controller\\GuestbookController::index'], null, null, null, true, false, null]],
        '/guestbook/create' => [[['_route' => 'guestbook.create', '_controller' => 'App\\Controller\\GuestbookController::create'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/guest_login' => [[['_route' => 'guest_login', '_controller' => 'App\\Controller\\HomeController::guest_login'], null, null, null, false, false, null]],
        '/admin_login' => [[['_route' => 'admin_login', '_controller' => 'App\\Controller\\HomeController::admin_login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\HomeController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/guestbook/(?'
                    .'|approve/([^/]++)(*:37)'
                    .'|remove/([^/]++)(*:59)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:95)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        37 => [[['_route' => 'guestbook.approve', '_controller' => 'App\\Controller\\GuestbookController::approve'], ['gb_id'], null, null, false, true, null]],
        59 => [[['_route' => 'guestbook.remove', '_controller' => 'App\\Controller\\GuestbookController::remove'], ['gb_id'], null, null, false, true, null]],
        95 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
