<?php

/** @noinspection PhpUnused */

namespace Days85\HiveOS\Models;

class FarmMoneyCostItem extends AbstractModel
{
    /**
     * Billing type:
     *  11 - Rigs general
     *  12 - Rigs that mine on hiveon pool
     *  13 - Rigs that mine hiveon coins on other pools
     *  21 - ASICs general
     *  22 - ASICs with Hive firmware
     *
     * @var int
     */
    protected int $type;

    /**
     * @var string
     */
    protected string $typeName;

    /**
     * @var float
     */
    protected float $amount;

    /**
     * @var float
     */
    protected float $monthlyPrice;

    /**
     * @var float
     */
    protected float $monthlyCost;

    /**
     * @var float
     */
    protected float $dailyCost;

    /**
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * @param int $type
     * @return FarmMoneyCostItem
     */
    public function setType(int $type): FarmMoneyCostItem
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getTypeName(): string
    {
        return $this->typeName;
    }

    /**
     * @param string $typeName
     * @return FarmMoneyCostItem
     */
    public function setTypeName(string $typeName): FarmMoneyCostItem
    {
        $this->typeName = $typeName;
        return $this;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return FarmMoneyCostItem
     */
    public function setAmount(float $amount): FarmMoneyCostItem
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getMonthlyPrice(): float
    {
        return $this->monthlyPrice;
    }

    /**
     * @param float $monthlyPrice
     * @return FarmMoneyCostItem
     */
    public function setMonthlyPrice(float $monthlyPrice): FarmMoneyCostItem
    {
        $this->monthlyPrice = $monthlyPrice;
        return $this;
    }

    /**
     * @return float
     */
    public function getMonthlyCost(): float
    {
        return $this->monthlyCost;
    }

    /**
     * @param float $monthlyCost
     * @return FarmMoneyCostItem
     */
    public function setMonthlyCost(float $monthlyCost): FarmMoneyCostItem
    {
        $this->monthlyCost = $monthlyCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getDailyCost(): float
    {
        return $this->dailyCost;
    }

    /**
     * @param float $dailyCost
     * @return FarmMoneyCostItem
     */
    public function setDailyCost(float $dailyCost): FarmMoneyCostItem
    {
        $this->dailyCost = $dailyCost;
        return $this;
    }
}
