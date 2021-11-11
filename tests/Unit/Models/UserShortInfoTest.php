<?php

namespace Days85\HiveOS\Tests\Unit\Models;

use Days85\HiveOS\Models\UserShortInfo;
use Days85\HiveOS\Tests\TestCase;

class UserShortInfoTest extends TestCase
{
    public function testGetProperties()
    {
        $userShortInfoArray = $this->getFarmsResponse()['data'][0]['owner'];
        $userShortInfo = new UserShortInfo();
        $userShortInfo->fromArray($userShortInfoArray);

        $this->assertIsInt($userShortInfo->getId());
        $this->assertEquals($userShortInfoArray['id'], $userShortInfo->getId());
        $this->assertIsString($userShortInfo->getLogin());
        $this->assertEquals($userShortInfoArray['login'], $userShortInfo->getLogin());
        $this->assertIsString($userShortInfo->getName());
        $this->assertEquals($userShortInfoArray['name'], $userShortInfo->getName());
        $this->assertIsBool($userShortInfo->isMe());
        $this->assertEquals($userShortInfoArray['me'], $userShortInfo->isMe());
    }
}
