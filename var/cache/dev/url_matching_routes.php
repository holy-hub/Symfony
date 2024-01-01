<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'app_landing', '_controller' => 'App\\Controller\\ExceptionController::landing'], null, null, null, false, false, null]],
        '/privacy_policy' => [[['_route' => 'privacy', '_controller' => 'App\\Controller\\ExceptionController::privacy'], null, null, null, false, false, null]],
        '/termes/conditions' => [[['_route' => 'conditionEtTerme', '_controller' => 'App\\Controller\\ExceptionController::terme'], null, null, null, false, false, null]],
        '/user/register/admin' => [[['_route' => 'app_register_admin', '_controller' => 'App\\Controller\\RegistrationController::register_admin'], null, null, null, false, false, null]],
        '/user/register/agent' => [[['_route' => 'app_register_agent', '_controller' => 'App\\Controller\\RegistrationController::register_agent'], null, null, null, false, false, null]],
        '/user/register/client' => [[['_route' => 'app_register_client', '_controller' => 'App\\Controller\\RegistrationController::register_client'], null, null, null, false, false, null]],
        '/security/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/security/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user/ticket/all' => [[['_route' => 'app_ticket_index_all', '_controller' => 'App\\Controller\\TicketController::indexAll'], null, ['GET' => 0], null, false, false, null]],
        '/user/ticket' => [[['_route' => 'app_ticket_index', '_controller' => 'App\\Controller\\TicketController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/ticket/new' => [[['_route' => 'app_ticket_new', '_controller' => 'App\\Controller\\TicketController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/admin/hghf455c4/dashboard/ohhyes' => [[['_route' => 'app_user_admin_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/user/agent/hghcnhgn/4c5dr656v/dashboard/ohhyes' => [[['_route' => 'app_user_agent_index', '_controller' => 'App\\Controller\\UserController::indexAgent'], null, ['GET' => 0], null, false, false, null]],
        '/user/client/hbchgcg543m/767btr/dashboard/ohhyes' => [[['_route' => 'app_user_client_index', '_controller' => 'App\\Controller\\UserController::indexClient'], null, ['GET' => 0], null, false, false, null]],
        '/user/jbhjb/jhjhbjh/new/jbjbbjbjkbk' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/vbvbv/nb/table/bjbvjs74/vsj7887agent/kvsjfkb' => [[['_route' => 'app_table_view', '_controller' => 'App\\Controller\\UserController::tableAgent'], null, null, null, false, false, null]],
        '/user/client/ticket' => [[['_route' => 'app_user_client_ticket', '_controller' => 'App\\Controller\\UserController::clientTicket'], null, null, null, false, false, null]],
        '/user/agent/ticket' => [[['_route' => 'app_user_agent_ticket', '_controller' => 'App\\Controller\\UserController::agentTicket'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'retour', '_controller' => 'App\\Controller\\UserController::retour'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/error/(\\d+)(*:54)'
                .'|/user/(?'
                    .'|ticket/(?'
                        .'|show/([^/]++)(*:93)'
                        .'|edit/([^/]++)(*:113)'
                        .'|([^/]++)(*:129)'
                    .')'
                    .'|ghfxgfxb/show/nwlsnckcaklcn/nlancl([^/]+)k/bcccjbkch6736hjh36(*:199)'
                    .'|edit/nwlkjcbhdbjhklcnwj/njnsnlancl([^/]+)kbcc98ah/vhv56ch6736hjh36(*:273)'
                    .'|nwlsnckcaklcnsjdnksbvhwjnjnsnlancl([^/]+)kbcccjbkch6736hjh36(*:341)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        54 => [[['_route' => 'errorCode', '_controller' => 'App\\Controller\\ExceptionController::showException'], ['statusCode'], null, null, false, true, null]],
        93 => [[['_route' => 'app_ticket_show', '_controller' => 'App\\Controller\\TicketController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        113 => [[['_route' => 'app_ticket_edit', '_controller' => 'App\\Controller\\TicketController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        129 => [[['_route' => 'app_ticket_delete', '_controller' => 'App\\Controller\\TicketController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        199 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, false, null]],
        273 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        341 => [
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
