<?php

/** @noinspection PhpUnused */

namespace Days85\HiveOS\Models;

class FarmStats extends AbstractModel
{
    /**
     * @var int
     */
    protected int $workersTotal;

    /**
     * @var int
     */
    protected int $workersOnline;

    /**
     * @var int
     */
    protected int $workersOffline;

    /**
     * @var int
     */
    protected int $workersOverheated;

    /**
     * @var int
     */
    protected int $workersOverloaded;

    /**
     * @var int
     */
    protected int $workersInvalid;

    /**
     * @var int
     */
    protected int $workersLowAsr;

    /**
     * @var int
     */
    protected int $rigsTotal;

    /**
     * @var int
     */
    protected int $rigsOnline;

    /**
     * @var int
     */
    protected int $rigsOffline;

    /**
     * @var int
     */
    protected int $gpusTotal;

    /**
     * @var int
     */
    protected int $gpusOnline;

    /**
     * @var int
     */
    protected int $gpusOffline;

    /**
     * @var int
     */
    protected int $gpusOverheated;

    /**
     * @var int
     */
    protected int $asicsTotal;

    /**
     * @var int
     */
    protected int $asicsOnline;

    /**
     * @var int
     */
    protected int $asicsOffline;

    /**
     * @var int
     */
    protected int $boardsTotal;

    /**
     * @var int
     */
    protected int $boardsOnline;

    /**
     * @var int
     */
    protected int $boardsOffline;

    /**
     * @var int
     */
    protected int $boardsOverheated;

    /**
     * @var int
     */
    protected int $cpusOnline;

    /**
     * @var int
     */
    protected int $devicesTotal;

    /**
     * @var int
     */
    protected int $devicesOnline;

    /**
     * @var int
     */
    protected int $devicesOffline;

    /**
     * @var float
     */
    protected float $powerDraw;

    /**
     * @var float
     */
    protected float $powerCost;

    /**
     * @var float
     */
    protected float $asr;

    /**
     * @return int
     */
    public function getWorkersTotal(): int
    {
        return $this->workersTotal;
    }

    /**
     * @param int $workersTotal
     * @return FarmStats
     */
    public function setWorkersTotal(int $workersTotal): FarmStats
    {
        $this->workersTotal = $workersTotal;
        return $this;
    }

    /**
     * @return int
     */
    public function getWorkersOnline(): int
    {
        return $this->workersOnline;
    }

    /**
     * @param int $workersOnline
     * @return FarmStats
     */
    public function setWorkersOnline(int $workersOnline): FarmStats
    {
        $this->workersOnline = $workersOnline;
        return $this;
    }

    /**
     * @return int
     */
    public function getWorkersOffline(): int
    {
        return $this->workersOffline;
    }

    /**
     * @param int $workersOffline
     * @return FarmStats
     */
    public function setWorkersOffline(int $workersOffline): FarmStats
    {
        $this->workersOffline = $workersOffline;
        return $this;
    }

    /**
     * @return int
     */
    public function getWorkersOverheated(): int
    {
        return $this->workersOverheated;
    }

    /**
     * @param int $workersOverheated
     * @return FarmStats
     */
    public function setWorkersOverheated(int $workersOverheated): FarmStats
    {
        $this->workersOverheated = $workersOverheated;
        return $this;
    }

    /**
     * @return int
     */
    public function getWorkersOverloaded(): int
    {
        return $this->workersOverloaded;
    }

    /**
     * @param int $workersOverloaded
     * @return FarmStats
     */
    public function setWorkersOverloaded(int $workersOverloaded): FarmStats
    {
        $this->workersOverloaded = $workersOverloaded;
        return $this;
    }

    /**
     * @return int
     */
    public function getWorkersInvalid(): int
    {
        return $this->workersInvalid;
    }

    /**
     * @param int $workersInvalid
     * @return FarmStats
     */
    public function setWorkersInvalid(int $workersInvalid): FarmStats
    {
        $this->workersInvalid = $workersInvalid;
        return $this;
    }

    /**
     * @return int
     */
    public function getWorkersLowAsr(): int
    {
        return $this->workersLowAsr;
    }

    /**
     * @param int $workersLowAsr
     * @return FarmStats
     */
    public function setWorkersLowAsr(int $workersLowAsr): FarmStats
    {
        $this->workersLowAsr = $workersLowAsr;
        return $this;
    }

    /**
     * @return int
     */
    public function getRigsTotal(): int
    {
        return $this->rigsTotal;
    }

    /**
     * @param int $rigsTotal
     * @return FarmStats
     */
    public function setRigsTotal(int $rigsTotal): FarmStats
    {
        $this->rigsTotal = $rigsTotal;
        return $this;
    }

    /**
     * @return int
     */
    public function getRigsOnline(): int
    {
        return $this->rigsOnline;
    }

    /**
     * @param int $rigsOnline
     * @return FarmStats
     */
    public function setRigsOnline(int $rigsOnline): FarmStats
    {
        $this->rigsOnline = $rigsOnline;
        return $this;
    }

    /**
     * @return int
     */
    public function getRigsOffline(): int
    {
        return $this->rigsOffline;
    }

    /**
     * @param int $rigsOffline
     * @return FarmStats
     */
    public function setRigsOffline(int $rigsOffline): FarmStats
    {
        $this->rigsOffline = $rigsOffline;
        return $this;
    }

    /**
     * @return int
     */
    public function getGpusTotal(): int
    {
        return $this->gpusTotal;
    }

    /**
     * @param int $gpusTotal
     * @return FarmStats
     */
    public function setGpusTotal(int $gpusTotal): FarmStats
    {
        $this->gpusTotal = $gpusTotal;
        return $this;
    }

    /**
     * @return int
     */
    public function getGpusOnline(): int
    {
        return $this->gpusOnline;
    }

    /**
     * @param int $gpusOnline
     * @return FarmStats
     */
    public function setGpusOnline(int $gpusOnline): FarmStats
    {
        $this->gpusOnline = $gpusOnline;
        return $this;
    }

    /**
     * @return int
     */
    public function getGpusOffline(): int
    {
        return $this->gpusOffline;
    }

    /**
     * @param int $gpusOffline
     * @return FarmStats
     */
    public function setGpusOffline(int $gpusOffline): FarmStats
    {
        $this->gpusOffline = $gpusOffline;
        return $this;
    }

    /**
     * @return int
     */
    public function getGpusOverheated(): int
    {
        return $this->gpusOverheated;
    }

    /**
     * @param int $gpusOverheated
     * @return FarmStats
     */
    public function setGpusOverheated(int $gpusOverheated): FarmStats
    {
        $this->gpusOverheated = $gpusOverheated;
        return $this;
    }

    /**
     * @return int
     */
    public function getAsicsTotal(): int
    {
        return $this->asicsTotal;
    }

    /**
     * @param int $asicsTotal
     * @return FarmStats
     */
    public function setAsicsTotal(int $asicsTotal): FarmStats
    {
        $this->asicsTotal = $asicsTotal;
        return $this;
    }

    /**
     * @return int
     */
    public function getAsicsOnline(): int
    {
        return $this->asicsOnline;
    }

    /**
     * @param int $asicsOnline
     * @return FarmStats
     */
    public function setAsicsOnline(int $asicsOnline): FarmStats
    {
        $this->asicsOnline = $asicsOnline;
        return $this;
    }

    /**
     * @return int
     */
    public function getAsicsOffline(): int
    {
        return $this->asicsOffline;
    }

    /**
     * @param int $asicsOffline
     * @return FarmStats
     */
    public function setAsicsOffline(int $asicsOffline): FarmStats
    {
        $this->asicsOffline = $asicsOffline;
        return $this;
    }

    /**
     * @return int
     */
    public function getBoardsTotal(): int
    {
        return $this->boardsTotal;
    }

    /**
     * @param int $boardsTotal
     * @return FarmStats
     */
    public function setBoardsTotal(int $boardsTotal): FarmStats
    {
        $this->boardsTotal = $boardsTotal;
        return $this;
    }

    /**
     * @return int
     */
    public function getBoardsOnline(): int
    {
        return $this->boardsOnline;
    }

    /**
     * @param int $boardsOnline
     * @return FarmStats
     */
    public function setBoardsOnline(int $boardsOnline): FarmStats
    {
        $this->boardsOnline = $boardsOnline;
        return $this;
    }

    /**
     * @return int
     */
    public function getBoardsOffline(): int
    {
        return $this->boardsOffline;
    }

    /**
     * @param int $boardsOffline
     * @return FarmStats
     */
    public function setBoardsOffline(int $boardsOffline): FarmStats
    {
        $this->boardsOffline = $boardsOffline;
        return $this;
    }

    /**
     * @return int
     */
    public function getBoardsOverheated(): int
    {
        return $this->boardsOverheated;
    }

    /**
     * @param int $boardsOverheated
     * @return FarmStats
     */
    public function setBoardsOverheated(int $boardsOverheated): FarmStats
    {
        $this->boardsOverheated = $boardsOverheated;
        return $this;
    }

    /**
     * @return int
     */
    public function getCpusOnline(): int
    {
        return $this->cpusOnline;
    }

    /**
     * @param int $cpusOnline
     * @return FarmStats
     */
    public function setCpusOnline(int $cpusOnline): FarmStats
    {
        $this->cpusOnline = $cpusOnline;
        return $this;
    }

    /**
     * @return int
     */
    public function getDevicesTotal(): int
    {
        return $this->devicesTotal;
    }

    /**
     * @param int $devicesTotal
     * @return FarmStats
     */
    public function setDevicesTotal(int $devicesTotal): FarmStats
    {
        $this->devicesTotal = $devicesTotal;
        return $this;
    }

    /**
     * @return int
     */
    public function getDevicesOnline(): int
    {
        return $this->devicesOnline;
    }

    /**
     * @param int $devicesOnline
     * @return FarmStats
     */
    public function setDevicesOnline(int $devicesOnline): FarmStats
    {
        $this->devicesOnline = $devicesOnline;
        return $this;
    }

    /**
     * @return int
     */
    public function getDevicesOffline(): int
    {
        return $this->devicesOffline;
    }

    /**
     * @param int $devicesOffline
     * @return FarmStats
     */
    public function setDevicesOffline(int $devicesOffline): FarmStats
    {
        $this->devicesOffline = $devicesOffline;
        return $this;
    }

    /**
     * @return float
     */
    public function getPowerDraw(): float
    {
        return $this->powerDraw;
    }

    /**
     * @param float $powerDraw
     * @return FarmStats
     */
    public function setPowerDraw(float $powerDraw): FarmStats
    {
        $this->powerDraw = $powerDraw;
        return $this;
    }

    /**
     * @return float
     */
    public function getPowerCost(): float
    {
        return $this->powerCost;
    }

    /**
     * @param float $powerCost
     * @return FarmStats
     */
    public function setPowerCost(float $powerCost): FarmStats
    {
        $this->powerCost = $powerCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getAsr(): float
    {
        return $this->asr;
    }

    /**
     * @param float $asr
     * @return FarmStats
     */
    public function setAsr(float $asr): FarmStats
    {
        $this->asr = $asr;
        return $this;
    }
}
