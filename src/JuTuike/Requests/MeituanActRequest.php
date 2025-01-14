<?php

declare(strict_types=1);

namespace Gongyizu\ActService\JuTuike\Requests;

/**
 * 美团联盟外卖/酒店/券包活动转链接口
 * doc: https://www.jutuike.com/doc/3.
 */
class MeituanActRequest extends AbstractRequest
{
    private $apiParams = [];

    /**
     * 活动类型 1-外卖 6-酒店活动页 8-外卖品质商家活动 9-美团电商-嗨购节 10-美团电商-超级好物场 11-美团酒店搜索首页 15-美团券包 默认1.
     * @var int
     */
    private $type;

    /**
     * 渠道标识，自定义参数跟单，长度不超过30位.
     * @var string
     */
    private $sid;

    /**
     * 活动id，超值券包专用.
     * @var string
     */
    private $actId;

    public function getApiMethodName()
    {
        return 'http://api.jutuike.com/Meituan/act';
    }

    public function getApiParams()
    {
        return $this->apiParams;
    }

    public function getType(): int
    {
        return $this->type;
    }

    public function setType(int $type): void
    {
        $this->type = $type;
        $this->apiParams['type'] = $type;
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

    public function getActId(): string
    {
        return $this->actId;
    }

    public function setActId(string $actId): void
    {
        $this->actId = $actId;
        $this->apiParams['actId'] = $actId;
    }
}
