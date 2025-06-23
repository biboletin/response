<?php

namespace Biboletin\Response;

use Biboletin\Request\Stream;

class HtmlResponse extends BaseResponse
{
    public  function __construct(string $data, int $statusCode = 200, array $headers = [])
    {
        $body = new Stream(fopen('php://temp', 'r+'));
        $body->write($data);
        $body->rewind();

        $headers['Content-Type'] = 'text/html; charset=UTF-8';

        parent::__construct($statusCode, $headers, $body);
    }
}