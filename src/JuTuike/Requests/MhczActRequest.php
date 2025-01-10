<?php

declare(strict_types=1);

namespace Gongyizu\ActService\JuTuike\Requests;

class MhczActRequest extends AbstractRequest
{
    private $apiParams = [];

    public function getApiMethodName()
    {
        return 'http://api.jutuike.com/mhcz/act';
    }

    public function getApiParams()
    {
        return $this->apiParams;
    }
}
