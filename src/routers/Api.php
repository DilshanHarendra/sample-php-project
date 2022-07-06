<?php
namespace App\routers;

use App\routers\RouterHandler;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Routing\RouteCollectorProxy;


RouterHandler::$app->group('/api',function (RouteCollectorProxy $group){
    $group->get('/', function (Request $request, Response $response, array $args) {

        $response->getBody()->write("Hello");
        return $response;
    });

    $group->get('/user', function ($request, $response, array $args) {
        $data=array('name'=>'user','age'=>25,'email'=>'abc@gmail.com');
        $payload = json_encode($data);
        $response->getBody()->write($payload);
        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(200);
    });


    $group->get('/hello/{name}', function (Request $request, Response $response, array $args) {
        $name = $args['name'];
        $response->getBody()->write("Hello, $name");
                return $response;
    });
});

