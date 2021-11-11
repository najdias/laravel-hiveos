<?php

/** @noinspection PhpUnused */

namespace Days85\HiveOS;

use Psr\Http\Message\ResponseInterface as HttpResponseInterface;
use Psr\Http\Message\StreamInterface;

class HiveOSResponse implements ResponseInterface
{

    /**
     * @var int
     */
    protected int $httpStatusCode;

    /**
     * @var StreamInterface
     */
    protected StreamInterface $body;

    /**
     * @var string[][]
     */
    protected array $headers;

    /**
     * @var mixed
     */
    protected mixed $decodedBody;

    public const RESPONSE_OK_CODE              = 200;
    public const RESPONSE_CREATE_OK            = 201;
    public const RESPONSE_TRANSFER_OK_CODE     = 204;
    public const RESPONSE_FARM_UPDATED_OK_CODE = 204;
    public const RESPONSE_ACTION_OK            = 204;
    public const RESPONSE_DELETE_OK            = 204;
    public const FLIGHT_SHEET_USED_BY_WORKERS  = 409;

    /**
     * @param HttpResponseInterface $response
     */
    public function __construct(HttpResponseInterface $response)
    {
        $this->setHttpStatusCode($response->getStatusCode());
        $this->setBody($response->getBody());
        $this->setHeaders($response->getHeaders());
        $this->decodeBody();
    }

    /**
     * {@inheritDoc}
     */
    public function setHttpStatusCode(int $httpStatusCode): void
    {
        $this->httpStatusCode = $httpStatusCode;
    }

    /**
     * {@inheritDoc}
     */
    public function getHttpStatusCode(): int
    {
        return $this->httpStatusCode;
    }

    /**
     * {@inheritDoc}
     */
    public function setBody(StreamInterface $body): void
    {
        $this->body = $body;
    }

    /**
     * {@inheritDoc}
     */
    public function getBody(): StreamInterface
    {
        return $this->body;
    }

    /**
     * {@inheritDoc}
     */
    public function setHeaders(array $headers): void
    {
        $this->headers = $headers;
    }

    /**
     * {@inheritDoc}
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * {@inheritDoc}
     */
    public function decodeBody(): void
    {
        $this->decodedBody = json_decode($this->getBody(), true);
    }

    /**
     * {@inheritDoc}
     */
    public function getDecodedBody(): mixed
    {
        return $this->decodedBody;
    }

    /**
     * {@inheritDoc}
     */
    public function isOk(): bool
    {
        if ($this->getHttpStatusCode() >= static::RESPONSE_OK_CODE && $this->getHttpStatusCode() < 300) {
            return true;
        }
        return false;
    }
}
