<?php

namespace Days85\HiveOS;

interface ClientInterface
{
    /**
     * @return string
     */
    public function getToken(): string;

    /**
     * @param string $token
     */
    public function setToken(string $token): void;

    /**
     * @param string $name header name
     * @param string $value header value
     */
    public function setHeader(string $name, string $value): void;

    /**
     * @return array
     */
    public function getHeaders(): array;

    /**
     * @param string $key
     */
    public function removeHeader(string $key): void;

    /**
     * @param string $userAgent
     */
    public function setUserAgent(string $userAgent): void;

    /**
     * @return string
     */
    public function getUserAgent(): string;

    /**
     * @param string $method
     */
    public function setMethod(string $method);

    /**
     * @return string
     */
    public function getMethod(): string;

    /**
     * @param string $endpoint
     */
    public function setEndpoint(string $endpoint);

    /**
     * @return string
     */
    public function getEndpoint(): string;

    /**
     * @param bool $verify
     */
    public function setVerify(bool $verify);

    /**
     * @return bool
     */
    public function getVerify(): bool;

    /**
     * @param bool $debug
     */
    public function setDebug(bool $debug);

    /**
     * @return bool
     */
    public function getDebug(): bool;

    /**
     * @param string $method The HTTP method
     *
     * @return string option name
     */
    public function getParamsOptionName(string $method): string;

    /**
     *
     * @param string $method The HTTP method (GET|POST|PUT|DELETE|PATCH)
     * @param string $endpoint The API endpoint
     * @param array $params The parameters to send with this request
     * @param boolean $auth Set if it needs authentication
     *
     * @return ResponseInterface
     */
    public function request(
        string $method = 'GET',
        string $endpoint = '',
        array $params = [],
        bool $auth = true
    ): ResponseInterface;
}
