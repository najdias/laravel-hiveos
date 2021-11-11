<?php

namespace Days85\HiveOS\Tests\Unit;

use Days85\HiveOS\ClientInterface;
use Days85\HiveOS\HiveOS;
use Days85\HiveOS\HiveOSClient;
use Days85\HiveOS\HiveOSResponse;
use Days85\HiveOS\Models\Farm;
use Days85\HiveOS\Models\FarmListItem;
use Days85\HiveOS\Models\Tag;
use Days85\HiveOS\Tests\TestCase;
use Illuminate\Support\Collection;
use Mockery;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertObjectEquals;

class HiveOSTest extends TestCase
{
    /**
     * @var HiveOS
     */
    protected HiveOS $hiveOS;

    /**
     * @var FarmListItem
     */
    private FarmListItem $farmsListItem;

    public function setUp(): void
    {
        parent::setUp();
        $this->hiveOS = new HiveOS('some token');

        $item = new FarmListItem();
        $this->farmsListItem = $item->fromArray($this->getFarmsResponse());
    }

    public function testGetToken()
    {
        self::assertEquals('some token', $this->hiveOS->getToken());
    }

    public function testSetToken()
    {
        $this->hiveOS->setToken('other token');
        self::assertEquals('other token', $this->hiveOS->getToken());
    }

    public function testAuthLoginSuccessful()
    {
        $responseMock = Mockery::mock(HiveOSResponse::class);
        $responseMock
            ->shouldReceive('getDecodedBody')
            ->andReturn($this->getAuthLoginResponse());

        $clientMock = Mockery::mock(HiveOSClient::class)->makePartial();
        $clientMock
            ->shouldReceive('request')
            ->andReturn($responseMock);

        /** @var ClientInterface $clientMock */
        $this->hiveOS = new HiveOS('some token', $clientMock);
        $this->assertEquals('some token', $this->hiveOS->getToken());

        $login = $this->hiveOS->authLogin('aaaa', 'aaa');

        $this->assertTrue($login);
        $this->assertEquals('string', $this->hiveOS->getToken());
    }

    public function testAuthLoginFailed()
    {
        $responseMock = Mockery::mock(HiveOSResponse::class);
        $responseMock
            ->shouldReceive('getDecodedBody')
            ->andReturn(null);

        $clientMock = Mockery::mock(HiveOSClient::class)->makePartial();
        $clientMock
            ->shouldReceive('request')
            ->andReturn($responseMock);

        /** @var ClientInterface $clientMock */
        $this->hiveOS = new HiveOS('some token', $clientMock);
        $this->assertEquals('some token', $this->hiveOS->getToken());

        $login = $this->hiveOS->authLogin('aaaa', 'aaa');

        $this->assertFalse($login);
    }

    public function testFarms()
    {
        $responseMock = Mockery::mock(HiveOSResponse::class);
        $responseMock
            ->shouldReceive('getDecodedBody')
            ->andReturn($this->getFarmsResponse());

        $clientMock = Mockery::mock(HiveOSClient::class)->makePartial();
        $clientMock
            ->shouldReceive('request')
            ->andReturn($responseMock);

        /** @var ClientInterface $clientMock */
        $this->hiveOS = new HiveOS('some token', $clientMock);
        $this->assertEquals('some token', $this->hiveOS->getToken());

        $farms = $this->hiveOS->farms();

        $this->assertEquals($this->farmsListItem->getData(), $farms->getData());
        $this->assertEquals($this->farmsListItem->getTags(), $farms->getTags());
        $this->assertInstanceOf(Collection::class, $farms->getData());
        $this->assertInstanceOf(Collection::class, $farms->getTags());
        $this->assertInstanceOf(Farm::class, $farms->getData()->first());
        $this->assertInstanceOf(Tag::class, $farms->getTags()->first());
        $this->assertCount(1, $farms->getData());
        $this->assertCount(1, $farms->getTags());
    }
}