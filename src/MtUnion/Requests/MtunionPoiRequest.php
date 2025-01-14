<?php

declare(strict_types=1);

namespace Gongyizu\ActService\MtUnion\Requests;

class MtunionPoiRequest extends AbstractRequest
{
    private $apiParams = [];

    /**
     * 自定义参数.
     * @var string
     */
    private $sid;

    /**
     * 业务线，固定 2.
     * @var int
     */
    private $businessLine;

    /**
     * 经度，火星坐标
     * 举例：120212010
     * 其中 120 是整数部分，212010 是小数部分.
     * @var number
     */
    private $longitude;

    /**
     * 纬度，火星坐标
     * 举例：302084000
     * 其中 30 是整数部分，2084000 是小数部分.
     * @var number
     */
    private $latitude;

    /**
     * 一级品类 ID.
     * @var int
     */
    private $cateId;

    /**
     * 二级品类 ID.
     * @var int
     */
    private $secondCateId;

    /**
     * 筛选项列表，逗号分隔，筛选项不超过 6 个.
     * 例：71,81.
     * @var string
     */
    private $filterConditionCodes;

    /**
     * 分页参数，页码，默认 1.
     * @var int
     */
    private $pageNo;

    /**
     * 分页参数，页大小，默认 200.
     * @var int
     */
    private $pageSize;

    /**
     * 首次查询不传，后面根据第一次接口返回的值传，否则可能导致翻页失败.
     * @var string
     */
    private $pageTraceId;

    /**
     * 秒时间戳.
     * @var int
     */
    private $ts;

    public function getApiMethodName()
    {
        return 'https://openapi.meituan.com/api/mtunion/poi';
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

    public function getBusinessLine(): int
    {
        return $this->businessLine;
    }

    public function setBusinessLine(int $businessLine): void
    {
        $this->businessLine = $businessLine;
        $this->apiParams['businessLine'] = $businessLine;
    }

    /**
     * @return number
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param number $longitude
     */
    public function setLongitude($longitude): void
    {
        $this->longitude = $longitude;
        $this->apiParams['longitude'] = $longitude;
    }

    /**
     * @return number
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param number $latitude
     */
    public function setLatitude($latitude): void
    {
        $this->latitude = $latitude;
        $this->apiParams['latitude'] = $latitude;
    }

    public function getCateId(): int
    {
        return $this->cateId;
    }

    public function setCateId(int $cateId): void
    {
        $this->cateId = $cateId;
        $this->apiParams['cateId'] = $cateId;
    }

    public function getSecondCateId(): int
    {
        return $this->secondCateId;
    }

    public function setSecondCateId(int $secondCateId): void
    {
        $this->secondCateId = $secondCateId;
        $this->apiParams['secondCateId'] = $secondCateId;
    }

    public function getFilterConditionCodes(): string
    {
        return $this->filterConditionCodes;
    }

    public function setFilterConditionCodes(string $filterConditionCodes): void
    {
        $this->filterConditionCodes = $filterConditionCodes;
        $this->apiParams['filterConditionCodes'] = $filterConditionCodes;
    }

    public function getPageNo(): int
    {
        return $this->pageNo;
    }

    public function setPageNo(int $pageNo): void
    {
        $this->pageNo = $pageNo;
        $this->apiParams['pageNo'] = $pageNo;
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

    public function getPageTraceId(): string
    {
        return $this->pageTraceId;
    }

    public function setPageTraceId(string $pageTraceId): void
    {
        $this->pageTraceId = $pageTraceId;
        $this->apiParams['pageTraceId'] = $pageTraceId;
    }

    public function getTs(): int
    {
        return $this->ts;
    }

    public function setTs(int $ts): void
    {
        $this->ts = $ts;
        $this->apiParams['ts'] = $ts;
    }
}
