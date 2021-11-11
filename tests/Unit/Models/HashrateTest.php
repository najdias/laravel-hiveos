<?php

namespace Days85\HiveOS\Tests\Unit\Models;

use Days85\HiveOS\Models\Hashrate;
use Days85\HiveOS\Tests\TestCase;

class HashrateTest extends TestCase
{
    public function testGetProperties()
    {
        $hashrateArray = $this->getFarmsResponse()['data'][0]['hashrates'][0];
        $hashrate = new Hashrate();
        $hashrate->fromArray($hashrateArray);

        $this->assertIsString($hashrate->getAlgo());
        $this->assertEquals($hashrateArray['algo'], $hashrate->getAlgo());
        $this->assertIsFloat($hashrate->getHashrate());
        $this->assertEquals($hashrateArray['hashrate'], $hashrate->getHashrate());
    }
}
