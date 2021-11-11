<?php

/** @noinspection PhpUnused */

namespace Days85\HiveOS\Models;

class Tag extends AbstractModel
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
     * @var int
     */
    protected int $color;

    /**
     * @var int
     */
    protected int $farmsCount;

    /**
     * @var int
     */
    protected int $workersCount;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Tag
     */
    public function setId(int $id): Tag
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
     * @return Tag
     */
    public function setName(string $name): Tag
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getColor(): int
    {
        return $this->color;
    }

    /**
     * @param int $color
     * @return Tag
     */
    public function setColor(int $color): Tag
    {
        $this->color = $color;
        return $this;
    }

    /**
     * @return int
     */
    public function getFarmsCount(): int
    {
        return $this->farmsCount;
    }

    /**
     * @param int $farmsCount
     * @return Tag
     */
    public function setFarmsCount(int $farmsCount): Tag
    {
        $this->farmsCount = $farmsCount;
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
     * @return Tag
     */
    public function setWorkersCount(int $workersCount): Tag
    {
        $this->workersCount = $workersCount;
        return $this;
    }
}
