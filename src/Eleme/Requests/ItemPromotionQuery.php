<?php

declare(strict_types=1);

namespace Gongyizu\ActService\Eleme\Requests;

use Gongyizu\ActService\BaseUtil;

/**
 * 本地联盟饿了么单品推广列表（餐饮）
 * doc: https://open.taobao.com/api.htm?docId=67502&docType=2&scopeId=24408#requestExample.
 */
class ItemPromotionQuery extends AbstractRequest
{
    private $apiParams = [
        'method' => 'alibaba.alsc.union.eleme.promotion.itempromotion.query',
    ];

    /**
     * 会话ID（查询第一页为空，从第二页开始赋值，取值来自第一页返回结果）.
     * @var string
     */
    private $sessionID;

    /**
     * 商品类型（hoard_coupon-囤券券）.
     * @var string
     */
    private $bizType;

    /**
     * 推广位.
     * @var string
     */
    private $pid;

    /**
     * 城市编码（国标）
     * 例：320000.
     * @var string
     */
    private $cityCode;

    /**
     * 排序（normal-佣金倒序，commission_desc-佣金倒序，commission_rate_desc-佣金比例倒序，sell_price_asc-价格正序，sell_price_desc-价格倒序）.
     * @var string
     */
    private $sortType;

    /**
     * 请求页（从1开始）.
     * @var string
     */
    private $pageNumber;

    /**
     * 每页数（1~20）.
     * @var string
     */
    private $pageSize;

    /**
     * 会员ID（需要联系运营申请）.
     * @var string
     */
    private $sid;

    /**
     * 品牌搜索
     * 例：麦当劳.
     * @var string
     */
    private $searchContent;

    /**
     * 商品类型，多值'|'分隔，默认全部（1-商品券；2-代金券）
     * 例：1|2.
     * @var string
     */
    private $itemType;

    public function getApiParams()
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

    public function getBizType(): string
    {
        return $this->bizType;
    }

    public function setBizType(string $bizType): void
    {
        $this->bizType = $bizType;
        $this->apiParams['biz_type'] = $bizType;
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

    public function getCityCode(): string
    {
        return $this->cityCode;
    }

    public function setCityCode(string $cityCode): void
    {
        $this->cityCode = $cityCode;
        $this->apiParams['city_code'] = $cityCode;
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

    public function getPageNumber(): string
    {
        return $this->pageNumber;
    }

    public function setPageNumber(string $pageNumber): void
    {
        $this->pageNumber = $pageNumber;
        $this->apiParams['page_number'] = $pageNumber;
    }

    public function getPageSize(): string
    {
        return $this->pageSize;
    }

    public function setPageSize(string $pageSize): void
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

    public function getSearchContent(): string
    {
        return $this->searchContent;
    }

    public function setSearchContent(string $searchContent): void
    {
        $this->searchContent = $searchContent;
        $this->apiParams['search_content'] = $searchContent;
    }

    public function getItemType(): string
    {
        return $this->itemType;
    }

    public function setItemType(string $itemType): void
    {
        $this->itemType = $itemType;
        $this->apiParams['item_type'] = $itemType;
    }
}
