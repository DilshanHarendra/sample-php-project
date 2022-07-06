<?php

namespace App\routers;


use App\routers\Api;
use App\routers\Web;
use Slim\Factory\AppFactory;


class RouterHandler
{
    public static $app;

    public function __construct()
    {
        RouterHandler::$app= AppFactory::create();


        // Add routes

        require_once ('Api.php');
        require_once ('Web.php');


        // Add error middleware
        RouterHandler::$app->addErrorMiddleware(true, true, true);


        RouterHandler::$app->run();
    }

}
