<?php

namespace Days85\HiveOS\Models;

class UserShortInfo extends AbstractModel
{
    /**
     * @var int
     */
    protected int $id;

    /**
     * @var string
     */
    protected string $login;

    /**
     * @var string
     */
    protected string $name;

    /**
     * @var bool
     */
    protected bool $me;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return UserShortInfo
     */
    public function setId(int $id): UserShortInfo
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @param string $login
     * @return UserShortInfo
     */
    public function setLogin(string $login): UserShortInfo
    {
        $this->login = $login;
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
     * @return UserShortInfo
     */
    public function setName(string $name): UserShortInfo
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return bool
     */
    public function isMe(): bool
    {
        return $this->me;
    }

    /**
     * @param bool $me
     * @return UserShortInfo
     */
    public function setMe(bool $me): UserShortInfo
    {
        $this->me = $me;
        return $this;
    }
}
