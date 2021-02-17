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
        '/categoria' => [[['_route' => 'categoria_index', '_controller' => 'App\\Controller\\CategoriaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categoria/new' => [[['_route' => 'categoria_new', '_controller' => 'App\\Controller\\CategoriaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/localidad' => [[['_route' => 'localidad_index', '_controller' => 'App\\Controller\\LocalidadController::index'], null, ['GET' => 0], null, true, false, null]],
        '/localidad/new' => [[['_route' => 'localidad_new', '_controller' => 'App\\Controller\\LocalidadController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/pedido' => [[['_route' => 'pedido_index', '_controller' => 'App\\Controller\\PedidoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/pedido/new' => [[['_route' => 'pedido_new', '_controller' => 'App\\Controller\\PedidoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'principal', '_controller' => 'App\\Controller\\PrincipalController::index'], null, null, null, false, false, null]],
        '/producto' => [[['_route' => 'producto_index', '_controller' => 'App\\Controller\\ProductoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/producto/prodindex' => [[['_route' => 'prodIndex', '_controller' => 'App\\Controller\\ProductoController::prodindex'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/producto/new' => [[['_route' => 'producto_new', '_controller' => 'App\\Controller\\ProductoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/provincia' => [[['_route' => 'provincia_index', '_controller' => 'App\\Controller\\ProvinciaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/provincia/new' => [[['_route' => 'provincia_new', '_controller' => 'App\\Controller\\ProvinciaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/tipo/producto' => [[['_route' => 'tipo_producto_index', '_controller' => 'App\\Controller\\TipoProductoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/tipo/producto/tipos' => [[['_route' => 'tipo_producto_tipos', '_controller' => 'App\\Controller\\TipoProductoController::getTipos'], null, ['GET' => 0], null, false, false, null]],
        '/tipo/producto/new' => [[['_route' => 'tipo_producto_new', '_controller' => 'App\\Controller\\TipoProductoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/categoria/(?'
                    .'|([^/]++)(*:191)'
                    .'|get(*:202)'
                    .'|([^/]++)(?'
                        .'|/edit(*:226)'
                        .'|(*:234)'
                    .')'
                .')'
                .'|/localidad/([^/]++)(?'
                    .'|(*:266)'
                    .'|/edit(*:279)'
                    .'|(*:287)'
                .')'
                .'|/p(?'
                    .'|edido/([^/]++)(?'
                        .'|(*:318)'
                        .'|/edit(*:331)'
                        .'|(*:339)'
                    .')'
                    .'|ro(?'
                        .'|ducto/([^/]++)(?'
                            .'|(*:370)'
                            .'|/edit(*:383)'
                            .'|(*:391)'
                        .')'
                        .'|vincia/([^/]++)(?'
                            .'|(*:418)'
                            .'|/edit(*:431)'
                            .'|(*:439)'
                        .')'
                    .')'
                .')'
                .'|/tipo/producto/([^/]++)(?'
                    .'|(*:476)'
                    .'|/edit(*:489)'
                    .'|(*:497)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        191 => [[['_route' => 'categoria_show', '_controller' => 'App\\Controller\\CategoriaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        202 => [[['_route' => 'categoria_datos', '_controller' => 'App\\Controller\\CategoriaController::getDatos'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        226 => [[['_route' => 'categoria_edit', '_controller' => 'App\\Controller\\CategoriaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        234 => [[['_route' => 'categoria_delete', '_controller' => 'App\\Controller\\CategoriaController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        266 => [[['_route' => 'localidad_show', '_controller' => 'App\\Controller\\LocalidadController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        279 => [[['_route' => 'localidad_edit', '_controller' => 'App\\Controller\\LocalidadController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        287 => [[['_route' => 'localidad_delete', '_controller' => 'App\\Controller\\LocalidadController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        318 => [[['_route' => 'pedido_show', '_controller' => 'App\\Controller\\PedidoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        331 => [[['_route' => 'pedido_edit', '_controller' => 'App\\Controller\\PedidoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        339 => [[['_route' => 'pedido_delete', '_controller' => 'App\\Controller\\PedidoController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        370 => [[['_route' => 'producto_show', '_controller' => 'App\\Controller\\ProductoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        383 => [[['_route' => 'producto_edit', '_controller' => 'App\\Controller\\ProductoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        391 => [[['_route' => 'producto_delete', '_controller' => 'App\\Controller\\ProductoController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        418 => [[['_route' => 'provincia_show', '_controller' => 'App\\Controller\\ProvinciaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        431 => [[['_route' => 'provincia_edit', '_controller' => 'App\\Controller\\ProvinciaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        439 => [[['_route' => 'provincia_delete', '_controller' => 'App\\Controller\\ProvinciaController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        476 => [[['_route' => 'tipo_producto_show', '_controller' => 'App\\Controller\\TipoProductoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        489 => [[['_route' => 'tipo_producto_edit', '_controller' => 'App\\Controller\\TipoProductoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        497 => [
            [['_route' => 'tipo_producto_delete', '_controller' => 'App\\Controller\\TipoProductoController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
