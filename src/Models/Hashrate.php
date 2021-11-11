<?php

/** @noinspection PhpUnused */

namespace Days85\HiveOS\Models;

class Hashrate extends AbstractModel
{
    /**
     * @var string
     */
    protected string $algo;

    /**
     * @var float
     */
    protected float $hashrate;

    /**
     * @return string
     */
    public function getAlgo(): string
    {
        return $this->algo;
    }

    /**
     * @param string $algo
     * @return Hashrate
     */
    public function setAlgo(string $algo): Hashrate
    {
        $this->algo = $algo;
        return $this;
    }

    /**
     * @return float
     */
    public function getHashrate(): float
    {
        return $this->hashrate;
    }

    /**
     * @param float $hashrate
     * @return Hashrate
     */
    public function setHashrate(float $hashrate): Hashrate
    {
        $this->hashrate = $hashrate;
        return $this;
    }
}
