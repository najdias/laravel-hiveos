<?php

namespace Days85\HiveOS;

use Days85\HiveOS\Models\AuthToken;
use Days85\HiveOS\Models\FarmListItem;
use Ergebnis\Http\Method;

/**
 * Class HiveOS
 */
class HiveOS
{
    /**
     * @var string
     */
    protected string $login = '';

    /**
     * @var string
     */
    protected string $password = '';

    /**
     * @var string
     */
    protected string $token;

    /**
     * @var ClientInterface
     */
    protected ClientInterface $client;

    /**
     * @var HiveOSResponse
     */
    protected HiveOSResponse $response;

    /**
     * @var bool
     */
    protected bool $debug = false;

    /**
     * @var bool
     */
    protected bool $verify = false;

    /**
     * @var string
     */
    protected string $endpoint;

    /**
     * @param string $token
     * @param ClientInterface|null $client
     */
    public function __construct(string $token, ClientInterface $client = null)
    {
        $this->setToken($token);

        if (is_null($client)) {
            $client = new HiveOSClient($token);
        }

        $this->setClient($client);
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

    /**
     * @param HiveOSClient $client
     */
    protected function setClient(HiveOSClient $client): void
    {
        $this->client = $client;
    }

    /**
     * @param string $login
     */
    public function setLogin(string $login): void
    {
        $this->login = $login;
    }

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $endpoint
     */
    public function setEndPoint(string $endpoint): void
    {
        $this->endpoint = $endpoint;
    }

    /**
     * @return string
     */
    public function getEndPoint(): string
    {
        return $this->endpoint;
    }

    /**
     * @param bool $debug
     */
    public function setDebug(bool $debug): void
    {
        $this->debug = $debug;
    }

    /**
     * @return bool
     */
    public function getDebug(): bool
    {
        return $this->debug;
    }

    /**
     * @param bool $verify
     */
    public function setVerify(bool $verify): void
    {
        $this->verify = $verify;
    }

    /**
     * @return bool
     */
    public function getVerify(): bool
    {
        return $this->verify;
    }

    /**
     * Wrapper for HiveClient->request()
     *
     * @param string $method
     * @param string $endpoint
     * @param array $params
     * @param bool $auth
     *
     * @return mixed
     *
     */
    protected function request(
        string $method = Method::GET,
        string $endpoint = '',
        array $params = [],
        bool $auth = true
    ): mixed {

        $this->client->setDebug($this->getDebug());

        $this->client->setVerify($this->getVerify());

        $this->response =  $this->client->request($method, $endpoint, $params, $auth);

        return $this->response->getDecodedBody();
    }

    /**
     * Create auth token (sign in)
     *
     * @param string $login
     * @param string $password
     *
     * @return bool
     */
    public function authLogin(string $login, string $password): bool
    {
        $this->setLogin($login);
        $this->setPassword($password);

        $params = [
            'login' => $this->getLogin(),
            'password' => $this->getPassword()
        ];

        $response = $this->request(Method::POST, HiveOSEndpoints::AUTH_LOGIN, $params, false);
        if (!is_null($response)) {
            $authToken = new AuthToken();
            $authToken->fromArray($response);

            $this->setToken($authToken->getAccessToken());
            $this->client->setToken($this->getToken());
            return true;
        }
        return false;
    }

    /**
     * @return FarmListItem
     */
    public function farms(): FarmListItem
    {
        $response = $this->request(Method::GET, HiveOSEndpoints::FARMS);
        $list = new FarmListItem();
        if (!is_null($response)) {
            $list->fromArray($response);
        }
        return $list;
    }
}
