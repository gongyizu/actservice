<?php

declare(strict_types=1);

namespace Gongyizu\ActService\MtMedia\Requests;

use Gongyizu\ActService\BaseUtil;
use Gongyizu\ActService\Contract\RequestInterface;
use Gongyizu\ActService\Exception\JsonInvalidArgumentException;
use Gongyizu\ActService\Exception\ResultErrorException;

abstract class AbstractRequest implements RequestInterface
{
    /**
     * 从响应中解析出 json 格式的结果.
     * @param $response
     * @throws ResultErrorException
     * @throws JsonInvalidArgumentException
     * @return mixed
     */
    public function getResult($response)
    {
        $result = BaseUtil::decode($response);
        $code = $result['code'] ?? 301;
        $code = $code == 200 ? 301 : $code;
        if ($code !== 0) {
            throw new ResultErrorException($result['message'] ?? '', $code);
        }
        return $result;
    }
}
