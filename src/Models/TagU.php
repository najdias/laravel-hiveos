<?php

/** @noinspection PhpUnused */

namespace Days85\HiveOS\Models;

class TagU extends Tag
{
    /**
     * Tag type
     *  1 - For workers
     *  2 - For farms
     *
     * @var int
     */
    protected int $typeId;

    /**
     * @var int
     */
    protected int $userId;

    /**
     * @return int
     */
    public function getTypeId(): int
    {
        return $this->typeId;
    }

    /**
     * @param int $typeId
     * @return TagU
     */
    public function setTypeId(int $typeId): TagU
    {
        $this->typeId = $typeId;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     * @return TagU
     */
    public function setUserId(int $userId): TagU
    {
        $this->userId = $userId;
        return $this;
    }
}
