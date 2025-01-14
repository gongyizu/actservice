<?php

declare(strict_types=1);

namespace Gongyizu\ActService\Eleme\Requests;

use Gongyizu\ActService\BaseUtil;

/**
 * 本地联盟饿了么单品推广详情（零售）
 * doc: https://open.taobao.com/api.htm?docId=70711&docType=2&scopeId=24408.
 */
class RetailItemPromotionGet extends AbstractRequest
{
    private $apiParams = [
        'method' => 'alibaba.alsc.union.eleme.promotion.retail.itempromotion.get',
    ];

    /**
     * 推广位.
     * @var string
     */
    private $pid;

    /**
     * 商品ID.
     * @var string
     */
    private $itemID;

    /**
     * 会员ID（需要联系运营申请）.
     * @var string
     */
    private $sid;

    /**
     * todo: test
     * 是否返回微信推广图片.
     * @var string
     */
    private $includeWxImg;

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
    }

    public function getItemID(): string
    {
        return $this->itemID;
    }

    public function setItemID(string $itemID): void
    {
        $this->itemID = $itemID;
    }

    public function getSid(): string
    {
        return $this->sid;
    }

    public function setSid(string $sid): void
    {
        $this->sid = $sid;
    }

    public function getIncludeWxImg(): string
    {
        return $this->includeWxImg;
    }

    public function setIncludeWxImg(string $includeWxImg): void
    {
        $this->includeWxImg = $includeWxImg;
    }
}
