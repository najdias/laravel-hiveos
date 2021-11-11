<?php

namespace Days85\HiveOS\Models;

class FarmPersonalSettings extends AbstractModel
{
    /**
     * @var bool
     */
    protected bool $isFavorite;

    /**
     * @var string
     */
    protected string $note;

    /**
     * @return bool
     */
    public function isFavorite(): bool
    {
        return $this->isFavorite;
    }

    /**
     * @param bool $isFavorite
     * @return FarmPersonalSettings
     */
    public function setIsFavorite(bool $isFavorite): FarmPersonalSettings
    {
        $this->isFavorite = $isFavorite;
        return $this;
    }

    /**
     * @return string
     */
    public function getNote(): string
    {
        return $this->note;
    }

    /**
     * @param string $note
     * @return FarmPersonalSettings
     */
    public function setNote(string $note): FarmPersonalSettings
    {
        $this->note = $note;
        return $this;
    }
}
