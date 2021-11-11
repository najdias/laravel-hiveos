<?php

namespace Days85\HiveOS\Tests\Unit\Models;

use Days85\HiveOS\Models\FarmPersonalSettings;
use Days85\HiveOS\Tests\TestCase;

class FarmPersonalSettingsTest extends TestCase
{
    public function testGetProperties()
    {
        $farmPersonalSettingsArray = $this->getFarmsResponse()['data'][0]['personal_settings'];
        $farmPersonalSettings = new FarmPersonalSettings();
        $farmPersonalSettings->fromArray($farmPersonalSettingsArray);

        $this->assertIsBool($farmPersonalSettings->isFavorite());
        $this->assertEquals($farmPersonalSettingsArray['is_favorite'], $farmPersonalSettings->isFavorite());
        $this->assertIsString($farmPersonalSettings->getNote());
        $this->assertEquals($farmPersonalSettingsArray['note'], $farmPersonalSettings->getNote());
    }
}
