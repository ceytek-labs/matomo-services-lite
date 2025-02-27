<?php

namespace CeytekLabs\MatomoServicesLite;

use CeytekLabs\MatomoServicesLite\Methods\ActionsMethod;
use CeytekLabs\MatomoServicesLite\Methods\DevicesDetectionMethod;
use CeytekLabs\MatomoServicesLite\Methods\EventsMethod;
use CeytekLabs\MatomoServicesLite\Methods\MarketingCampaignsReportingMethod;
use CeytekLabs\MatomoServicesLite\Methods\SitesManagerMethod;
use CeytekLabs\MatomoServicesLite\Methods\UsersManagerMethod;
use CeytekLabs\MatomoServicesLite\Methods\VisitsSummaryMethod;

class Matomo
{
    private $api;

    private $token;

    private $module = 'API';

    private $format = 'json';

    private $filterOffset = 0;

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

    public function setFilterOffset(int $filterOffset): self
    {
        $this->filterOffset = $filterOffset;

        return $this;
    }

    public function setFilterLimit(int $filterLimit): self
    {
        $this->filterLimit = $filterLimit;

        return $this;
    }

    public function actions(): ActionsMethod
    {
        return ActionsMethod::make($this->api, $this->token, $this->module, $this->format, $this->filterOffset, $this->filterLimit);
    }

    public function devicesDetection(): DevicesDetectionMethod
    {
        return DevicesDetectionMethod::make($this->api, $this->token, $this->module, $this->format, $this->filterOffset, $this->filterLimit);
    }

    public function events(): EventsMethod
    {
        return EventsMethod::make($this->api, $this->token, $this->module, $this->format, $this->filterOffset, $this->filterLimit);
    }

    public function marketingCampaignsReporting(): MarketingCampaignsReportingMethod
    {
        return MarketingCampaignsReportingMethod::make($this->api, $this->token, $this->module, $this->format, $this->filterOffset, $this->filterLimit);
    }

    public function sitesManager(): SitesManagerMethod
    {
        return SitesManagerMethod::make($this->api, $this->token, $this->module, $this->format, $this->filterOffset, $this->filterLimit);
    }

    public function usersManager(): UsersManagerMethod
    {
        return UsersManagerMethod::make($this->api, $this->token, $this->module, $this->format, $this->filterOffset, $this->filterLimit);
    }

    public function visitsSummary(): VisitsSummaryMethod
    {
        return VisitsSummaryMethod::make($this->api, $this->token, $this->module, $this->format, $this->filterOffset, $this->filterLimit);
    }
}