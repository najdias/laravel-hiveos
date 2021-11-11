<?php

namespace Days85\HiveOS;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

abstract class AbstractClient implements ClientInterface
{
    /**
     * @const string API URL.
     */
    protected const BASE_API_URL = 'https://example.api/';

    /**
     * @var string
     */
    protected string $token;

    /**
     * @var Client
     */
    protected Client $httpClient;

    /**
     * @var array
     */
    protected array $headers = [];

    /**
     * @var string
     */
    protected string $userAgent = 'Client Agent';

    /**
     * @var string
     */
    protected string $method;

    /**
     * @var string
     */
    protected string $endpoint;

    /**
     * @var bool
     */
    protected bool $verify = false;

    /**
     * @var bool
     */
    protected bool $debug = false;

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

    /**
     * {@inheritDoc}
     */
    public function setHeader(string $name, string $value): void
    {
        $this->headers[$name] = $value;
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
    public function removeHeader(string $key): void
    {
        if (isset($this->headers[$key])) {
            unset($this->headers[$key]);
        }
    }

    /**
     * {@inheritDoc}
     */
    public function setUserAgent(string $userAgent): void
    {
        $this->userAgent = $userAgent;
    }

    /**
     * {@inheritDoc}
     */
    public function getUserAgent(): string
    {
        return $this->userAgent;
    }

    /**
     * {@inheritDoc}
     */
    public function setMethod(string $method)
    {
        $this->method = $method;
    }

    /**
     * {@inheritDoc}
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * {@inheritDoc}
     */
    public function setEndpoint(string $endpoint)
    {
        $this->endpoint = $endpoint;
    }

    /**
     * {@inheritDoc}
     */
    public function getEndpoint(): string
    {
        return $this->endpoint;
    }

    /**
     * {@inheritDoc}
     */
    public function setVerify(bool $verify)
    {
        $this->verify = $verify;
    }

    /**
     * {@inheritDoc}
     */
    public function getVerify(): bool
    {
        return $this->verify;
    }

    /**
     * {@inheritDoc}
     */
    public function setDebug(bool $debug)
    {
        $this->debug = $debug;
    }

    /**
     * {@inheritDoc}
     */
    public function getDebug(): bool
    {
        return $this->debug;
    }

    public function getParamsOptionName(string $method): string
    {
        return match ($method) {
            'GET' => 'query',
            'POST', 'PUT', 'DELETE', 'PATCH' => 'form_params',
            default => '',
        };
    }

    /**
     * {@inheritDoc}
     *
     * @throws GuzzleException
     */
    public function request(
        string $method = 'GET',
        string $endpoint = '',
        array $params = [],
        bool $auth = true
    ): ResponseInterface {
        $this->setHeader('Authorization', 'Bearer ' . $this->getToken());
        if (!$auth) {
            $this->removeHeader('Authorization');
        }

        $this->setHeader('User-Agent', $this->getUserAgent());
        $this->setMethod($method);
        $this->setEndpoint($endpoint);

        $options = [
            'headers' => $this->getHeaders(),
            'verify'  => $this->getVerify(),
            'debug'  => $this->getDebug(),
            $this->getParamsOptionName($method) => $params
        ];

        try {
            $response = $this->httpClient->request($method, $endpoint, $options);
            return $this->getResponse($response);
        } catch (ClientException $e) {
            return $this->getResponse($e->getResponse());
        } catch (ConnectException $e) {
            return $this->getResponse($e->getResponse());
        } catch (RequestException $e) {
            return $this->getResponse($e->getResponse());
        }
    }

    /**
     * @param HttpResponseInterface $response
     *
     * @return ResponseInterface
     */
    abstract protected function getResponse(HttpResponseInterface $response): ResponseInterface;
}
