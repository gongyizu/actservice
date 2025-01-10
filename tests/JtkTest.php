<?php

class JtkTest extends \PHPUnit\Framework\TestCase
{
    public function testOrders()
    {
        $cli = new \Gongyizu\ActService\JuTuike\Client();
        $cli->setApikey('');

        $req = new \Gongyizu\ActService\JuTuike\Requests\UnionOrdersRequest();
        $req->setPageSize(5);
        $req->setStartTime('2025-01-09 15:53:00');
        $req->setStartTime('2025-01-09 14:53:00');

        $result = $cli->execute($req);
        $this->assertIsArray($result);
        $this->assertEquals(1, $result['code']);
    }

    public function testActList()
    {
        $cli = new \Gongyizu\ActService\JuTuike\Client();
        $cli->setApikey('V8ktR6VhVZoHi8IuDz2qepiq4XKjxzlG');

        $req = new \Gongyizu\ActService\JuTuike\Requests\UnionActListRequest();
        $req->setPageSize(5);

        $result = $cli->execute($req);
        $this->assertIsArray($result);
        $this->assertEquals(1, $result['code']);
    }
}