<?php

namespace CeytekLabs\MatomoServicesLite\Methods;

class SitesManagerMethod
{
    private $api;

    private $token;

    private $module;

    private $format;

    private $filterOffset;

    private $filterLimit;

    public static function make(string $api, string $token, string $module, string $format, int $filterOffset, int $filterLimit): self
    {
        $instance = new self;

        $instance->api = $api;
        $instance->token = $token;
        $instance->module = $module;
        $instance->format = $format;
        $instance->filterOffset = $filterOffset;
        $instance->filterLimit = $filterLimit;

        return $instance;
    }

    public function getAllSites(): \stdClass
    {
        $curl = curl_init();
        
        curl_setopt_array($curl, [
            CURLOPT_URL => $this->api.'?'.http_build_query([
                'method' => 'SitesManager.getAllSites',
                'module' => $this->module,
                'format' => $this->format,
                'token_auth' => $this->token,
                'filter_offset' => $this->filterOffset,
                'filter_limit' => $this->filterLimit,
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