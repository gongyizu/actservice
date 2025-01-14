<?php

declare(strict_types=1);

namespace Gongyizu\ActService\Eleme\Requests;

use Gongyizu\ActService\BaseUtil;
use Gongyizu\ActService\Contract\RequestInterface;
use Gongyizu\ActService\Exception\ResultErrorException;

abstract class AbstractRequest implements RequestInterface
{
    private $https;

    public function __construct($https = false)
    {
        $this->https = $https;
    }

    public function getResult($response)
    {
        $result = BaseUtil::decode($response);

        if (isset($result['error_response'])) {
            $errorInfo = $result['error_response'];
            $errMsg = ($errorInfo['msg'] ?? '') . ':' . ($errorInfo['sub_msg'] ?? '');
            throw new ResultErrorException($errMsg, $errorInfo['code']);
        }

        return $result;
    }

    public function getApiMethodName()
    {
        return $this->https ? 'https://eco.taobao.com/router/rest' : 'http://gw.api.taobao.com/router/rest';
    }
}
