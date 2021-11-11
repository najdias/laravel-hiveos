<?php

namespace Days85\HiveOS\Tests\Unit\Models;

use Days85\HiveOS\Models\FarmMoney;
use Days85\HiveOS\Models\FarmMoneyCostItem;
use Days85\HiveOS\Tests\TestCase;
use Illuminate\Support\Collection;

class FarmMoneyTest extends TestCase
{
    public function testGetProperties()
    {
        $farmMoneyArray = $this->getFarmsResponse()['data'][0]['money'];
        $farmMoney = new FarmMoney();
        $farmMoney->fromArray($farmMoneyArray);

        $this->assertIsBool($farmMoney->isPaid());
        $this->assertEquals($farmMoneyArray['is_paid'], $farmMoney->isPaid());
        $this->assertIsBool($farmMoney->isFree());
        $this->assertEquals($farmMoneyArray['is_free'], $farmMoney->isFree());
        $this->assertIsFloat($farmMoney->getBalance());
        $this->assertEquals($farmMoneyArray['balance'], $farmMoney->getBalance());
        $this->assertIsFloat($farmMoney->getDiscount());
        $this->assertEquals($farmMoneyArray['discount'], $farmMoney->getDiscount());
        $this->assertIsFloat($farmMoney->getMonthlyCost());
        $this->assertEquals($farmMoneyArray['monthly_cost'], $farmMoney->getMonthlyCost());
        $this->assertIsFloat($farmMoney->getDailyCost());
        $this->assertEquals($farmMoneyArray['daily_cost'], $farmMoney->getDailyCost());
        $this->assertInstanceOf(Collection::class, $farmMoney->getCostDetails());
        $this->assertInstanceOf(FarmMoneyCostItem::class, $farmMoney->getCostDetails()->first());
        $this->assertIsInt($farmMoney->getDaysLeft());
        $this->assertEquals($farmMoneyArray['days_left'], $farmMoney->getDaysLeft());
        $this->assertIsBool($farmMoney->isOverdraft());
        $this->assertEquals($farmMoneyArray['overdraft'], $farmMoney->isOverdraft());
        $this->assertIsInt($farmMoney->getOverdraftDaysLeft());
        $this->assertEquals($farmMoneyArray['overdraft_days_left'], $farmMoney->getOverdraftDaysLeft());
    }
}
