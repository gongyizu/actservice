<?php

namespace Gongyizu\ActService\Eleme\Requests;

/**
 * doc: https://open.taobao.com/api.htm?docId=59449&docType=2&scopeId=24408
 */
class KbcpxPositiveOrderGetRequest extends AbstractRequest
{
    private $apiParams = [];

    /**
     * 时间维度，1-付款时间 2-创建时间 3-结算时间 4-更新时间
     * @var int
     */
    private $dateType;

    /**
     * 结算状态，1-已结算 2-未结算 不传-全部状态
     * @var int
     */
    private $settleState;

    /**
     * 查询截止时间，精确到时分秒。开始和结束时间不能超过31天
     * @var string
     */
    private $endDate;

    /**
     * 1-CPA 2-CPS
     * @var int
     */
    private $bizUnit;

    /**
     * 每页返回数据大小，默认10，最大返回50
     * @var int
     */
    private $pageSize;

    /**
     * 页码，默认第一页
     * @var int
     */
    private $pageNumber;

    /**
     * 查询起始时间，精确到时分秒。开始和结束时间不能超过31天
     * @var string
     */
    private $startDate;

    /**
     * 订单状态，0-已失效 1-已下单 2-已付款 4-已收货 不传-全部状态
     * @var int
     */
    private $orderState;

    /**
     * 场景值，支持多场景（英文逗号分隔）查询7卡券订单，8卡券核销订单，10-媒体出资CPS红包，11-媒体出资霸王餐加码红包，26-评价有礼订单
     * @var string
     */
    private $flowType;

    /**
     * 推广位pid
     * @var string
     */
    private $pid;

    /**
     * 淘宝子订单号或饿了么订单号
     * @var string
     */
    private $orderID;

    /**
     * 是否包含核销门店
     * @var bool
     */
    private $includeUsedStoreID;

    public function getApiParams()
    {
        return $this->apiParams;
    }

    public function getDateType(): int
    {
        return $this->dateType;
    }

    public function setDateType(int $dateType): void
    {
        $this->dateType = $dateType;
        $this->apiParams['date_type'] = $dateType;
    }

    public function getSettleState(): int
    {
        return $this->settleState;
    }

    public function setSettleState(int $settleState): void
    {
        $this->settleState = $settleState;
        $this->apiParams['settle_state'] = $settleState;
    }

    public function getEndDate(): string
    {
        return $this->endDate;
    }

    public function setEndDate(string $endDate): void
    {
        $this->endDate = $endDate;
        $this->apiParams['end_date'] = $endDate;
    }

    public function getBizUnit(): int
    {
        return $this->bizUnit;
    }

    public function setBizUnit(int $bizUnit): void
    {
        $this->bizUnit = $bizUnit;
        $this->apiParams['biz_unit'] = $bizUnit;
    }

    public function getPageSize(): int
    {
        return $this->pageSize;
    }

    public function setPageSize(int $pageSize): void
    {
        $this->pageSize = $pageSize;
        $this->apiParams['page_size'] = $pageSize;
    }

    public function getPageNumber(): int
    {
        return $this->pageNumber;
    }

    public function setPageNumber(int $pageNumber): void
    {
        $this->pageNumber = $pageNumber;
        $this->apiParams['page_number'] = $pageNumber;
    }

    public function getStartDate(): string
    {
        return $this->startDate;
    }

    public function setStartDate(string $startDate): void
    {
        $this->startDate = $startDate;
        $this->apiParams['start_date'] = $startDate;
    }

    public function getOrderState(): int
    {
        return $this->orderState;
    }

    public function setOrderState(int $orderState): void
    {
        $this->orderState = $orderState;
        $this->apiParams['order_state'] = $orderState;
    }

    public function getFlowType(): string
    {
        return $this->flowType;
    }

    public function setFlowType(string $flowType): void
    {
        $this->flowType = $flowType;
        $this->apiParams['flow_type'] = $flowType;
    }

    public function getPid(): string
    {
        return $this->pid;
    }

    public function setPid(string $pid): void
    {
        $this->pid = $pid;
        $this->apiParams['pid'] = $pid;
    }

    public function getOrderID(): string
    {
        return $this->orderID;
    }

    public function setOrderID(string $orderID): void
    {
        $this->orderID = $orderID;
        $this->apiParams['order_id'] = $orderID;
    }

    public function isIncludeUsedStoreID(): bool
    {
        return $this->includeUsedStoreID;
    }

    public function setIncludeUsedStoreID(bool $includeUsedStoreID): void
    {
        $this->includeUsedStoreID = $includeUsedStoreID;
        $this->apiParams['include_used_store_id'] = $includeUsedStoreID;
    }
}