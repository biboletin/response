<?php

namespace Biboletin\Response;

class RedirectResponseHandler extends BaseResponse
{
    public function __construct(string $url, int $statusCode = 200, array $headers = [])
    {
        $headers['Location'] = [$url];

        parent::__construct($statusCode, $headers, null);
    }
}