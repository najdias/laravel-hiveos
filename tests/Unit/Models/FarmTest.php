<?php

namespace Days85\HiveOS\Tests\Unit\Models;

use Days85\HiveOS\Models\Farm;
use Days85\HiveOS\Models\FarmMoney;
use Days85\HiveOS\Models\FarmPersonalSettings;
use Days85\HiveOS\Models\FarmStats;
use Days85\HiveOS\Models\Hashrate;
use Days85\HiveOS\Models\HashrateByCoin;
use Days85\HiveOS\Models\UserShortInfo;
use Days85\HiveOS\Tests\TestCase;
use Illuminate\Support\Collection;

class FarmTest extends TestCase
{
    public function testGetProperties()
    {
        $farmArray = $this->getFarmsResponse()['data'][0];
        $farm = new Farm();
        $farm->fromArray($farmArray);

        $this->assertIsInt($farm->getId());
        $this->assertEquals($farmArray['id'], $farm->getId());
        $this->assertIsString($farm->getName());
        $this->assertEquals($farmArray['name'], $farm->getName());
        $this->assertIsString($farm->getTimezone());
        $this->assertEquals($farmArray['timezone'], $farm->getTimezone());
        $this->assertIsInt($farm->getGpuRedTemp());
        $this->assertEquals($farmArray['gpu_red_temp'], $farm->getGpuRedTemp());
        $this->assertIsInt($farm->getAsicRedTemp());
        $this->assertEquals($farmArray['asic_red_temp'], $farm->getAsicRedTemp());
        $this->assertIsFloat($farm->getAsicRedBoardTemp());
        $this->assertEquals($farmArray['asic_red_board_temp'], $farm->getAsicRedBoardTemp());
        $this->assertIsFloat($farm->getGpuRedMemTemp());
        $this->assertEquals($farmArray['gpu_red_mem_temp'], $farm->getGpuRedMemTemp());
        $this->assertIsFloat($farm->getGpuRedCpuTemp());
        $this->assertEquals($farmArray['gpu_red_cpu_temp'], $farm->getGpuRedCpuTemp());
        $this->assertIsInt($farm->getGpuRedFan());
        $this->assertEquals($farmArray['gpu_red_fan'], $farm->getGpuRedFan());
        $this->assertIsInt($farm->getAsicRedFan());
        $this->assertEquals($farmArray['asic_red_fan'], $farm->getAsicRedFan());
        $this->assertIsInt($farm->getGpuRedAsr());
        $this->assertEquals($farmArray['gpu_red_asr'], $farm->getGpuRedAsr());
        $this->assertIsInt($farm->getAsicRedAsr());
        $this->assertEquals($farmArray['asic_red_asr'], $farm->getAsicRedAsr());
        $this->assertIsFloat($farm->getGpuRedLa());
        $this->assertEquals($farmArray['gpu_red_la'], $farm->getGpuRedLa());
        $this->assertIsFloat($farm->getAsicRedLa());
        $this->assertEquals($farmArray['asic_red_la'], $farm->getAsicRedLa());
        $this->assertIsArray($farm->getRepoUrls());
        $this->assertIsString($farm->getRepoUrls()[0]);
        $this->assertEquals($farmArray['repo_urls'], $farm->getRepoUrls());
        $this->assertIsFloat($farm->getPowerPrice());
        $this->assertEquals($farmArray['power_price'], $farm->getPowerPrice());
        $this->assertIsString($farm->getPowerPriceCurrency());
        $this->assertEquals($farmArray['power_price_currency'], $farm->getPowerPriceCurrency());
        $this->assertIsBool($farm->isChargeOnPool());
        $this->assertEquals($farmArray['charge_on_pool'], $farm->isChargeOnPool());
        $this->assertIsString($farm->getAutocreateHash());
        $this->assertEquals($farmArray['autocreate_hash'], $farm->getAutocreateHash());
        $this->assertIsBool($farm->isNonfree());
        $this->assertEquals($farmArray['nonfree'], $farm->isNonfree());
        $this->assertIsBool($farm->isLocked());
        $this->assertEquals($farmArray['locked'], $farm->isLocked());
        $this->assertIsBool($farm->isTwofaRequired());
        $this->assertEquals($farmArray['twofa_required'], $farm->isTwofaRequired());
        $this->assertIsBool($farm->isTrusted());
        $this->assertEquals($farmArray['trusted'], $farm->isTrusted());
        $this->assertInstanceOf(UserShortInfo::class, $farm->getOwner());
        $this->assertInstanceOf(UserShortInfo::class, $farm->getPayer());
        $this->assertInstanceOf(FarmPersonalSettings::class, $farm->getPersonalSettings());
        $this->assertIsString($farm->getRole());
        $this->assertEquals($farmArray['role'], $farm->getRole());
        $this->assertIsInt($farm->getWorkersCount());
        $this->assertEquals($farmArray['workers_count'], $farm->getWorkersCount());
        $this->assertIsInt($farm->getRigsCount());
        $this->assertEquals($farmArray['rigs_count'], $farm->getRigsCount());
        $this->assertIsInt($farm->getAsicsCount());
        $this->assertEquals($farmArray['asics_count'], $farm->getAsicsCount());
        $this->assertIsInt($farm->getDisabledRigsCount());
        $this->assertEquals($farmArray['disabled_rigs_count'], $farm->getDisabledRigsCount());
        $this->assertIsInt($farm->getDisabledAsicsCount());
        $this->assertEquals($farmArray['disabled_asics_count'], $farm->getDisabledAsicsCount());
        $this->assertInstanceOf(FarmMoney::class, $farm->getMoney());
        $this->assertInstanceOf(FarmStats::class, $farm->getStats());
        $this->assertInstanceOf(Collection::class, $farm->getHashrates());
        $this->assertInstanceOf(Hashrate::class, $farm->getHashrates()->first());
        $this->assertInstanceOf(Collection::class, $farm->getHashratesByCoin());
        $this->assertInstanceOf(HashrateByCoin::class, $farm->getHashratesByCoin()->first());
        $this->assertIsArray($farm->getTagIds());
        $this->assertIsInt($farm->getTagIds()[0]);
        $this->assertEquals($farmArray['tag_ids'], $farm->getTagIds());
        $this->assertIsInt($farm->getHardwarePowerDraw());
        $this->assertEquals($farmArray['hardware_power_draw'], $farm->getHardwarePowerDraw());
        $this->assertIsInt($farm->getPsuEfficiency());
        $this->assertEquals($farmArray['psu_efficiency'], $farm->getPsuEfficiency());
        $this->assertIsBool($farm->isOctofanCorrectPower());
        $this->assertEquals($farmArray['octofan_correct_power'], $farm->isOctofanCorrectPower());
        $this->assertIsBool($farm->isAutoTags());
        $this->assertEquals($farmArray['auto_tags'], $farm->isAutoTags());
        $this->assertIsArray($farm->getDefaultFs());
        $this->assertIsInt($farm->getDefaultFs()[1]);
        $this->assertEquals($farmArray['default_fs'], $farm->getDefaultFs());
    }
}
