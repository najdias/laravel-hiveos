<?php

namespace Days85\HiveOS\Tests\Unit\Models;

use Days85\HiveOS\Models\TagU;
use Days85\HiveOS\Tests\TestCase;

class TagUTest extends TestCase
{
    public function testGetProperties()
    {
        $tagUArray = $this->getFarmsResponse()['tags'][0];
        $tagU = new TagU();
        $tagU->fromArray($tagUArray);

        $this->assertIsInt($tagU->getId());
        $this->assertEquals($tagUArray['id'], $tagU->getId());
        $this->assertIsString($tagU->getName());
        $this->assertEquals($tagUArray['name'], $tagU->getName());
        $this->assertIsInt($tagU->getColor());
        $this->assertEquals($tagUArray['color'], $tagU->getColor());
        $this->assertIsInt($tagU->getFarmsCount());
        $this->assertEquals($tagUArray['farms_count'], $tagU->getFarmsCount());
        $this->assertIsInt($tagU->getWorkersCount());
        $this->assertEquals($tagUArray['workers_count'], $tagU->getWorkersCount());
        $this->assertIsInt($tagU->getTypeId());
        $this->assertEquals($tagUArray['type_id'], $tagU->getTypeId());
        $this->assertIsInt($tagU->getUserId());
        $this->assertEquals($tagUArray['user_id'], $tagU->getUserId());
    }
}
