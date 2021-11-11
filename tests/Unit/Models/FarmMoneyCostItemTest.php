<?php

namespace Days85\HiveOS\Tests\Unit\Models;

use Days85\HiveOS\Models\FarmMoneyCostItem;
use Days85\HiveOS\Tests\TestCase;

class FarmMoneyCostItemTest extends TestCase
{
    public function testGetProperties()
    {
        $farmMoneyCostItemArray = $this->getFarmsResponse()['data'][0]['money']['cost_details'][0];
        $farmMoneyCostItem = new FarmMoneyCostItem();
        $farmMoneyCostItem->fromArray($farmMoneyCostItemArray);

        $this->assertIsInt($farmMoneyCostItem->getType());
        $this->assertEquals($farmMoneyCostItemArray['type'], $farmMoneyCostItem->getType());
        $this->assertIsString($farmMoneyCostItem->getTypeName());
        $this->assertEquals($farmMoneyCostItemArray['type_name'], $farmMoneyCostItem->getTypeName());
        $this->assertIsFloat($farmMoneyCostItem->getAmount());
        $this->assertEquals($farmMoneyCostItemArray['amount'], $farmMoneyCostItem->getAmount());
        $this->assertIsFloat($farmMoneyCostItem->getMonthlyPrice());
        $this->assertEquals($farmMoneyCostItemArray['monthly_price'], $farmMoneyCostItem->getMonthlyPrice());
        $this->assertIsFloat($farmMoneyCostItem->getMonthlyCost());
        $this->assertEquals($farmMoneyCostItemArray['monthly_cost'], $farmMoneyCostItem->getMonthlyCost());
        $this->assertIsFloat($farmMoneyCostItem->getDailyCost());
        $this->assertEquals($farmMoneyCostItemArray['daily_cost'], $farmMoneyCostItem->getDailyCost());
    }
}
