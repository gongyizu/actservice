<?php

declare(strict_types=1);

namespace Gongyizu\ActService\MtUnion\Requests;

use Gongyizu\ActService\BaseUtil;
use Gongyizu\ActService\Contract\RequestInterface;
use Gongyizu\ActService\Exception\ResultErrorException;

abstract class AbstractRequest implements RequestInterface
{
    public function getResult($response)
    {
        $result = BaseUtil::decode($response);

        if (isset($result['code']) && $result['code'] != 0) {
            throw new ResultErrorException($result['message'] ?? '', $result['code']);
        }

        return $result;
    }
}
