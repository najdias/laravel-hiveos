<?php

namespace Days85\HiveOS\Tests\Unit\Models;

use Days85\HiveOS\Models\FarmStats;
use Days85\HiveOS\Tests\TestCase;

class FarmStatsTest extends TestCase
{
    public function testGetProperties()
    {
        $farmStatsArray = $this->getFarmsResponse()['data'][0]['stats'];
        $farmStats = new FarmStats();
        $farmStats->fromArray($farmStatsArray);

        $this->assertIsInt($farmStats->getWorkersTotal());
        $this->assertEquals($farmStatsArray['workers_total'], $farmStats->getWorkersTotal());
        $this->assertIsInt($farmStats->getWorkersOnline());
        $this->assertEquals($farmStatsArray['workers_online'], $farmStats->getWorkersOnline());
        $this->assertIsInt($farmStats->getWorkersOffline());
        $this->assertEquals($farmStatsArray['workers_offline'], $farmStats->getWorkersOffline());
        $this->assertIsInt($farmStats->getWorkersOverheated());
        $this->assertEquals($farmStatsArray['workers_overheated'], $farmStats->getWorkersOverheated());
        $this->assertIsInt($farmStats->getWorkersOverloaded());
        $this->assertEquals($farmStatsArray['workers_overloaded'], $farmStats->getWorkersOverloaded());
        $this->assertIsInt($farmStats->getWorkersInvalid());
        $this->assertEquals($farmStatsArray['workers_invalid'], $farmStats->getWorkersInvalid());
        $this->assertIsInt($farmStats->getWorkersLowAsr());
        $this->assertEquals($farmStatsArray['workers_low_asr'], $farmStats->getWorkersLowAsr());
        $this->assertIsInt($farmStats->getRigsTotal());
        $this->assertEquals($farmStatsArray['rigs_total'], $farmStats->getRigsTotal());
        $this->assertIsInt($farmStats->getRigsOnline());
        $this->assertEquals($farmStatsArray['rigs_online'], $farmStats->getRigsOnline());
        $this->assertIsInt($farmStats->getRigsOffline());
        $this->assertEquals($farmStatsArray['rigs_offline'], $farmStats->getRigsOffline());
        $this->assertIsInt($farmStats->getGpusTotal());
        $this->assertEquals($farmStatsArray['gpus_total'], $farmStats->getGpusTotal());
        $this->assertIsInt($farmStats->getGpusOnline());
        $this->assertEquals($farmStatsArray['gpus_online'], $farmStats->getGpusOnline());
        $this->assertIsInt($farmStats->getGpusOffline());
        $this->assertEquals($farmStatsArray['gpus_offline'], $farmStats->getGpusOffline());
        $this->assertIsInt($farmStats->getGpusOverheated());
        $this->assertEquals($farmStatsArray['gpus_overheated'], $farmStats->getGpusOverheated());
        $this->assertIsInt($farmStats->getAsicsTotal());
        $this->assertEquals($farmStatsArray['asics_total'], $farmStats->getAsicsTotal());
        $this->assertIsInt($farmStats->getAsicsOnline());
        $this->assertEquals($farmStatsArray['asics_online'], $farmStats->getAsicsOnline());
        $this->assertIsInt($farmStats->getAsicsOffline());
        $this->assertEquals($farmStatsArray['asics_offline'], $farmStats->getAsicsOffline());
        $this->assertIsInt($farmStats->getBoardsTotal());
        $this->assertEquals($farmStatsArray['boards_total'], $farmStats->getBoardsTotal());
        $this->assertIsInt($farmStats->getBoardsOnline());
        $this->assertEquals($farmStatsArray['boards_online'], $farmStats->getBoardsOnline());
        $this->assertIsInt($farmStats->getBoardsOffline());
        $this->assertEquals($farmStatsArray['boards_offline'], $farmStats->getBoardsOffline());
        $this->assertIsInt($farmStats->getBoardsOverheated());
        $this->assertEquals($farmStatsArray['boards_overheated'], $farmStats->getBoardsOverheated());
        $this->assertIsInt($farmStats->getCpusOnline());
        $this->assertEquals($farmStatsArray['cpus_online'], $farmStats->getCpusOnline());
        $this->assertIsInt($farmStats->getDevicesTotal());
        $this->assertEquals($farmStatsArray['devices_total'], $farmStats->getDevicesTotal());
        $this->assertIsInt($farmStats->getDevicesOnline());
        $this->assertEquals($farmStatsArray['devices_online'], $farmStats->getDevicesOnline());
        $this->assertIsInt($farmStats->getDevicesOffline());
        $this->assertEquals($farmStatsArray['devices_offline'], $farmStats->getDevicesOffline());
        $this->assertIsFloat($farmStats->getPowerDraw());
        $this->assertEquals($farmStatsArray['power_draw'], $farmStats->getPowerDraw());
        $this->assertIsFloat($farmStats->getPowerCost());
        $this->assertEquals($farmStatsArray['power_cost'], $farmStats->getPowerCost());
        $this->assertIsFloat($farmStats->getAsr());
        $this->assertEquals($farmStatsArray['asr'], $farmStats->getAsr());
    }
}
