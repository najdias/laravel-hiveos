<?php

namespace Days85\HiveOS;

/**
 * Class HiveOS
 */
class HiveOS
{
    /**
     * @var string
     */
    protected string $token;

    /**
     * @var ClientInterface
     */
    protected ClientInterface $client;

    /**
     * @param string $token
     */
    public function __construct(string $token)
    {
        $this->setToken($token);

        $this->client = new HiveOSClient($token);
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @param string $token
     */
    public function setToken(string $token): void
    {
        $this->token = $token;
    }
}