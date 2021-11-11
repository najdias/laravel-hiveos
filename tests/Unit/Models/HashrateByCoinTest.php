<?php

namespace Days85\HiveOS\Tests\Unit\Models;

use Days85\HiveOS\Models\HashrateByCoin;
use Days85\HiveOS\Tests\TestCase;

class HashrateByCoinTest extends TestCase
{
    public function testGetProperties()
    {
        $hashrateByCoinArray = $this->getFarmsResponse()['data'][0]['hashrates_by_coin'][0];
        $hashrateByCoin = new HashrateByCoin();
        $hashrateByCoin->fromArray($hashrateByCoinArray);

        $this->assertIsString($hashrateByCoin->getCoin());
        $this->assertEquals($hashrateByCoinArray['coin'], $hashrateByCoin->getCoin());
        $this->assertIsString($hashrateByCoin->getAlgo());
        $this->assertEquals($hashrateByCoinArray['algo'], $hashrateByCoin->getAlgo());
        $this->assertIsFloat($hashrateByCoin->getHashrate());
        $this->assertEquals($hashrateByCoinArray['hashrate'], $hashrateByCoin->getHashrate());
    }
}
