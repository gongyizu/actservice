<?php

declare(strict_types=1);

namespace Gongyizu\ActService;

use Gongyizu\ActService\Exception\JsonInvalidArgumentException;

class BaseUtil
{
    /**
     * @param mixed $data
     * @throws JsonInvalidArgumentException
     */
    public static function encode($data, int $flags = JSON_UNESCAPED_UNICODE, int $depth = 512): string
    {
        try {
            $json = json_encode($data, $flags, $depth);
        } catch (\Throwable $exception) {
            throw new JsonInvalidArgumentException($exception->getMessage(), (int) $exception->getCode(), $exception);
        }

        return $json;
    }

    /**
     * @throws JsonInvalidArgumentException
     */
    public static function decode(string $json, bool $assoc = true, int $depth = 512, int $flags = 0)
    {
        try {
            $decode = json_decode($json, $assoc, $depth, $flags);
        } catch (\Throwable $exception) {
            throw new JsonInvalidArgumentException($exception->getMessage(), (int) $exception->getCode(), $exception);
        }

        return $decode;
    }
}
