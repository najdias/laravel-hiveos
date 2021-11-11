<?php

namespace Days85\HiveOS\Tests\Unit\Models;

use Days85\HiveOS\Models\AuthToken;
use Days85\HiveOS\Tests\TestCase;

class AuthTokenTest extends TestCase
{
    public function testFromArray()
    {
        $response = $this->getAuthLoginResponse();
        $obj = new AuthToken();
        $obj->fromArray($response);

        self::assertEquals($response['access_token'], $obj->getAccessToken());
        self::assertEquals($response['token_type'], $obj->getTokenType());
        self::assertEquals($response['expires_in'], $obj->getExpiresIn());
    }
}
