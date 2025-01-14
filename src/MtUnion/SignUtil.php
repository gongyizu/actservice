<?php

declare(strict_types=1);

namespace Gongyizu\ActService\MtUnion;

class SignUtil
{
    public static function sign(array $params, $secret): array
    {
        if (isset($params['sign'])) {
            unset($params['sign']);
        }
        ksort($params);
        $str = $secret;
        foreach ($params as $key => $value) {
            $str .= $key . $value;
        }
        $str .= $secret;

        $params['sign'] = md5($str);
        return $params;
    }
}
