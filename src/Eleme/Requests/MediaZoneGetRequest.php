<?php

declare(strict_types=1);

namespace Gongyizu\ActService\Eleme\Requests;

class MediaZoneGetRequest extends AbstractRequest
{
    private $apiParams = [
        'method' => 'alibaba.alsc.union.media.zone.get',
    ];

    /**
     * 页码，从1开始.
     * @var string
     */
    private $page;

    /**
     * 每页展示条数.
     * @var string
     */
    private $limit;

    public function getApiParams(): array
    {
        return $this->apiParams;
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
}
