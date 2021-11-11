<?php

/** @noinspection PhpUnused */

namespace Days85\HiveOS\Models;

use Illuminate\Support\Collection;

class FarmMoney extends AbstractModel
{
    /**
     * @var bool
     */
    protected bool $isPaid;

    /**
     * @var bool
     */
    protected bool $isFree;

    /**
     * @var float
     */
    protected float $balance;

    /**
     * @var float
     */
    protected float $discount;

    /**
     * @var float
     */
    protected float $monthlyCost;

    /**
     * @var float
     */
    protected float $dailyCost;

    /**
     * @var Collection<FarmMoneyCostItem>
     */
    protected Collection $costDetails;

    /**
     * @var int
     */
    protected int $daysLeft;

    /**
     * @var bool
     */
    protected bool $overdraft;

    /**
     * @var int
     */
    protected int $overdraftDaysLeft;

    /**
     * @return bool
     */
    public function isPaid(): bool
    {
        return $this->isPaid;
    }

    /**
     * @param bool $isPaid
     * @return FarmMoney
     */
    public function setIsPaid(bool $isPaid): FarmMoney
    {
        $this->isPaid = $isPaid;
        return $this;
    }

    /**
     * @return bool
     */
    public function isFree(): bool
    {
        return $this->isFree;
    }

    /**
     * @param bool $isFree
     * @return FarmMoney
     */
    public function setIsFree(bool $isFree): FarmMoney
    {
        $this->isFree = $isFree;
        return $this;
    }

    /**
     * @return float
     */
    public function getBalance(): float
    {
        return $this->balance;
    }

    /**
     * @param float $balance
     * @return FarmMoney
     */
    public function setBalance(float $balance): FarmMoney
    {
        $this->balance = $balance;
        return $this;
    }

    /**
     * @return float
     */
    public function getDiscount(): float
    {
        return $this->discount;
    }

    /**
     * @param float $discount
     * @return FarmMoney
     */
    public function setDiscount(float $discount): FarmMoney
    {
        $this->discount = $discount;
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
     * @return FarmMoney
     */
    public function setMonthlyCost(float $monthlyCost): FarmMoney
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
     * @return FarmMoney
     */
    public function setDailyCost(float $dailyCost): FarmMoney
    {
        $this->dailyCost = $dailyCost;
        return $this;
    }

    /**
     * @return Collection<FarmMoneyCostItem>
     */
    public function getCostDetails(): Collection
    {
        return $this->costDetails;
    }

    /**
     * @param Collection<FarmMoneyCostItem> $costDetails
     * @return FarmMoney
     */
    public function setCostDetails(Collection $costDetails): FarmMoney
    {
        $this->costDetails = $costDetails;
        return $this;
    }

    /**
     * @return int
     */
    public function getDaysLeft(): int
    {
        return $this->daysLeft;
    }

    /**
     * @param int $daysLeft
     * @return FarmMoney
     */
    public function setDaysLeft(int $daysLeft): FarmMoney
    {
        $this->daysLeft = $daysLeft;
        return $this;
    }

    /**
     * @return bool
     */
    public function isOverdraft(): bool
    {
        return $this->overdraft;
    }

    /**
     * @param bool $overdraft
     * @return FarmMoney
     */
    public function setOverdraft(bool $overdraft): FarmMoney
    {
        $this->overdraft = $overdraft;
        return $this;
    }

    /**
     * @return int
     */
    public function getOverdraftDaysLeft(): int
    {
        return $this->overdraftDaysLeft;
    }

    /**
     * @param int $overdraftDaysLeft
     * @return FarmMoney
     */
    public function setOverdraftDaysLeft(int $overdraftDaysLeft): FarmMoney
    {
        $this->overdraftDaysLeft = $overdraftDaysLeft;
        return $this;
    }

    public function fromArray($data): static
    {
        parent::fromArray($data);

        if (!empty($data['cost_details'])) {
            $this->setCostDetails($this->collectData(new FarmMoneyCostItem(), $data['cost_details']));
        }

        return $this;
    }
}
