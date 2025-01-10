<?php

declare(strict_types=1);

namespace Gongyizu\ActService\JuTuike\Requests;

class UnionActListRequest extends AbstractRequest
{
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
     * 是否支持微信小程序，0 全部；1 支持小程序.
     * @var int
     */
    private $xcxSpread;

    /**
     * 是否支持支付宝小程序，0 全部；1 支持小程序.
     * @var int
     */
    private $alipayXcxSpread;

    /**
     * 分类目录.
     * @var string
     */
    private $cateName;

    /**
     * 请求参数.
     * @var array
     */
    private $apiParams = [];

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

    public function getXcxSpread(): int
    {
        return $this->xcxSpread;
    }

    public function setXcxSpread(int $xcxSpread): void
    {
        $this->xcxSpread = $xcxSpread;
        $this->apiParams['xcx_spread'] = $xcxSpread;
    }

    public function getAlipayXcxSpread(): int
    {
        return $this->alipayXcxSpread;
    }

    public function setAlipayXcxSpread(int $alipayXcxSpread): void
    {
        $this->alipayXcxSpread = $alipayXcxSpread;
        $this->apiParams['alipay_xcx_spread'] = $alipayXcxSpread;
    }

    public function getCateName(): string
    {
        return $this->cateName;
    }

    public function setCateName(string $cateName): void
    {
        $this->cateName = $cateName;
        $this->apiParams['cate_name'] = $cateName;
    }

    public function getApiMethodName()
    {
        return 'http://api.jutuike.com/union/act_list';
    }

    public function getApiParams()
    {
        return $this->apiParams;
    }
}
