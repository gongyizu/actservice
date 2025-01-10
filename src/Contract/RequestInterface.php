<?php

declare(strict_types=1);

namespace Gongyizu\ActService\Contract;

interface RequestInterface
{
    public function getResult($response);

    public function getApiMethodName();

    public function getApiParams();
}
