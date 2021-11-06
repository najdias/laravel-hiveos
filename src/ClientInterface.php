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
}