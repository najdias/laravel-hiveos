<?php

namespace Days85\HiveOS;

use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

class HiveOSClient extends AbstractClient
{
    /**
     * @const string HIVE OS API URL.
     */
    protected const BASE_API_URL = 'https://api2.hiveos.farm/api/v2/';

    /**
     * @var string
     */
    protected string $userAgent = 'HiveClient 1.0';

    /**
     * {@inheritDoc}
     */
    protected function getResponse(HttpResponseInterface $response): ResponseInterface
    {
        return new HiveOSResponse($response);
    }
}
