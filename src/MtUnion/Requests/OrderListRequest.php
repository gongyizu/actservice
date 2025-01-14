<?php

declare(strict_types=1);

namespace Gongyizu\ActService\MtUnion\Requests;

class OrderListRequest extends AbstractRequest
{
    private $apiParams = [];

    /**
     * 请求时刻 10 位时间戳（秒级），有效期 60s.
     * @var string
     */
    private $ts;

    /**
     * 活动 ID，可以在联盟活动列表中查看获取.
     * @var int
     */
    private $actId;

    /**
     * 业务线，与 actId 二者至少择其一.
     * @var int
     */
    private $businessLine;

    /**
     * 查询起始时间 10 位时间戳，以下单时间为准.
     * 最长查询时间为 1 天.
     * @var string
     */
    private $startTime;

    /**
     * 查询截止时间 10 位时间戳，以下单时间为准.
     * 最长查询时间为 1 天.
     * @var string
     */
    private $endTime;

    /**
     * 分页参数，起始值从 1 开始.
     * @var string
     */
    private $page;

    /**
     * 每页显示数据条数，最大值为 100.
     * @var string
     */
    private $limit;

    /**
     * 查询时间类型，枚举值：
     * 1. 按订单支付时间查询.
     * @var string
     */
    private $queryTimeType;

    public function getApiMethodName()
    {
        return 'https://openapi.meituan.com/api/orderList';
    }

    public function getApiParams()
    {
        return $this->apiParams;
    }

    public function getTs(): string
    {
        return $this->ts;
    }

    public function setTs(string $ts): void
    {
        $this->ts = $ts;
        $this->apiParams['ts'] = $ts;
    }

    public function getActId(): int
    {
        return $this->actId;
    }

    public function setActId(int $actId): void
    {
        $this->actId = $actId;
        $this->apiParams['actId'] = $actId;
    }

    public function getBusinessLine(): int
    {
        return $this->businessLine;
    }

    public function setBusinessLine(int $businessLine): void
    {
        $this->businessLine = $businessLine;
        $this->apiParams['businessLine'] = $businessLine;
    }

    public function getStartTime(): string
    {
        return $this->startTime;
    }

    public function setStartTime(string $startTime): void
    {
        $this->startTime = $startTime;
        $this->apiParams['startTime'] = $startTime;
    }

    public function getEndTime(): string
    {
        return $this->endTime;
    }

    public function setEndTime(string $endTime): void
    {
        $this->endTime = $endTime;
        $this->apiParams['endTime'] = $endTime;
    }

    public function getPage(): string
    {
        return $this->page;
    }

    public function setPage(string $page): void
    {
        $this->page = $page;
        $this->apiParams['page'] = $page;
    }

    public function getLimit(): string
    {
        return $this->limit;
    }

    public function setLimit(string $limit): void
    {
        $this->limit = $limit;
        $this->apiParams['limit'] = $limit;
    }

    public function getQueryTimeType(): string
    {
        return $this->queryTimeType;
    }

    public function setQueryTimeType(string $queryTimeType): void
    {
        $this->queryTimeType = $queryTimeType;
        $this->apiParams['queryTimeType'] = $queryTimeType;
    }
}
