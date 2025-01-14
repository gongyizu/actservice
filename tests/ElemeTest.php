<?php

class ElemeTest extends \PHPUnit\Framework\TestCase
{
    public function testStorePromotionQuery()
    {
        $client = new \Gongyizu\ActService\Eleme\Client();
        $client->setAppkey('34579689');
        $client->setSecret('2e5af836ad816af3d6cbd2dc99d0e9bd');

        $req = new \Gongyizu\ActService\Eleme\Requests\StorePromotionQueryRequest();
        $req->setPid('alsc_22156869_10467004_25388161');
        $req->setLongitude(116.404);
        $req->setLatitude(39.928);

        $result = $client->execute($req);
        $this->assertIsArray($result);
        $this->assertArrayHasKey('alibaba_alsc_union_eleme_promotion_storepromotion_query_response', $result);
    }

    public function testOfficialActivityGet()
    {
        $client = new \Gongyizu\ActService\Eleme\Client();
        $client->setAppkey('34579689');
        $client->setSecret('2e5af836ad816af3d6cbd2dc99d0e9bd');

        $req = new \Gongyizu\ActService\Eleme\Requests\OfficialActivityGetRequest();
        $req->setPid('alsc_22156869_10467004_25388161');
        $req->setSid('elc23000234jlkjcasdf');
        $req->setActivityID("11862");

        $result = $client->execute($req);
        $this->assertIsArray($result);
    }

    public function testKbcpxPositiveOrderGet()
    {
        $client = new \Gongyizu\ActService\Eleme\Client();
        $client->setAppkey('34579689');
        $client->setSecret('2e5af836ad816af3d6cbd2dc99d0e9bd');

        $req = new \Gongyizu\ActService\Eleme\Requests\KbcpxPositiveOrderGetRequest();
        $req->setPid('alsc_22156869_10467004_25388161');
        $req->setDateType(1);
        $req->setBizUnit(2);
        $req->setPageSize(5);
        $req->setPageNumber(1);
        $req->setStartDate('2024-12-25 11:11:11');

        $result = $client->execute($req);
        var_dump($result);
        $this->assertIsArray($result);
    }

    public function testMediaZoneAdd()
    {
        $client = new \Gongyizu\ActService\Eleme\Client();
        $client->setAppkey('34579689');
        $client->setSecret('2e5af836ad816af3d6cbd2dc99d0e9bd');

        $req = new \Gongyizu\ActService\Eleme\Requests\MediaZoneAddRequest();
        // $req->setMediaID();
        $req->setZoneName('testZoneAdd');

        $result = $client->execute($req);
        var_dump($result);
        $this->assertIsArray($result);
    }

    public function testMediaZoneGet()
    {
        // alsc_22156869_10467004_25861252
        $client = new \Gongyizu\ActService\Eleme\Client();
        $client->setAppkey('34579689');
        $client->setSecret('2e5af836ad816af3d6cbd2dc99d0e9bd');

        $req = new \Gongyizu\ActService\Eleme\Requests\MediaZoneGetRequest();
        $req->setPage(1);
        $req->setLimit(5);

        $result = $client->execute($req);
        var_dump($result);
        $this->assertIsArray($result);
    }
}