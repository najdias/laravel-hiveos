<?php

namespace Days85\HiveOS;

use Psr\Http\Message\StreamInterface;

interface ResponseInterface
{
    /**
     * @param int $httpStatusCode
     */
    public function setHttpStatusCode(int $httpStatusCode): void;

    /**
     * @return integer
     */
    public function getHttpStatusCode(): int;

    /**
     * @param StreamInterface $body
     */
    public function setBody(StreamInterface $body): void;

    /**
     * @return StreamInterface
     */
    public function getBody(): StreamInterface;

    /**
     * @param string[][] $headers
     */
    public function setHeaders(array $headers): void;

    /**
     * @return string[][]
     */
    public function getHeaders(): array;

    /**
     * @return mixed
     */
    public function decodeBody(): void;

    /**
     * @return mixed
     */
    public function getDecodedBody(): mixed;

    /**
     * @return bool
     */
    public function isOk(): bool;
}
