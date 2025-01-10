<?php

declare(strict_types=1);

namespace Gongyizu\ActService\JuTuike\Requests;

class UnionActRequest extends AbstractRequest
{
    private $apiParams = [];

    /**
     * 自定义参数跟单.
     * @var string
     */
    private $sid;

    /**
     * 活动ID，https://www.jutuike.com/doc/34.
     * @var int
     */
    private $actID;

    public function getApiMethodName()
    {
        return 'http://api.jutuike.com/union/act';
    }

    public function getApiParams()
    {
        return $this->apiParams;
    }

    public function getSid(): string
    {
        return $this->sid;
    }

    public function setSid(string $sid): void
    {
        $this->sid = $sid;
        $this->apiParams['sid'] = $sid;
    }

    public function getActID(): int
    {
        return $this->actID;
    }

    public function setActID(int $actID): void
    {
        $this->actID = $actID;
        $this->apiParams['act_id'] = $actID;
    }
}
