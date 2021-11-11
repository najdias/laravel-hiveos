<?php

namespace Days85\HiveOS\Tests\Unit\Models;

use Days85\HiveOS\Models\Tag;
use Days85\HiveOS\Tests\TestCase;

class TagTest extends TestCase
{
    public function testGetProperties()
    {
        $tagArray = $this->getFarmsResponse()['tags'][0];
        $tag = new Tag();
        $tag->fromArray($tagArray);

        $this->assertIsInt($tag->getId());
        $this->assertEquals($tagArray['id'], $tag->getId());
        $this->assertIsString($tag->getName());
        $this->assertEquals($tagArray['name'], $tag->getName());
        $this->assertIsInt($tag->getColor());
        $this->assertEquals($tagArray['color'], $tag->getColor());
        $this->assertIsInt($tag->getFarmsCount());
        $this->assertEquals($tagArray['farms_count'], $tag->getFarmsCount());
        $this->assertIsInt($tag->getWorkersCount());
        $this->assertEquals($tagArray['workers_count'], $tag->getWorkersCount());
    }
}
