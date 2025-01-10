<?php

use PHPUnit\Framework\TestCase;

class MtMediaTest extends TestCase
{
    public function testDemo()
    {
        $cli = new \Gongyizu\ActService\MtMedia\Client();
        $cli->setDebug(true);
        $cli->setAppKey('');
        $cli->setSecret('');

        $req = new \Gongyizu\ActService\MtMedia\Requests\ApiQueryCouponRequest();
//        $req->setLatitude(120094000);
//        $req->setLongitude(303409000);
        $req->setListTopiId(2);
        $result = $cli->execute($req);

        $this->assertIsArray($result);
    }
}