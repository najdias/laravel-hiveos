<?php

/** @noinspection PhpUnused */

namespace Days85\HiveOS\Models;

use Illuminate\Support\Collection;

class Farm extends AbstractModel
{
    /**
     * @var int
     */
    protected int $id;

    /**
     * @var string
     */
    protected string $name;

    /**
     * @var string
     */
    protected string $timezone;

    /**
     * @var int
     */
    protected int $gpuRedTemp;

    /**
     * @var int
     */
    protected int $asicRedTemp;

    /**
     * @var float
     */
    protected float $asicRedBoardTemp;

    /**
     * @var float
     */
    protected float $gpuRedMemTemp;

    /**
     * @var float
     */
    protected float $gpuRedCpuTemp;

    /**
     * @var int
     */
    protected int $gpuRedFan;

    /**
     * @var int
     */
    protected int $asicRedFan;

    /**
     * @var int
     */
    protected int $gpuRedAsr;

    /**
     * @var int
     */
    protected int $asicRedAsr;

    /**
     * @var float
     */
    protected float $gpuRedLa;

    /**
     * @var float
     */
    protected float $asicRedLa;
    /**
     * @var string[]
     */
    protected array $repoUrls;

    /**
     * @var float
     */
    protected float $powerPrice;

    /**
     * @var string
     */
    protected string $powerPriceCurrency;

    /**
     * @var bool
     */
    protected bool $chargeOnPool;

    /**
     * @var string
     */
    protected string $autocreateHash;

    /**
     * @var bool
     */
    protected bool $nonfree;

    /**
     * @var bool
     */
    protected bool $locked;

    /**
     * @var bool
     */
    protected bool $twofaRequired;

    /**
     * @var bool
     */
    protected bool $trusted;

    /**
     * @var UserShortInfo
     */
    protected UserShortInfo $owner;

    /**
     * @var UserShortInfo
     */
    protected UserShortInfo $payer;

    /**
     * @var FarmPersonalSettings
     */
    protected FarmPersonalSettings $personalSettings;

    /**
     * AccessRoleEnum
     *
     * @var string
     */
    protected string $role;

    /**
     * @var int
     */
    protected int $workersCount;

    /**
     * @var int
     */
    protected int $rigsCount;

    /**
     * @var int
     */
    protected int $asicsCount;

    /**
     * @var int
     */
    protected int $disabledRigsCount;

    /**
     * @var int
     */
    protected int $disabledAsicsCount;

    /**
     * @var FarmMoney
     */
    protected FarmMoney $money;

    /**
     * @var FarmStats
     */
    protected FarmStats $stats;

    /**
     * @var Collection<Hashrate>
     */
    protected Collection $hashrates;

    /**
     * @var Collection<HashrateByCoin>
     */
    protected Collection $hashratesByCoin;

    /**
     * @var int[]
     */
    protected array $tagIds;

    /**
     * @var int
     */
    protected int $hardwarePowerDraw;

    /**
     * @var int
     */
    protected int $psuEfficiency;

    /**
     * @var bool
     */
    protected bool $octofanCorrectPower;

    /**
     * @var bool
     */
    protected bool $autoTags;

    /**
     * @var int[]
     */
    protected array $defaultFs;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Farm
     */
    public function setId(int $id): Farm
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Farm
     */
    public function setName(string $name): Farm
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimezone(): string
    {
        return $this->timezone;
    }

    /**
     * @param string $timezone
     * @return Farm
     */
    public function setTimezone(string $timezone): Farm
    {
        $this->timezone = $timezone;
        return $this;
    }

    /**
     * @return int
     */
    public function getGpuRedTemp(): int
    {
        return $this->gpuRedTemp;
    }

    /**
     * @param int $gpuRedTemp
     * @return Farm
     */
    public function setGpuRedTemp(int $gpuRedTemp): Farm
    {
        $this->gpuRedTemp = $gpuRedTemp;
        return $this;
    }

    /**
     * @return int
     */
    public function getAsicRedTemp(): int
    {
        return $this->asicRedTemp;
    }

    /**
     * @param int $asicRedTemp
     * @return Farm
     */
    public function setAsicRedTemp(int $asicRedTemp): Farm
    {
        $this->asicRedTemp = $asicRedTemp;
        return $this;
    }

    /**
     * @return float
     */
    public function getAsicRedBoardTemp(): float
    {
        return $this->asicRedBoardTemp;
    }

    /**
     * @param float $asicRedBoardTemp
     * @return Farm
     */
    public function setAsicRedBoardTemp(float $asicRedBoardTemp): Farm
    {
        $this->asicRedBoardTemp = $asicRedBoardTemp;
        return $this;
    }

    /**
     * @return float
     */
    public function getGpuRedMemTemp(): float
    {
        return $this->gpuRedMemTemp;
    }

    /**
     * @param float $gpuRedMemTemp
     * @return Farm
     */
    public function setGpuRedMemTemp(float $gpuRedMemTemp): Farm
    {
        $this->gpuRedMemTemp = $gpuRedMemTemp;
        return $this;
    }

    /**
     * @return float
     */
    public function getGpuRedCpuTemp(): float
    {
        return $this->gpuRedCpuTemp;
    }

    /**
     * @param float $gpuRedCpuTemp
     * @return Farm
     */
    public function setGpuRedCpuTemp(float $gpuRedCpuTemp): Farm
    {
        $this->gpuRedCpuTemp = $gpuRedCpuTemp;
        return $this;
    }

    /**
     * @return int
     */
    public function getGpuRedFan(): int
    {
        return $this->gpuRedFan;
    }

    /**
     * @param int $gpuRedFan
     * @return Farm
     */
    public function setGpuRedFan(int $gpuRedFan): Farm
    {
        $this->gpuRedFan = $gpuRedFan;
        return $this;
    }

    /**
     * @return int
     */
    public function getAsicRedFan(): int
    {
        return $this->asicRedFan;
    }

    /**
     * @param int $asicRedFan
     * @return Farm
     */
    public function setAsicRedFan(int $asicRedFan): Farm
    {
        $this->asicRedFan = $asicRedFan;
        return $this;
    }

    /**
     * @return int
     */
    public function getGpuRedAsr(): int
    {
        return $this->gpuRedAsr;
    }

    /**
     * @param int $gpuRedAsr
     * @return Farm
     */
    public function setGpuRedAsr(int $gpuRedAsr): Farm
    {
        $this->gpuRedAsr = $gpuRedAsr;
        return $this;
    }

    /**
     * @return int
     */
    public function getAsicRedAsr(): int
    {
        return $this->asicRedAsr;
    }

    /**
     * @param int $asicRedAsr
     * @return Farm
     */
    public function setAsicRedAsr(int $asicRedAsr): Farm
    {
        $this->asicRedAsr = $asicRedAsr;
        return $this;
    }

    /**
     * @return float
     */
    public function getGpuRedLa(): float
    {
        return $this->gpuRedLa;
    }

    /**
     * @param float $gpuRedLa
     * @return Farm
     */
    public function setGpuRedLa(float $gpuRedLa): Farm
    {
        $this->gpuRedLa = $gpuRedLa;
        return $this;
    }

    /**
     * @return float
     */
    public function getAsicRedLa(): float
    {
        return $this->asicRedLa;
    }

    /**
     * @param float $asicRedLa
     * @return Farm
     */
    public function setAsicRedLa(float $asicRedLa): Farm
    {
        $this->asicRedLa = $asicRedLa;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getRepoUrls(): array
    {
        return $this->repoUrls;
    }

    /**
     * @param string[] $repoUrls
     * @return Farm
     */
    public function setRepoUrls(array $repoUrls): Farm
    {
        $this->repoUrls = $repoUrls;
        return $this;
    }

    /**
     * @return float
     */
    public function getPowerPrice(): float
    {
        return $this->powerPrice;
    }

    /**
     * @param float $powerPrice
     * @return Farm
     */
    public function setPowerPrice(float $powerPrice): Farm
    {
        $this->powerPrice = $powerPrice;
        return $this;
    }

    /**
     * @return string
     */
    public function getPowerPriceCurrency(): string
    {
        return $this->powerPriceCurrency;
    }

    /**
     * @param string $powerPriceCurrency
     * @return Farm
     */
    public function setPowerPriceCurrency(string $powerPriceCurrency): Farm
    {
        $this->powerPriceCurrency = $powerPriceCurrency;
        return $this;
    }

    /**
     * @return bool
     */
    public function isChargeOnPool(): bool
    {
        return $this->chargeOnPool;
    }

    /**
     * @param bool $chargeOnPool
     * @return Farm
     */
    public function setChargeOnPool(bool $chargeOnPool): Farm
    {
        $this->chargeOnPool = $chargeOnPool;
        return $this;
    }

    /**
     * @return string
     */
    public function getAutocreateHash(): string
    {
        return $this->autocreateHash;
    }

    /**
     * @param string $autocreateHash
     * @return Farm
     */
    public function setAutocreateHash(string $autocreateHash): Farm
    {
        $this->autocreateHash = $autocreateHash;
        return $this;
    }

    /**
     * @return bool
     */
    public function isNonfree(): bool
    {
        return $this->nonfree;
    }

    /**
     * @param bool $nonfree
     * @return Farm
     */
    public function setNonfree(bool $nonfree): Farm
    {
        $this->nonfree = $nonfree;
        return $this;
    }

    /**
     * @return bool
     */
    public function isLocked(): bool
    {
        return $this->locked;
    }

    /**
     * @param bool $locked
     * @return Farm
     */
    public function setLocked(bool $locked): Farm
    {
        $this->locked = $locked;
        return $this;
    }

    /**
     * @return bool
     */
    public function isTwofaRequired(): bool
    {
        return $this->twofaRequired;
    }

    /**
     * @param bool $twofaRequired
     * @return Farm
     */
    public function setTwofaRequired(bool $twofaRequired): Farm
    {
        $this->twofaRequired = $twofaRequired;
        return $this;
    }

    /**
     * @return bool
     */
    public function isTrusted(): bool
    {
        return $this->trusted;
    }

    /**
     * @param bool $trusted
     * @return Farm
     */
    public function setTrusted(bool $trusted): Farm
    {
        $this->trusted = $trusted;
        return $this;
    }

    /**
     * @return UserShortInfo
     */
    public function getOwner(): UserShortInfo
    {
        return $this->owner;
    }

    /**
     * @param UserShortInfo $owner
     * @return Farm
     */
    public function setOwner(UserShortInfo $owner): Farm
    {
        $this->owner = $owner;
        return $this;
    }

    /**
     * @return UserShortInfo
     */
    public function getPayer(): UserShortInfo
    {
        return $this->payer;
    }

    /**
     * @param UserShortInfo $payer
     * @return Farm
     */
    public function setPayer(UserShortInfo $payer): Farm
    {
        $this->payer = $payer;
        return $this;
    }

    /**
     * @return FarmPersonalSettings
     */
    public function getPersonalSettings(): FarmPersonalSettings
    {
        return $this->personalSettings;
    }

    /**
     * @param FarmPersonalSettings $personalSettings
     * @return Farm
     */
    public function setPersonalSettings(FarmPersonalSettings $personalSettings): Farm
    {
        $this->personalSettings = $personalSettings;
        return $this;
    }

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * @param string $role
     * @return Farm
     */
    public function setRole(string $role): Farm
    {
        $this->role = $role;
        return $this;
    }

    /**
     * @return int
     */
    public function getWorkersCount(): int
    {
        return $this->workersCount;
    }

    /**
     * @param int $workersCount
     * @return Farm
     */
    public function setWorkersCount(int $workersCount): Farm
    {
        $this->workersCount = $workersCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getRigsCount(): int
    {
        return $this->rigsCount;
    }

    /**
     * @param int $rigsCount
     * @return Farm
     */
    public function setRigsCount(int $rigsCount): Farm
    {
        $this->rigsCount = $rigsCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getAsicsCount(): int
    {
        return $this->asicsCount;
    }

    /**
     * @param int $asicsCount
     * @return Farm
     */
    public function setAsicsCount(int $asicsCount): Farm
    {
        $this->asicsCount = $asicsCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getDisabledRigsCount(): int
    {
        return $this->disabledRigsCount;
    }

    /**
     * @param int $disabledRigsCount
     * @return Farm
     */
    public function setDisabledRigsCount(int $disabledRigsCount): Farm
    {
        $this->disabledRigsCount = $disabledRigsCount;
        return $this;
    }

    /**
     * @return int
     */
    public function getDisabledAsicsCount(): int
    {
        return $this->disabledAsicsCount;
    }

    /**
     * @param int $disabledAsicsCount
     * @return Farm
     */
    public function setDisabledAsicsCount(int $disabledAsicsCount): Farm
    {
        $this->disabledAsicsCount = $disabledAsicsCount;
        return $this;
    }

    /**
     * @return FarmMoney
     */
    public function getMoney(): FarmMoney
    {
        return $this->money;
    }

    /**
     * @param FarmMoney $money
     * @return Farm
     */
    public function setMoney(FarmMoney $money): Farm
    {
        $this->money = $money;
        return $this;
    }

    /**
     * @return FarmStats
     */
    public function getStats(): FarmStats
    {
        return $this->stats;
    }

    /**
     * @param FarmStats $stats
     * @return Farm
     */
    public function setStats(FarmStats $stats): Farm
    {
        $this->stats = $stats;
        return $this;
    }

    /**
     * @return Collection<Hashrate>
     */
    public function getHashrates(): Collection
    {
        return $this->hashrates;
    }

    /**
     * @param Collection<Hashrate> $hashrates
     * @return Farm
     */
    public function setHashrates(Collection $hashrates): Farm
    {
        $this->hashrates = $hashrates;
        return $this;
    }

    /**
     * @return Collection<HashrateByCoin>
     */
    public function getHashratesByCoin(): Collection
    {
        return $this->hashratesByCoin;
    }

    /**
     * @param Collection<HashrateByCoin> $hashratesByCoin
     * @return Farm
     */
    public function setHashratesByCoin(Collection $hashratesByCoin): Farm
    {
        $this->hashratesByCoin = $hashratesByCoin;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getTagIds(): array
    {
        return $this->tagIds;
    }

    /**
     * @param int[] $tagIds
     * @return Farm
     */
    public function setTagIds(array $tagIds): Farm
    {
        $this->tagIds = $tagIds;
        return $this;
    }

    /**
     * @return int
     */
    public function getHardwarePowerDraw(): int
    {
        return $this->hardwarePowerDraw;
    }

    /**
     * @param int $hardwarePowerDraw
     * @return Farm
     */
    public function setHardwarePowerDraw(int $hardwarePowerDraw): Farm
    {
        $this->hardwarePowerDraw = $hardwarePowerDraw;
        return $this;
    }

    /**
     * @return int
     */
    public function getPsuEfficiency(): int
    {
        return $this->psuEfficiency;
    }

    /**
     * @param int $psuEfficiency
     * @return Farm
     */
    public function setPsuEfficiency(int $psuEfficiency): Farm
    {
        $this->psuEfficiency = $psuEfficiency;
        return $this;
    }

    /**
     * @return bool
     */
    public function isOctofanCorrectPower(): bool
    {
        return $this->octofanCorrectPower;
    }

    /**
     * @param bool $octofanCorrectPower
     * @return Farm
     */
    public function setOctofanCorrectPower(bool $octofanCorrectPower): Farm
    {
        $this->octofanCorrectPower = $octofanCorrectPower;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAutoTags(): bool
    {
        return $this->autoTags;
    }

    /**
     * @param bool $autoTags
     * @return Farm
     */
    public function setAutoTags(bool $autoTags): Farm
    {
        $this->autoTags = $autoTags;
        return $this;
    }

    /**
     * @return int[]
     */
    public function getDefaultFs(): array
    {
        return $this->defaultFs;
    }

    /**
     * @param int[] $defaultFs
     * @return Farm
     */
    public function setDefaultFs(array $defaultFs): Farm
    {
        $this->defaultFs = $defaultFs;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function fromArray($data): static
    {
        parent::fromArray($data);

        if (!empty($data['repo_urls'])) {
            $this->setRepoUrls($data['repo_urls']);
        }

        if (!empty($data['owner'])) {
            $owner = new UserShortInfo();
            $this->setOwner($owner->fromArray($data['owner']));
        }

        if (!empty($data['payer'])) {
            $payer = new UserShortInfo();
            $this->setPayer($payer->fromArray($data['payer']));
        }

        if (!empty($data['personal_settings'])) {
            $personalSettings = new FarmPersonalSettings();
            $this->setPersonalSettings($personalSettings->fromArray($data['personal_settings']));
        }

        if (!empty($data['money'])) {
            $money = new FarmMoney();
            $this->setMoney($money->fromArray($data['money']));
        }

        if (!empty($data['stats'])) {
            $stats = new FarmStats();
            $this->setStats($stats->fromArray($data['stats']));
        }

        if (!empty($data['hashrates'])) {
            $this->setHashrates($this->collectData(new Hashrate(), $data['hashrates']));
        }

        if (!empty($data['hashrates_by_coin'])) {
            $this->setHashratesByCoin($this->collectData(new HashrateByCoin(), $data['hashrates_by_coin']));
        }

        if (!empty($data['tag_ids'])) {
            $this->setTagIds($data['tag_ids']);
        }

        if (!empty($data['default_fs'])) {
            $this->setDefaultFs($data['default_fs']);
        }

        return $this;
    }
}
