<?php

declare(strict_types=1);

namespace Gongyizu\ActService\JuTuike\Requests;

use Gongyizu\ActService\BaseUtil;
use Gongyizu\ActService\Contract\RequestInterface;
use Gongyizu\ActService\Exception\ResultErrorException;

abstract class AbstractRequest implements RequestInterface
{
    public function getResult($response)
    {
        $result = BaseUtil::decode($response);
        $code = $result['code'] ?? 0;

        if ($code !== 1) {
            throw new ResultErrorException($result['message'] ?? '', $code);
        }

        return $result;
    }
}
