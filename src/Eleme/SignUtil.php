<?php

declare(strict_types=1);

namespace Gongyizu\ActService\Eleme;

class SignUtil
{
    public static function sign(array $params, $secret, $signMethod): string
    {
        ksort($params);

        $joinedParams = $secret;

        foreach ($params as $k => $v) {
            if (is_string($v) && substr($v, 0, 1) != '@') {
                $joinedParams .= "{$k}{$v}";
            }
        }

        unset($k, $v);
        $joinedParams .= $secret;
        return strtoupper(md5($joinedParams));
    }
}
