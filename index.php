<?php

use Biboletin\Response\HtmlResponse;
use Biboletin\Response\JsonResponse;
use Biboletin\Response\XmlResponse;

include __DIR__ . "/vendor/autoload.php";

/*
$response = new HtmlResponse(
    "<h1>Hello, World!</h1>",
    200,
    ['Content-Type' => 'text/html; charset=UTF-8']
);
$response->withStatus(200);
$response->send();
*/

/*
$response = new XmlResponse(
    ['message' => 'Hello, World!', 'status' => 'success'],
    200,
    ['Content-Type' => 'application/xml; charset=UTF-8']
);
$response->withStatus(200);
$response->send();
*/

/*
$response = new JsonResponse(
    ['message' => 'Hello, World!', 'status' => 'success'],
    200,
    ['Content-Type' => 'application/json; charset=UTF-8']
);
$response->withStatus(200);
$response->send();
*/
