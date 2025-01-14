<?php

declare(strict_types=1);

namespace Gongyizu\ActService\MtUnion\Requests;

class GenerateLinkRequest extends AbstractRequest
{
    private $apiParams = [];

    /**
     * 活动 ID，可以在联盟活动列表中查看获取.
     * @var int
     */
    private $actId;

    /**
     * 推广位 sid，支持通过接口自定义创建，不受平台 200 个上限限制.
     * 长度不超过 64 个字符，支持大小写字母和数字.
     * 历史已创建的推广位不受这个约束.
     * 注意：1.酒店业务不能包含大写字母及“:”；2.优选业务不能包含“:”.
     * @var string
     */
    private $sid;

    /**
     * 链接类型，枚举值：1.H5；2.deeplink（唤起）链接；3.中间页唤起链接；4.微信小程序唤起路径；5.团口令.
     * @var int
     */
    private $linkType;

    /**
     * 0 长链；1 短链；默认 0.
     * @var int
     */
    private $shortLink;

    /**
     * 商品券展示ID（加密过的）.
     * @var string
     */
    private $skuViewId;

    public function getApiMethodName()
    {
        return 'https://openapi.meituan.com/api/generateLink';
    }

    public function getApiParams()
    {
        return $this->apiParams;
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

    public function getSid(): string
    {
        return $this->sid;
    }

    public function setSid(string $sid): void
    {
        $this->sid = $sid;
        $this->apiParams['sid'] = $sid;
    }

    public function getLinkType(): int
    {
        return $this->linkType;
    }

    public function setLinkType(int $linkType): void
    {
        $this->linkType = $linkType;
        $this->apiParams['linkType'] = $linkType;
    }

    public function getShortLink(): int
    {
        return $this->shortLink;
    }

    public function setShortLink(int $shortLink): void
    {
        $this->shortLink = $shortLink;
        $this->apiParams['shortLink'] = $shortLink;
    }

    public function getSkuViewId(): string
    {
        return $this->skuViewId;
    }

    public function setSkuViewId(string $skuViewId): void
    {
        $this->skuViewId = $skuViewId;
        $this->apiParams['skuViewId'] = $skuViewId;
    }
}
