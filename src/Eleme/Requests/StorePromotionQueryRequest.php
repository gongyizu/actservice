<?php

declare(strict_types=1);

namespace Gongyizu\ActService\Eleme\Requests;

use Gongyizu\ActService\BaseUtil;

/**
 * doc: https://open.taobao.com/api.htm?docId=60448&docType=2&scopeId=24408.
 */
class StorePromotionQueryRequest extends AbstractRequest
{
    private $apiParams = [
        'method' => 'alibaba.alsc.union.eleme.promotion.storepromotion.query',
    ];

    /**
     * 会话ID（分页场景首次请求结果返回，后续请求必须携带，服务根据session_id相同请求次数自动翻页返回）.
     * @var string
     */
    private $sessionID;

    /**
     * 渠道PID.
     * @var string
     */
    private $pid;

    /**
     * 经度.
     * @var string
     */
    private $longitude;

    /**
     * 经度.
     * @var string
     */
    private $latitude;

    /**
     * 城市编码（只用于经纬度覆盖多个城市时过滤）.
     * @var string
     */
    private $cityID;

    /**
     * 排序类型，默认normal 排序规则包括:{"normal":"佣金倒序","distance":"距离由近到远","commission":"佣金倒序","monthlySale":"月销量","couponAmount":"叠加券金额倒序","activityReward":"奖励金金额倒序","commissionRate":"佣金比例倒序"}.
     * @var string
     */
    private $sortType;

    /**
     * 是否参与奖励金活动（默认false不做过滤）.
     * @var bool
     */
    private $inActivity;

    /**
     * 否当前有c端奖励金活动库存（默认false不做过滤）.
     * @var bool
     */
    private $hasBonusStock;

    /**
     * 店铺佣金比例下限，代表筛选店铺全店佣金大于等于0.01的店铺.
     * @var string
     */
    private $minCommissionRate;

    /**
     * 每页数量（include_dynamic=true时，范围1~20；include_dynamic=false时，范围1~100）.
     * @var int
     */
    private $pageSize;

    /**
     * 三方扩展id.
     * @var string
     */
    private $sid;

    /**
     * 指定召回供给枚举.
     * @var string
     */
    private $bizType;

    /**
     * 以一级类目进行类目限定，以,或者|进行类目分隔.
     * @var string
     */
    private $filterFirstCategories;

    /**
     * 5级类目查询，以"|"分隔.
     * @var string
     */
    private $filterOnePointFiveCategories;

    /**
     * 媒体出资活动ID.
     * @var string
     */
    private $mediaActivityID;

    /**
     * 检索内容（支持门店名称）.
     * @var string
     */
    private $searchContent;

    /**
     * 是否返回门店动态信息，默认返回（false-不返回门店动态信息，page_size最大支持100；true-返回门店动态信息，page_size最大支持20）.
     * @var bool
     */
    private $includeDynamic;

    public function getApiParams(): array
    {
        $params = $this->apiParams;
        $method = $params['method'];
        unset($params['method']);

        return [
            'method' => $method,
            'query_request' => BaseUtil::encode($params),
        ];
    }

    public function getSessionID(): string
    {
        return $this->sessionID;
    }

    public function setSessionID(string $sessionID): void
    {
        $this->sessionID = $sessionID;
        $this->apiParams['session_id'] = $sessionID;
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

    public function getLongitude(): string
    {
        return $this->longitude;
    }

    public function setLongitude(string $longitude): void
    {
        $this->longitude = $longitude;
        $this->apiParams['longitude'] = $longitude;
    }

    public function getLatitude(): string
    {
        return $this->latitude;
    }

    public function setLatitude(string $latitude): void
    {
        $this->latitude = $latitude;
        $this->apiParams['latitude'] = $latitude;
    }

    public function getCityID(): string
    {
        return $this->cityID;
    }

    public function setCityID(string $cityID): void
    {
        $this->cityID = $cityID;
        $this->apiParams['city_id'] = $cityID;
    }

    public function getSortType(): string
    {
        return $this->sortType;
    }

    public function setSortType(string $sortType): void
    {
        $this->sortType = $sortType;
        $this->apiParams['sort_type'] = $sortType;
    }

    public function isInActivity(): bool
    {
        return $this->inActivity;
    }

    public function setInActivity(bool $inActivity): void
    {
        $this->inActivity = $inActivity;
        $this->apiParams['in_activity'] = $inActivity;
    }

    public function isHasBonusStock(): bool
    {
        return $this->hasBonusStock;
    }

    public function setHasBonusStock(bool $hasBonusStock): void
    {
        $this->hasBonusStock = $hasBonusStock;
        $this->apiParams['has_bonus_stock'] = $hasBonusStock;
    }

    public function getMinCommissionRate(): string
    {
        return $this->minCommissionRate;
    }

    public function setMinCommissionRate(string $minCommissionRate): void
    {
        $this->minCommissionRate = $minCommissionRate;
        $this->apiParams['min_commission_rate'] = $minCommissionRate;
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

    public function getSid(): string
    {
        return $this->sid;
    }

    public function setSid(string $sid): void
    {
        $this->sid = $sid;
        $this->apiParams['sid'] = $sid;
    }

    public function getBizType(): string
    {
        return $this->bizType;
    }

    public function setBizType(string $bizType): void
    {
        $this->bizType = $bizType;
        $this->apiParams['biz_type'] = $bizType;
    }

    public function getFilterFirstCategories(): string
    {
        return $this->filterFirstCategories;
    }

    public function setFilterFirstCategories(string $filterFirstCategories): void
    {
        $this->filterFirstCategories = $filterFirstCategories;
        $this->apiParams['filter_first_categories'] = $filterFirstCategories;
    }

    public function getFilterOnePointFiveCategories(): string
    {
        return $this->filterOnePointFiveCategories;
    }

    public function setFilterOnePointFiveCategories(string $filterOnePointFiveCategories): void
    {
        $this->filterOnePointFiveCategories = $filterOnePointFiveCategories;
        $this->apiParams['filter_one_point_five_categories'] = $filterOnePointFiveCategories;
    }

    public function getMediaActivityID(): string
    {
        return $this->mediaActivityID;
    }

    public function setMediaActivityID(string $mediaActivityID): void
    {
        $this->mediaActivityID = $mediaActivityID;
        $this->apiParams['media_activity_id'] = $mediaActivityID;
    }

    public function getSearchContent(): string
    {
        return $this->searchContent;
    }

    public function setSearchContent(string $searchContent): void
    {
        $this->searchContent = $searchContent;
        $this->apiParams['search_content'] = $searchContent;
    }

    public function isIncludeDynamic(): bool
    {
        return $this->includeDynamic;
    }

    public function setIncludeDynamic(bool $includeDynamic): void
    {
        $this->includeDynamic = $includeDynamic;
        $this->apiParams['include_dynamic'] = $includeDynamic;
    }
}
