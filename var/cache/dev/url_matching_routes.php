<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/token' => [[['_route' => 'app_authapi_token', '_controller' => 'App\\Controller\\AuthAPI::token'], null, ['POST' => 0], null, false, false, null]],
        '/cities' => [[['_route' => 'cities', '_controller' => 'App\\Controller\\CitiesManagment::list'], null, ['GET' => 0], null, false, false, null]],
        '/city/new' => [[['_route' => 'app_citiesmanagment_create', '_controller' => 'App\\Controller\\CitiesManagment::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/file/upload' => [[['_route' => 'app_fileapi_newfile', '_controller' => 'App\\Controller\\FileAPI::newFile'], null, ['POST' => 0], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\Index::home'], null, ['GET' => 0], null, false, false, null]],
        '/select' => [[['_route' => 'select', '_controller' => 'App\\Controller\\Index::selectLogin'], null, ['GET' => 0], null, false, false, null]],
        '/loginadmin' => [[['_route' => 'loginAdmin', '_controller' => 'App\\Controller\\Index::loginAdmin'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/loginseller' => [[['_route' => 'loginSeller', '_controller' => 'App\\Controller\\Index::loginSeller'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\Index::logout'], null, ['GET' => 0], null, false, false, null]],
        '/api/stand/create' => [[['_route' => 'app_standapi_createstand', '_controller' => 'App\\Controller\\StandAPI::createStand'], null, ['PUT' => 0], null, false, false, null]],
        '/api/stands' => [[['_route' => 'app_standapi_getstands', '_controller' => 'App\\Controller\\StandAPI::getStands'], null, ['GET' => 0], null, false, false, null]],
        '/api/orders' => [[['_route' => 'app_standapi_getorders2', '_controller' => 'App\\Controller\\StandAPI::getOrders2'], null, ['GET' => 0], null, false, false, null]],
        '/stands' => [[['_route' => 'stands', '_controller' => 'App\\Controller\\StandManagement::list'], null, ['GET' => 0], null, false, false, null]],
        '/stand/new' => [[['_route' => 'app_standmanagement_create', '_controller' => 'App\\Controller\\StandManagement::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/user/create' => [[['_route' => 'app_userapi_register', '_controller' => 'App\\Controller\\UserAPI::register'], null, ['POST' => 0], null, false, false, null]],
        '/api/make-seller' => [[['_route' => 'app_userapi_createseller', '_controller' => 'App\\Controller\\UserAPI::createSeller'], null, ['PUT' => 0], null, false, false, null]],
        '/users' => [[['_route' => 'users', '_controller' => 'App\\Controller\\UserManagement::list'], null, ['GET' => 0], null, false, false, null]],
        '/user/new' => [[['_route' => 'app_usermanagement_create', '_controller' => 'App\\Controller\\UserManagement::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/city/([^/]++)(?'
                    .'|/(?'
                        .'|edit(*:67)'
                        .'|delete(*:80)'
                    .')'
                    .'|(*:88)'
                .')'
                .'|/api/(?'
                    .'|stand(?'
                        .'|/(?'
                            .'|(\\d+)(?'
                                .'|(*:124)'
                            .')'
                            .'|(\\d+)/products(?'
                                .'|(*:150)'
                            .')'
                            .'|(\\d+)/product/(\\d+)(*:178)'
                            .'|([^/]++)/orders(?'
                                .'|(*:204)'
                                .'|/create(*:219)'
                            .')'
                        .')'
                        .'|s/category/([^/]++)(*:248)'
                    .')'
                    .'|order/([^/]++)/(?'
                        .'|chat(*:279)'
                        .'|newmessage(*:297)'
                    .')'
                    .'|user/(?'
                        .'|(\\d+)(*:319)'
                        .'|(\\d+)/([^/]++)(*:341)'
                    .')'
                .')'
                .'|/stand/([^/]++)(?'
                    .'|/(?'
                        .'|edit(*:377)'
                        .'|delete(*:391)'
                        .'|newproduct(*:409)'
                        .'|product/([^/]++)(?'
                            .'|(*:436)'
                            .'|/(?'
                                .'|edit(*:452)'
                                .'|delete(*:466)'
                            .')'
                        .')'
                        .'|order/([^/]++)(?'
                            .'|(*:493)'
                            .'|/(?'
                                .'|messages(?'
                                    .'|(*:516)'
                                    .'|/send(*:529)'
                                .')'
                                .'|update/([^/]++)(*:553)'
                            .')'
                        .')'
                    .')'
                    .'|(*:564)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|/(?'
                        .'|edit(*:598)'
                        .'|delete(*:612)'
                        .'|makeseller(*:630)'
                    .')'
                    .'|(*:639)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        67 => [[['_route' => 'app_citiesmanagment_edit', '_controller' => 'App\\Controller\\CitiesManagment::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        80 => [[['_route' => 'app_citiesmanagment_delete', '_controller' => 'App\\Controller\\CitiesManagment::delete'], ['id'], ['GET' => 0], null, false, false, null]],
        88 => [[['_route' => 'app_citiesmanagment_details', '_controller' => 'App\\Controller\\CitiesManagment::details'], ['id'], ['GET' => 0], null, false, true, null]],
        124 => [
            [['_route' => 'app_standapi_getstand', '_controller' => 'App\\Controller\\StandAPI::getStand'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_standapi_updatestand', '_controller' => 'App\\Controller\\StandAPI::updateStand'], ['id'], ['PATCH' => 0], null, false, true, null],
            [['_route' => 'app_standapi_deletestand', '_controller' => 'App\\Controller\\StandAPI::deleteStand'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        150 => [
            [['_route' => 'app_standapi_addproduct', '_controller' => 'App\\Controller\\StandAPI::addProduct'], ['sid'], ['PUT' => 0], null, false, false, null],
            [['_route' => 'app_standapi_getproducts', '_controller' => 'App\\Controller\\StandAPI::getProducts'], ['sid'], ['GET' => 0], null, false, false, null],
        ],
        178 => [[['_route' => 'app_standapi_changeproduct', '_controller' => 'App\\Controller\\StandAPI::changeProduct'], ['sid', 'pid'], ['PATCH' => 0], null, false, true, null]],
        204 => [[['_route' => 'app_standapi_getorders', '_controller' => 'App\\Controller\\StandAPI::getOrders'], ['sid'], ['GET' => 0], null, false, false, null]],
        219 => [[['_route' => 'app_standapi_neworder', '_controller' => 'App\\Controller\\StandAPI::newOrder'], ['sid'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        248 => [[['_route' => 'app_standapi_getbycategory', '_controller' => 'App\\Controller\\StandAPI::getByCategory'], ['category'], ['GET' => 0], null, false, true, null]],
        279 => [[['_route' => 'app_standapi_getmessages', '_controller' => 'App\\Controller\\StandAPI::getMessages'], ['oid'], ['GET' => 0], null, false, false, null]],
        297 => [[['_route' => 'app_standapi_newmessage', '_controller' => 'App\\Controller\\StandAPI::newMessage'], ['oid'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        319 => [[['_route' => 'app_userapi_user', '_controller' => 'App\\Controller\\UserAPI::user'], ['id'], ['GET' => 0], null, false, true, null]],
        341 => [[['_route' => 'app_userapi_userwith', '_controller' => 'App\\Controller\\UserAPI::userWith'], ['id', 'type'], ['GET' => 0], null, false, true, null]],
        377 => [[['_route' => 'app_standmanagement_edit', '_controller' => 'App\\Controller\\StandManagement::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        391 => [[['_route' => 'app_standmanagement_delete', '_controller' => 'App\\Controller\\StandManagement::delete'], ['id'], ['GET' => 0], null, false, false, null]],
        409 => [[['_route' => 'app_standmanagement_newproduct', '_controller' => 'App\\Controller\\StandManagement::newProduct'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        436 => [[['_route' => 'app_standmanagement_product', '_controller' => 'App\\Controller\\StandManagement::product'], ['id', 'pid'], ['GET' => 0], null, false, true, null]],
        452 => [[['_route' => 'app_standmanagement_editpredirecttoroute', '_controller' => 'App\\Controller\\StandManagement::editPredirectToRoute'], ['id', 'pid'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        466 => [[['_route' => 'deleteproduct', '_controller' => 'App\\Controller\\StandManagement::deleteProduct'], ['id', 'pid'], ['GET' => 0], null, false, false, null]],
        493 => [[['_route' => 'app_standmanagement_vieworder', '_controller' => 'App\\Controller\\StandManagement::viewOrder'], ['id', 'oid'], ['GET' => 0], null, false, true, null]],
        516 => [[['_route' => 'app_standmanagement_messages', '_controller' => 'App\\Controller\\StandManagement::messages'], ['id', 'oid'], null, null, false, false, null]],
        529 => [[['_route' => 'app_standmanagement_sendmessage', '_controller' => 'App\\Controller\\StandManagement::sendMessage'], ['id', 'oid'], null, null, false, false, null]],
        553 => [[['_route' => 'app_standmanagement_updatestate', '_controller' => 'App\\Controller\\StandManagement::updateState'], ['id', 'oid', 'state'], null, null, false, true, null]],
        564 => [[['_route' => 'stand', '_controller' => 'App\\Controller\\StandManagement::details'], ['id'], ['GET' => 0], null, false, true, null]],
        598 => [[['_route' => 'app_usermanagement_edit', '_controller' => 'App\\Controller\\UserManagement::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        612 => [[['_route' => 'app_usermanagement_delete', '_controller' => 'App\\Controller\\UserManagement::delete'], ['id'], ['GET' => 0], null, false, false, null]],
        630 => [[['_route' => 'app_usermanagement_makeseller', '_controller' => 'App\\Controller\\UserManagement::makeSeller'], ['id'], ['GET' => 0], null, false, false, null]],
        639 => [
            [['_route' => 'app_usermanagement_details', '_controller' => 'App\\Controller\\UserManagement::details'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
