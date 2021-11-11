<?php

/** @noinspection PhpUnused */

namespace Days85\HiveOS\Models;

class HashrateByCoin extends Hashrate
{
    /**
     * @var string
     */
    protected string $coin;

    /**
     * @return string
     */
    public function getCoin(): string
    {
        return $this->coin;
    }

    /**
     * @param string $coin
     * @return HashrateByCoin
     */
    public function setCoin(string $coin): HashrateByCoin
    {
        $this->coin = $coin;
        return $this;
    }
}
