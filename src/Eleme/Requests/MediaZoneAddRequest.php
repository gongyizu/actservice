<?php

declare(strict_types=1);

namespace Gongyizu\ActService\Eleme\Requests;

/**
 * doc: https://open.taobao.com/api.htm?docId=58768&docType=2&scopeId=24408#requestExample.
 */
class MediaZoneAddRequest extends AbstractRequest
{
    private $apiParams = [
        'method' => 'alibaba.alsc.union.media.zone.add',
    ];

    /**
     * 推广位名称.
     * @var string
     */
    private $zoneName;

    /**
     * 媒体id，工具商渠道必填.
     * @var string
     */
    private $mediaID;

    public function getApiParams(): array
    {
        return $this->apiParams;
    }

    public function getZoneName(): string
    {
        return $this->zoneName;
    }

    public function setZoneName(string $zoneName): void
    {
        $this->zoneName = $zoneName;
        $this->apiParams['zone_name'] = $zoneName;
    }

    public function getMediaID(): string
    {
        return $this->mediaID;
    }

    public function setMediaID(string $mediaID): void
    {
        $this->mediaID = $mediaID;
        $this->apiParams['media_id'] = $mediaID;
    }
}
