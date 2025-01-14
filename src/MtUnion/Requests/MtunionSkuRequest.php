<?php

declare(strict_types=1);

namespace Gongyizu\ActService\MtUnion\Requests;

class MtunionSkuRequest extends AbstractRequest
{
    private $apiParams = [];

    /**
     * 渠道 UID.
     * @var int
     */
    private $uid;

    /**
     * 时间戳，秒时间戳，有效期加减 5 分钟
     * @var int
     */
    private $ts;

    /**
     * 活动 ID，商品券活动传 XX.
     * @var int
     */
    private $actId;

    /**
     * 业务类型，2 - 外卖.
     * @var string
     */
    private $businessLine;

    /**
     * 定位经度，需要获取商品券对应的【可配送】商家信息时传入该值.
     * 不支持按定位经纬度筛选过滤商品.
     * @var number
     */
    private $longitude;

    /**
     * 定位维度，需要获取商品券对应的【可配送】商家信息时传入该值.
     * 不支持按定位经纬度筛选过滤商品.
     * @var number
     */
    private $latitude;

    /**
     * 商品券包 ID 列表，长度上限 20 个.
     * 传 skuid 查询性能较列表查询高.
     * @var array
     */
    private $skuIdList;

    /**
     * 价格上限，单位：分.
     * @var int
     */
    private $priceMaximum;

    /**
     * 价格下限，单位：分.
     * @var int
     */
    private $priceMinimum;

    /**
     * 排序字段
     * sales_volumn 销量
     * selling_price 售价.
     * @var string
     */
    private $sortField;

    /**
     * 排序顺序
     * asc 升序
     * desc 降序.
     * @var string
     */
    private $sortOrder;

    /**
     * 分页参数，从 1 开始.
     * @var int
     */
    private $pageNo;

    /**
     * 分页参数，最大 20.
     * @var int
     */
    private $pageSize;

    public function getApiMethodName()
    {
        return 'https://openapi.meituan.com/api/mtunion/sku';
    }

    public function getApiParams()
    {
        return $this->apiParams;
    }

    public function getUid(): int
    {
        return $this->uid;
    }

    public function setUid(int $uid): void
    {
        $this->uid = $uid;
        $this->apiParams['uid'] = $uid;
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

    public function getActId(): int
    {
        return $this->actId;
    }

    public function setActId(int $actId): void
    {
        $this->actId = $actId;
        $this->apiParams['actId'] = $actId;
    }

    public function getBusinessLine(): string
    {
        return $this->businessLine;
    }

    public function setBusinessLine(string $businessLine): void
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

    public function getSkuIdList(): array
    {
        return $this->skuIdList;
    }

    public function setSkuIdList(array $skuIdList): void
    {
        $this->skuIdList = $skuIdList;
        $this->apiParams['skuIdList'] = $skuIdList;
    }

    public function getPriceMaximum(): int
    {
        return $this->priceMaximum;
    }

    public function setPriceMaximum(int $priceMaximum): void
    {
        $this->priceMaximum = $priceMaximum;
        $this->apiParams['priceMaximum'] = $priceMaximum;
    }

    public function getPriceMinimum(): int
    {
        return $this->priceMinimum;
    }

    public function setPriceMinimum(int $priceMinimum): void
    {
        $this->priceMinimum = $priceMinimum;
        $this->apiParams['priceMinimum'] = $priceMinimum;
    }

    public function getSortField(): string
    {
        return $this->sortField;
    }

    public function setSortField(string $sortField): void
    {
        $this->sortField = $sortField;
        $this->apiParams['sortField'] = $sortField;
    }

    public function getSortOrder(): string
    {
        return $this->sortOrder;
    }

    public function setSortOrder(string $sortOrder): void
    {
        $this->sortOrder = $sortOrder;
        $this->apiParams['sortOrder'] = $sortOrder;
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
}
