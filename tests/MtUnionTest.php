<?php

class MtUnionTest extends \PHPUnit\Framework\TestCase
{
    public function testOrders()
    {
        $cli = new \Gongyizu\ActService\MtUnion\Client();
        $cli->setAppkey('');
        $cli->setSecret('');

        $req = new \Gongyizu\ActService\MtUnion\Requests\OrderListRequest();
        $req->setTs(time());
        $req->setActId(33);
        $req->setStartTime(1734624001);
        $req->setEndTime(1734710401);
        $req->setPage(1);
        $req->setLimit(5);

        $result = $cli->execute($req);
        $this->assertIsArray($result);
        $this->assertArrayHasKey('dataList', $result);
        $this->assertArrayHasKey('total', $result);
    }

    public function testSku()
    {
        $cli = new \Gongyizu\ActService\MtUnion\Client();
        $cli->setAppkey('');
        $cli->setSecret('');

        $req = new \Gongyizu\ActService\MtUnion\Requests\MtunionSkuRequest();
        $req->setTs(time());
        $req->setBusinessLine(2);
        $req->setActId(33);
        $req->setUid(108565);
        $req->setPageNo(1);
        $req->setPageSize(5);

        $result = $cli->execute($req);
        $this->assertIsArray($result);
        $this->assertArrayHasKey('code', $result);
        $this->assertArrayHasKey('data', $result);
        $this->assertEquals(0, $result['code']);
    }

    public function testPoi()
    {
        $cli = new \Gongyizu\ActService\MtUnion\Client();
        $cli->setAppkey('');
        $cli->setSecret('');

        $req = new \Gongyizu\ActService\MtUnion\Requests\MtunionPoiRequest();
        $req->setTs(time());
        $req->setLongitude(120212010);
        $req->setLatitude(302084000);
        $req->setBusinessLine(2);
        $req->setPageNo(1);
        $req->setPageSize(5);

        $result = $cli->execute($req);
        $this->assertIsArray($result);
        $this->assertArrayHasKey('code', $result);
        $this->assertArrayHasKey('data', $result);
        $this->assertEquals(0, $result['code']);
    }

    public function testGenLink()
    {
        $cli = new \Gongyizu\ActService\MtUnion\Client();
        $cli->setAppkey('');
        $cli->setSecret('');

        $req = new \Gongyizu\ActService\MtUnion\Requests\GenerateLinkRequest();
        $req->setSid('mt6sz000000021786065040zn3wa8y');
        $req->setActId(2);
        $req->setLinkType(1);
        $req->setShortLink(1);

        $result = $cli->execute($req);
        $this->assertIsArray($result);
        $this->assertArrayHasKey('code', $result);
        $this->assertArrayHasKey('data', $result);
        $this->assertEquals(0, $result['code']);
    }
}