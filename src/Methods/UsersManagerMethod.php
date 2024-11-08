<?php

namespace CeytekLabs\MatomoServicesLite\Methods;

class UsersManagerMethod
{
    private $api;

    private $token;

    private $module;

    private $format;

    private $filterLimit;

    private $idSite;

    private $access;

    public static function make(string $api, string $token, string $module, string $format, int $filterLimit): self
    {
        $instance = new self;

        $instance->api = $api;
        $instance->token = $token;
        $instance->module = $module;
        $instance->format = $format;
        $instance->filterLimit = $filterLimit;

        return $instance;
    }

    public function setIdSite(string $idSite): self
    {
        $this->idSite = $idSite;

        return $this;
    }

    public function setAccess(string $access): self
    {
        $this->access = $access;

        return $this;
    }

    public function getUsersWithSiteAccess(): \stdClass
    {
        if (! isset($this->idSite)) {
            throw new \Exception('Please set your idSite');
        }

        if (! isset($this->access)) {
            throw new \Exception('Please set your access');
        }

        $curl = curl_init();
        
        curl_setopt_array($curl, [
            CURLOPT_URL => $this->api.'?'.http_build_query([
                'method' => 'UsersManager.getUsersWithSiteAccess',
                'module' => $this->module,
                'format' => $this->format,
                'token_auth' => $this->token,
                'filter_limit' => $this->filterLimit,
                'idSite' => $this->idSite,
                'access' => $this->access,
            ]),
            CURLOPT_POST => 1,
            CURLOPT_RETURNTRANSFER => 1
        ]);

        $response = curl_exec($curl);

        if (curl_errno($curl)) {
            throw new \Exception('Error: '.curl_error($curl));
        }

        return (object) json_decode($response);
    }
}