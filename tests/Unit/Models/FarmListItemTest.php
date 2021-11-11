<?php

namespace Days85\HiveOS\Tests\Unit\Models;

use Days85\HiveOS\Models\Farm;
use Days85\HiveOS\Models\FarmListItem;
use Days85\HiveOS\Models\TagU;
use Days85\HiveOS\Tests\TestCase;
use Illuminate\Support\Collection;

class FarmListItemTest extends TestCase
{
    public function testGetProperties()
    {
        $farmListItemArray = $this->getFarmsResponse();
        $farmListItem = new FarmListItem();
        $farmListItem->fromArray($farmListItemArray);

        $this->assertInstanceOf(Collection::class, $farmListItem->getData());
        $this->assertInstanceOf(Farm::class, $farmListItem->getData()->first());
        $this->assertInstanceOf(Collection::class, $farmListItem->getTags());
        $this->assertInstanceOf(TagU::class, $farmListItem->getTags()->first());
    }
}
