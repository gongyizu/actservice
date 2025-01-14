<?php

declare(strict_types=1);

namespace Gongyizu\ActService\Eleme\Requests;

use Gongyizu\ActService\BaseUtil;

/**
 * 本地联盟饿了么单品推广列表（零售）
 * doc: https://open.taobao.com/api.htm?docId=70712&docType=2&scopeId=24408.
 */
class RetailItemPromotionQuery extends AbstractRequest
{
    private $apiParams = [
        'method' => 'alibaba.alsc.union.eleme.promotion.retail.itempromotion.query',
    ];

    /**
     * 会话ID（查询第一页为空，从第二页开始赋值，取值来自第一页返回结果）.
     * @var string
     */
    private $sessionID;

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
}
