<?php

declare(strict_types=1);

namespace Gongyizu\ActService\Eleme\Requests;

use Gongyizu\ActService\BaseUtil;

/**
 * doc: https://open.taobao.com/api.htm?docId=60449&docType=2&scopeId=24408.
 */
class OfficialActivityGetRequest extends AbstractRequest
{
    private $apiParams = [
        'method' => 'alibaba.alsc.union.eleme.promotion.officialactivity.get',
    ];

    /**
     * 渠道PID.
     * @var string
     */
    private $pid;

    /**
     * 活动ID.
     * @var string
     */
    private $activityID;

    /**
     * 三方会员id。长度限制50.
     * @var string
     */
    private $sid;

    /**
     * 是否返回二维码
     * @var bool
     */
    private $includeQrCode;

    /**
     * 是否返回图片.
     * @var bool
     */
    private $includeImage;

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

    public function getPid(): string
    {
        return $this->pid;
    }

    public function setPid(string $pid): void
    {
        $this->pid = $pid;
        $this->apiParams['pid'] = $pid;
    }

    public function getActivityID(): string
    {
        return $this->activityID;
    }

    public function setActivityID(string $activityID): void
    {
        $this->activityID = $activityID;
        $this->apiParams['activity_id'] = $activityID;
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

    public function isIncludeQrCode(): bool
    {
        return $this->includeQrCode;
    }

    public function setIncludeQrCode(bool $includeQrCode): void
    {
        $this->includeQrCode = $includeQrCode;
        $this->apiParams['include_qr_code'] = $includeQrCode;
    }

    public function isIncludeImage(): bool
    {
        return $this->includeImage;
    }

    public function setIncludeImage(bool $includeImage): void
    {
        $this->includeImage = $includeImage;
        $this->apiParams['include_image'] = $includeImage;
    }
}
