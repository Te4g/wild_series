<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'actor_index' => [[], ['_controller' => 'App\\Controller\\ActorController::index'], [], [['text', '/actor/']], [], []],
    'actor_new' => [[], ['_controller' => 'App\\Controller\\ActorController::new'], [], [['text', '/actor/new']], [], []],
    'actor_show' => [['slug'], ['_controller' => 'App\\Controller\\ActorController::show'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/actor']], [], []],
    'actor_edit' => [['slug'], ['_controller' => 'App\\Controller\\ActorController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'slug', true], ['text', '/actor']], [], []],
    'actor_delete' => [['slug'], ['_controller' => 'App\\Controller\\ActorController::delete'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/actor']], [], []],
    '_name' => [['name'], ['_controller' => 'App\\Controller\\ActorController::showByName'], [], [['variable', '/', '[^/]++', 'name', true], ['text', '/actor']], [], []],
    'actor_name' => [['name'], ['_controller' => 'App\\Controller\\ActorController2::showByName'], [], [['variable', '/', '[^/]++', 'name', true], ['text', '/actor']], [], []],
    'category_add' => [[], ['_controller' => 'App\\Controller\\CategoryController::add'], [], [['text', '/category']], [], []],
    'app_index' => [[], ['_controller' => 'App\\Controller\\DefaultController::index'], [], [['text', '/']], [], []],
    'episode_index' => [[], ['_controller' => 'App\\Controller\\EpisodeController::index'], [], [['text', '/episode/']], [], []],
    'episode_new' => [[], ['_controller' => 'App\\Controller\\EpisodeController::new'], [], [['text', '/episode/new']], [], []],
    'episode_show' => [['slug'], ['_controller' => 'App\\Controller\\EpisodeController::show'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/episode']], [], []],
    'episode_edit' => [['slug'], ['_controller' => 'App\\Controller\\EpisodeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'slug', true], ['text', '/episode']], [], []],
    'episode_delete' => [['slug'], ['_controller' => 'App\\Controller\\EpisodeController::delete'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/episode']], [], []],
    'program_index' => [[], ['_controller' => 'App\\Controller\\ProgramController::index'], [], [['text', '/program/']], [], []],
    'program_new' => [[], ['_controller' => 'App\\Controller\\ProgramController::new'], [], [['text', '/program/new']], [], []],
    'program_show' => [['slug'], ['_controller' => 'App\\Controller\\ProgramController::show'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/program']], [], []],
    'program_edit' => [['slug'], ['_controller' => 'App\\Controller\\ProgramController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'slug', true], ['text', '/program']], [], []],
    'program_delete' => [['slug'], ['_controller' => 'App\\Controller\\ProgramController::delete'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/program']], [], []],
    'season_index' => [[], ['_controller' => 'App\\Controller\\SeasonController::index'], [], [['text', '/season/']], [], []],
    'season_new' => [[], ['_controller' => 'App\\Controller\\SeasonController::new'], [], [['text', '/season/new']], [], []],
    'season_show' => [['slug'], ['_controller' => 'App\\Controller\\SeasonController::show'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/season']], [], []],
    'season_edit' => [['slug'], ['_controller' => 'App\\Controller\\SeasonController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'slug', true], ['text', '/season']], [], []],
    'season_delete' => [['slug'], ['_controller' => 'App\\Controller\\SeasonController::delete'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/season']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'wild_index' => [[], ['_controller' => 'App\\Controller\\WildController::index'], [], [['text', '/wild']], [], []],
    'wild_show' => [['slug'], ['slug' => null, '_controller' => 'App\\Controller\\WildController::show'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/wild/show']], [], []],
    'wild_category' => [['categoryName'], ['_controller' => 'App\\Controller\\WildController::showByCategory'], [], [['variable', '/', '[^/]++', 'categoryName', true], ['text', '/wild/category']], [], []],
    'wild_program' => [['slug'], ['_controller' => 'App\\Controller\\WildController::showByProgram'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/wild/program']], [], []],
    'wild_season' => [['id'], ['_controller' => 'App\\Controller\\WildController::showBySeason'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/wild/season']], [], []],
    'wild_episode' => [['id'], ['_controller' => 'App\\Controller\\WildController::showEpisode'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/wild/episode']], [], []],
];
