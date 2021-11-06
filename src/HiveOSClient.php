<?php

namespace Days85\HiveOS;

use GuzzleHttp\Client;

class HiveOSClient implements ClientInterface
{
    /**
     * @const string HIVE OS API URL.
     */
    const BASE_API_URL = 'https://api2.hiveos.farm/api/v2/';

    /**
     * @var string
     */
    protected string $token;

    /**
     * @var Client
     */
    protected Client $httpClient;

    /**
     * @param string $token
     */
    public function __construct(string $token)
    {
        $this->setToken($token);

        $this->httpClient = new Client([
            'base_uri' => static::BASE_API_URL
        ]);
    }

    /**
     * {@inheritDoc}
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * {@inheritDoc}
     */
    public function setToken(string $token): void
    {
        $this->token = $token;
    }
}