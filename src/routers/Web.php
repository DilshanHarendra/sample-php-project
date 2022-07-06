<?php
namespace App\routers;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;



RouterHandler::$app->get('/', function (Request $request, Response $response, array $args) {

    $response->getBody()->write("Hello");
    return $response;
});

RouterHandler::$app->get('/about', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");
    return $response;
});

