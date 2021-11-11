<?php

namespace Days85\HiveOS\Models;

class AuthToken extends AbstractModel
{
    /**
     * @var string
     */
    protected string $accessToken;

    /**
     * @var string
     */
    protected string $tokenType;

    /**
     * @var int
     */
    protected int $expiresIn;

    /**
     * @return string
     */
    public function getAccessToken(): string
    {
        return $this->accessToken;
    }

    /**
     * @param string $accessToken
     * @return AuthToken
     */
    public function setAccessToken(string $accessToken): AuthToken
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    /**
     * @return string
     */
    public function getTokenType(): string
    {
        return $this->tokenType;
    }

    /**
     * @param string $tokenType
     * @return AuthToken
     */
    public function setTokenType(string $tokenType): AuthToken
    {
        $this->tokenType = $tokenType;
        return $this;
    }

    /**
     * @return int
     */
    public function getExpiresIn(): int
    {
        return $this->expiresIn;
    }

    /**
     * @param int $expiresIn
     * @return AuthToken
     */
    public function setExpiresIn(int $expiresIn): AuthToken
    {
        $this->expiresIn = $expiresIn;
        return $this;
    }
}
