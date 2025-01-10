<?php

declare(strict_types=1);

namespace Gongyizu\ActService\JuTuike\Requests;

class UnionOrdersRequest extends AbstractRequest
{
    private $apiParams = [];

    /**
     * 开始时间，与结束时间相差不超过 1 小时.
     * @var string
     */
    private $startTime;

    /**
     * 结束时间，与开始时间相差不超过 1 小时.
     * @var string
     */
    private $endTime;

    /**
     * 1.按支付时间；2.按更新时间；3.创建时间；默认 3.
     * @var int
     */
    private $queryType;

    /**
     * 自定义跟单参数.
     * @var string
     */
    private $sid;

    /**
     * 品牌ID：1.美团；2.饿了么；3.拼多多；4.京东；5.肯德基；6.电影；7.麦当劳；8.话费充值；9.百果园；
     * 10.奈雪的茶；11.瑞幸咖啡；12.星巴克；13.喜茶；14.唯品会；15.滴滴/花小猪；16.汉堡王；17.高德打车；18.电费充值；
     * 19.会员充值；20.特价快递；21.联联周边游；22.抖音联盟；23.必胜客；24.旅划算；25.大牌餐券；26.千千惠生活；27.流量卡；
     * 28.同程出行；29.华莱士；30.T3出行；31.景点门票；32.淘宝；33.库迪咖啡；34.携程旅行；35.分销酒店；36.美团赚；.
     * @var int
     */
    private $brandID;

    /**
     * 订单统一状态：0.未付款；1.已付款；2.待结算；3.已结算；4.无效订单；.
     * @var int
     */
    private $status;

    /**
     * 第三方渠道标识.
     * @var string
     */
    private $relationFlagName;

    /**
     * 页码，默认 1.
     * @var int
     */
    private $page;

    /**
     * 每页显示多少，默认 20，最大 100.
     * @var int
     */
    private $pageSize;

    /**
     * 订单号.
     * @var string
     */
    private $orderSN;

    public function getApiMethodName()
    {
        return 'http://api.jutuike.com/union/orders';
    }

    public function getApiParams()
    {
        return $this->apiParams;
    }

    public function getStartTime(): string
    {
        return $this->startTime;
    }

    public function setStartTime(string $startTime): void
    {
        $this->startTime = $startTime;
        $this->apiParams['start_time'] = $startTime;
    }

    public function getEndTime(): string
    {
        return $this->endTime;
    }

    public function setEndTime(string $endTime): void
    {
        $this->endTime = $endTime;
        $this->apiParams['end_time'] = $endTime;
    }

    public function getQueryType(): int
    {
        return $this->queryType;
    }

    public function setQueryType(int $queryType): void
    {
        $this->queryType = $queryType;
        $this->apiParams['query_type'] = $queryType;
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

    public function getBrandID(): int
    {
        return $this->brandID;
    }

    public function setBrandID(int $brandID): void
    {
        $this->brandID = $brandID;
        $this->apiParams['brand_id'] = $brandID;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function setStatus(int $status): void
    {
        $this->status = $status;
        $this->apiParams['status'] = $status;
    }

    public function getRelationFlagName(): string
    {
        return $this->relationFlagName;
    }

    public function setRelationFlagName(string $relationFlagName): void
    {
        $this->relationFlagName = $relationFlagName;
        $this->apiParams['relation_flag_name'] = $relationFlagName;
    }

    public function getPage(): int
    {
        return $this->page;
    }

    public function setPage(int $page): void
    {
        $this->page = $page;
        $this->apiParams['page'] = $page;
    }

    public function getPageSize(): int
    {
        return $this->pageSize;
    }

    public function setPageSize(int $pageSize): void
    {
        $this->pageSize = $pageSize;
        $this->apiParams['pageSize'] = $pageSize;
    }

    public function getOrderSN(): string
    {
        return $this->orderSN;
    }

    public function setOrderSN(string $orderSN): void
    {
        $this->orderSN = $orderSN;
        $this->apiParams['order_sn'] = $orderSN;
    }
}
