<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'categoria_index' => [[], ['_controller' => 'App\\Controller\\CategoriaController::index'], [], [['text', '/categoria/']], [], []],
    'categoria_datos' => [[], ['_controller' => 'App\\Controller\\CategoriaController::datos'], [], [['text', '/categoria/datos']], [], []],
    'categoria_new' => [[], ['_controller' => 'App\\Controller\\CategoriaController::new'], [], [['text', '/categoria/new']], [], []],
    'categoria_show' => [['id'], ['_controller' => 'App\\Controller\\CategoriaController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/categoria']], [], []],
    'categoria_edit' => [['id'], ['_controller' => 'App\\Controller\\CategoriaController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/categoria']], [], []],
    'categoria_delete' => [['id'], ['_controller' => 'App\\Controller\\CategoriaController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/categoria']], [], []],
    'localidad_index' => [[], ['_controller' => 'App\\Controller\\LocalidadController::index'], [], [['text', '/localidad/']], [], []],
    'localidad_provincia' => [[], ['_controller' => 'App\\Controller\\LocalidadController::datosporProvincia'], [], [['text', '/localidad/datos']], [], []],
    'localidad_new' => [[], ['_controller' => 'App\\Controller\\LocalidadController::new'], [], [['text', '/localidad/new']], [], []],
    'localidad_show' => [['id'], ['_controller' => 'App\\Controller\\LocalidadController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/localidad']], [], []],
    'localidad_edit' => [['id'], ['_controller' => 'App\\Controller\\LocalidadController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/localidad']], [], []],
    'localidad_delete' => [['id'], ['_controller' => 'App\\Controller\\LocalidadController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/localidad']], [], []],
    'mensaje_index' => [[], ['_controller' => 'App\\Controller\\MensajeController::index'], [], [['text', '/mensaje/']], [], []],
    'mensaje_new' => [[], ['_controller' => 'App\\Controller\\MensajeController::new'], [], [['text', '/mensaje/new']], [], []],
    'mensaje_show' => [['id'], ['_controller' => 'App\\Controller\\MensajeController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/mensaje']], [], []],
    'mensaje_delete' => [['id'], ['_controller' => 'App\\Controller\\MensajeController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/mensaje']], [], []],
    'pedido_index' => [[], ['_controller' => 'App\\Controller\\PedidoController::index'], [], [['text', '/pedido/']], [], []],
    'pedido_new' => [[], ['_controller' => 'App\\Controller\\PedidoController::new'], [], [['text', '/pedido/new']], [], []],
    'carrito' => [[], ['_controller' => 'App\\Controller\\PedidoController::guardarCarrito'], [], [['text', '/pedido/guardarCarrito']], [], []],
    'getcarrito' => [[], ['_controller' => 'App\\Controller\\PedidoController::getCarrito'], [], [['text', '/pedido/getcarrito']], [], []],
    'compra' => [[], ['_controller' => 'App\\Controller\\PedidoController::comprar'], [], [['text', '/pedido/compra']], [], []],
    'pedido_show' => [['id'], ['_controller' => 'App\\Controller\\PedidoController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/pedido']], [], []],
    'pedido_edit' => [['id'], ['_controller' => 'App\\Controller\\PedidoController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/pedido']], [], []],
    'pedido_delete' => [['id'], ['_controller' => 'App\\Controller\\PedidoController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/pedido']], [], []],
    'principal' => [[], ['_controller' => 'App\\Controller\\PrincipalController::index'], [], [['text', '/']], [], []],
    'producto_index' => [[], ['_controller' => 'App\\Controller\\ProductoController::index'], [], [['text', '/producto/']], [], []],
    'prodIndex' => [[], ['_controller' => 'App\\Controller\\ProductoController::prodindex'], [], [['text', '/producto/prodindex']], [], []],
    'producto_new' => [[], ['_controller' => 'App\\Controller\\ProductoController::new'], [], [['text', '/producto/new']], [], []],
    'producto_show' => [['id'], ['_controller' => 'App\\Controller\\ProductoController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/producto']], [], []],
    'producto_edit' => [['id'], ['_controller' => 'App\\Controller\\ProductoController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/producto']], [], []],
    'producto_delete' => [['id'], ['_controller' => 'App\\Controller\\ProductoController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/producto']], [], []],
    'provincia_index' => [[], ['_controller' => 'App\\Controller\\ProvinciaController::index'], [], [['text', '/provincia/']], [], []],
    'provincia' => [[], ['_controller' => 'App\\Controller\\ProvinciaController::datosporProvincia'], [], [['text', '/provincia/datos']], [], []],
    'provincia_new' => [[], ['_controller' => 'App\\Controller\\ProvinciaController::new'], [], [['text', '/provincia/new']], [], []],
    'provincia_show' => [['id'], ['_controller' => 'App\\Controller\\ProvinciaController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/provincia']], [], []],
    'provincia_edit' => [['id'], ['_controller' => 'App\\Controller\\ProvinciaController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/provincia']], [], []],
    'provincia_delete' => [['id'], ['_controller' => 'App\\Controller\\ProvinciaController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/provincia']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'tipo_producto_index' => [[], ['_controller' => 'App\\Controller\\TipoProductoController::index'], [], [['text', '/tipo/producto/']], [], []],
    'tipo_producto_tipos' => [[], ['_controller' => 'App\\Controller\\TipoProductoController::getTipos'], [], [['text', '/tipo/producto/tipos']], [], []],
    'tipo_producto_new' => [[], ['_controller' => 'App\\Controller\\TipoProductoController::new'], [], [['text', '/tipo/producto/new']], [], []],
    'tipo_producto_show' => [['id'], ['_controller' => 'App\\Controller\\TipoProductoController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/tipo/producto']], [], []],
    'tipo_producto_edit' => [['id'], ['_controller' => 'App\\Controller\\TipoProductoController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/tipo/producto']], [], []],
    'tipo_producto_delete' => [['id'], ['_controller' => 'App\\Controller\\TipoProductoController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/tipo/producto']], [], []],
];
