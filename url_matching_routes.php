<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/bonjour' => [[['_route' => 'app_student_index', '_controller' => 'App\\Controller\\StudentController::index'], null, null, null, false, false, null]],
        '/teacher' => [[['_route' => 'app_teacher', '_controller' => 'App\\Controller\\TeacherController::index'], null, null, null, false, false, null]],
        '/hi' => [[['_route' => 'app_teacher_showhtml', '_controller' => 'App\\Controller\\TeacherController::showhtml'], null, null, null, false, false, null]],
        '/hi/student' => [[['_route' => 'app_teacher_toindex', '_controller' => 'App\\Controller\\TeacherController::toindex'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/welcome/([^/]++)(*:24)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:62)'
                    .'|wdt/([^/]++)(*:81)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:126)'
                            .'|router(*:140)'
                            .'|exception(?'
                                .'|(*:160)'
                                .'|\\.css(*:173)'
                            .')'
                        .')'
                        .'|(*:183)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => 'app_teacher_showteacher', '_controller' => 'App\\Controller\\TeacherController::showteacher'], ['name'], null, null, false, true, null]],
        62 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        81 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        126 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        140 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        160 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        173 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        183 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
