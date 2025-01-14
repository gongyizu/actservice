<?php

declare(strict_types=1);

namespace Gongyizu\ActService\JuTuike\Requests;

class MhczActRequest extends AbstractRequest
{
    private $apiParams = [];

    /**
     * 渠道标识，自定义参数跟单，长度不超过30位.
     * @var string
     */
    private $sid;

    /**
     * 用户手机号，传用户真实手机号，可以免短信验证登陆.
     * @var string
     */
    private $mobile;

    /**
     * 后台=》采买=》产品列表=》产品id，传产品id进单独产品充值页面.
     * @var number
     */
    private $id;

    public function getApiMethodName()
    {
        return 'http://api.jutuike.com/mhcz/act';
    }

    public function getApiParams()
    {
        return $this->apiParams;
    }

    /**
     * @return number
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param number $id
     */
    public function setId($id): void
    {
        $this->id = $id;
        $this->apiParams['id'] = $id;
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

    public function getMobile(): string
    {
        return $this->mobile;
    }

    public function setMobile(string $mobile): void
    {
        $this->mobile = $mobile;
        $this->apiParams['mobile'] = $mobile;
    }
}
