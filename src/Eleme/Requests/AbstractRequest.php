<?php

declare(strict_types=1);

namespace Gongyizu\ActService\Eleme\Requests;

use Gongyizu\ActService\Contract\RequestInterface;

abstract class AbstractRequest implements RequestInterface
{
    private $https;

    public function __construct($https = false)
    {
        $this->https = $https;
    }

    public function getResult($response)
    {
        return [];
    }

    public function getApiMethodName()
    {
        return $this->https ? 'https://eco.taobao.com/router/rest' : 'http://gw.api.taobao.com/router/rest';
    }
}
