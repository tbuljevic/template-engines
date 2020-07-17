<?php

namespace ExampleApp\Controller;

use Psr\Http\Message\ResponseInterface;

class BaseController
{
    protected $response;

    public function __construct(
        ResponseInterface $response
    )
    {
        $this->response = $response->withHeader('Content-Type', 'text/html');
    }
}