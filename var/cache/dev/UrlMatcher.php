<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/(fr|es|en)(?'
                    .'|/(?'
                        .'|actor(?'
                            .'|(*:195)'
                            .'|/(?'
                                .'|new(*:210)'
                                .'|([^/]++)(?'
                                    .'|(*:229)'
                                    .'|/edit(*:242)'
                                    .'|(*:250)'
                                    .'|(*:258)'
                                .')'
                            .')'
                        .')'
                        .'|c(?'
                            .'|ategory(*:280)'
                            .'|omment(?'
                                .'|(*:297)'
                                .'|/([^/]++)(?'
                                    .'|(*:317)'
                                .')'
                            .')'
                        .')'
                        .'|episode(?'
                            .'|(*:338)'
                            .'|/(?'
                                .'|new(*:353)'
                                .'|([^/]++)(?'
                                    .'|(*:372)'
                                    .'|/edit(*:385)'
                                    .'|(*:393)'
                                .')'
                            .')'
                        .')'
                        .'|program(?'
                            .'|(*:414)'
                            .'|/(?'
                                .'|new(*:429)'
                                .'|([^/]++)(?'
                                    .'|(*:448)'
                                    .'|/edit(*:461)'
                                    .'|(*:469)'
                                .')'
                            .')'
                        .')'
                        .'|season(?'
                            .'|(*:489)'
                            .'|/(?'
                                .'|new(*:504)'
                                .'|([^/]++)(?'
                                    .'|(*:523)'
                                    .'|/edit(*:536)'
                                    .'|(*:544)'
                                .')'
                            .')'
                        .')'
                        .'|log(?'
                            .'|in(*:563)'
                            .'|out(*:574)'
                        .')'
                        .'|register(*:591)'
                        .'|my\\-profile(*:610)'
                        .'|wild(?'
                            .'|(*:625)'
                            .'|/(?'
                                .'|s(?'
                                    .'|how(?:/([^/]++))?(*:658)'
                                    .'|eason/([^/]++)(*:680)'
                                .')'
                                .'|category/([^/]++)(*:706)'
                                .'|program/([^/]++)(*:730)'
                                .'|episode/([^/]++)(*:754)'
                            .')'
                        .')'
                    .')'
                    .'|(*:765)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        195 => [[['_route' => 'actor_index', '_controller' => 'App\\Controller\\ActorController::index'], ['_locale'], ['GET' => 0], null, true, false, null]],
        210 => [[['_route' => 'actor_new', '_controller' => 'App\\Controller\\ActorController::new'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        229 => [[['_route' => 'actor_show', '_controller' => 'App\\Controller\\ActorController::show'], ['_locale', 'slug'], ['GET' => 0], null, false, true, null]],
        242 => [[['_route' => 'actor_edit', '_controller' => 'App\\Controller\\ActorController::edit'], ['_locale', 'slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        250 => [[['_route' => 'actor_delete', '_controller' => 'App\\Controller\\ActorController::delete'], ['_locale', 'slug'], ['DELETE' => 0], null, false, true, null]],
        258 => [
            [['_route' => '_name', '_controller' => 'App\\Controller\\ActorController::showByName'], ['_locale', 'name'], null, null, false, true, null],
            [['_route' => 'actor_name', '_controller' => 'App\\Controller\\ActorController2::showByName'], ['_locale', 'name'], null, null, false, true, null],
        ],
        280 => [[['_route' => 'category_add', '_controller' => 'App\\Controller\\CategoryController::add'], ['_locale'], null, null, false, false, null]],
        297 => [[['_route' => 'comment_index', '_controller' => 'App\\Controller\\CommentController::index'], ['_locale'], ['GET' => 0], null, true, false, null]],
        317 => [
            [['_route' => 'comment_show', '_controller' => 'App\\Controller\\CommentController::show'], ['_locale', 'id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'comment_delete', '_controller' => 'App\\Controller\\CommentController::delete'], ['_locale', 'id'], ['DELETE' => 0], null, false, true, null],
        ],
        338 => [[['_route' => 'episode_index', '_controller' => 'App\\Controller\\EpisodeController::index'], ['_locale'], ['GET' => 0], null, true, false, null]],
        353 => [[['_route' => 'episode_new', '_controller' => 'App\\Controller\\EpisodeController::new'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        372 => [[['_route' => 'episode_show', '_controller' => 'App\\Controller\\EpisodeController::show'], ['_locale', 'slug'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        385 => [[['_route' => 'episode_edit', '_controller' => 'App\\Controller\\EpisodeController::edit'], ['_locale', 'slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        393 => [[['_route' => 'episode_delete', '_controller' => 'App\\Controller\\EpisodeController::delete'], ['_locale', 'slug'], ['DELETE' => 0], null, false, true, null]],
        414 => [[['_route' => 'program_index', '_controller' => 'App\\Controller\\ProgramController::index'], ['_locale'], ['GET' => 0], null, true, false, null]],
        429 => [[['_route' => 'program_new', '_controller' => 'App\\Controller\\ProgramController::new'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        448 => [[['_route' => 'program_show', '_controller' => 'App\\Controller\\ProgramController::show'], ['_locale', 'slug'], ['GET' => 0], null, false, true, null]],
        461 => [[['_route' => 'program_edit', '_controller' => 'App\\Controller\\ProgramController::edit'], ['_locale', 'slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        469 => [[['_route' => 'program_delete', '_controller' => 'App\\Controller\\ProgramController::delete'], ['_locale', 'slug'], ['DELETE' => 0], null, false, true, null]],
        489 => [[['_route' => 'season_index', '_controller' => 'App\\Controller\\SeasonController::index'], ['_locale'], ['GET' => 0], null, true, false, null]],
        504 => [[['_route' => 'season_new', '_controller' => 'App\\Controller\\SeasonController::new'], ['_locale'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        523 => [[['_route' => 'season_show', '_controller' => 'App\\Controller\\SeasonController::show'], ['_locale', 'slug'], ['GET' => 0], null, false, true, null]],
        536 => [[['_route' => 'season_edit', '_controller' => 'App\\Controller\\SeasonController::edit'], ['_locale', 'slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        544 => [[['_route' => 'season_delete', '_controller' => 'App\\Controller\\SeasonController::delete'], ['_locale', 'slug'], ['DELETE' => 0], null, false, true, null]],
        563 => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], ['_locale'], null, null, false, false, null]],
        574 => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], ['_locale'], null, null, false, false, null]],
        591 => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\SecurityController::register'], ['_locale'], null, null, false, false, null]],
        610 => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\SecurityController::profile'], ['_locale'], null, null, false, false, null]],
        625 => [[['_route' => 'wild_index', '_controller' => 'App\\Controller\\WildController::index'], ['_locale'], null, null, false, false, null]],
        658 => [[['_route' => 'wild_show', 'slug' => null, '_controller' => 'App\\Controller\\WildController::show'], ['_locale', 'slug'], null, null, false, true, null]],
        680 => [[['_route' => 'wild_season', '_controller' => 'App\\Controller\\WildController::showBySeason'], ['_locale', 'id'], null, null, false, true, null]],
        706 => [[['_route' => 'wild_category', '_controller' => 'App\\Controller\\WildController::showByCategory'], ['_locale', 'categoryName'], null, null, false, true, null]],
        730 => [[['_route' => 'wild_program', '_controller' => 'App\\Controller\\WildController::showByProgram'], ['_locale', 'slug'], null, null, false, true, null]],
        754 => [[['_route' => 'wild_episode', '_controller' => 'App\\Controller\\WildController::showEpisode'], ['_locale', 'id'], null, null, false, true, null]],
        765 => [
            [['_route' => 'app_index', '_controller' => 'App\\Controller\\DefaultController::index'], ['_locale'], null, null, true, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
