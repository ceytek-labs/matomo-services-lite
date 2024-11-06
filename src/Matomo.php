<?php

namespace CeytekLabs\MatomoServicesLite;

use CeytekLabs\MatomoServicesLite\Methods\SitesManagerMethod;

class Matomo
{
    private $api;

    private $token;

    private $module = 'API';

    private $format = 'json';

    private $filterLimit = -1;

    public static function make(): self
    {
        return new self;
    }

    public function setApi(string $api): self
    {
        $this->api = $api;

        return $this;
    }

    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }

    public function setModule(string $module): self
    {
        $this->token = $module;

        return $this;
    }

    public function setFormat(string $format): self
    {
        $this->format = $format;

        return $this;
    }

    public function setFilterLimit(int $filterLimit): self
    {
        $this->filterLimit = $filterLimit;

        return $this;
    }

    public function sitesManager(): SitesManagerMethod
    {
        return SitesManagerMethod::make($this->api, $this->token, $this->module, $this->format, $this->filterLimit);
    }
}