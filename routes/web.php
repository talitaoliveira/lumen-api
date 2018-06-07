<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () {
    return "Ola mundo";
});

$router->group(['prefix' => 'api'], function () use ($router) {

    // TEAMS
    $router->get('teams', 'TeamsController@teams');
    $router->get('teams/{id}', 'UserController@team');

    // GAMES
    $router->get('games', 'GamesController@games');
    $router->get('games/{id}', 'GamesController@game');
});


// $router->group(['prefix' => 'config'], function () use ($router) {
//     // ok
//     //$router->get('paises', 'AtivoController@paises');
//     $router->get('paises', function () {
//         return 'paises';
//     });
//     // ok
//     $router->get('estados/{id_pais:[0-9]+}', function () {
//         return "estados" . $id_pais;
//     });
//     // ok
//     $router->get('cidades/{id_pais:[0-9]+}/{id_estado:[0-9]+}', 'AtivoController@cidades');
// });