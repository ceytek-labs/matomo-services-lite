<?php

namespace CeytekLabs\MatomoServicesLite\Methods;

class DevicesDetectionMethod
{
    private $api;

    private $token;

    private $module;

    private $format;

    private $filterOffset;

    private $filterLimit;

    private $idSite;

    private $period;

    private $date;

    private $segment;

    private $columns;

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

    public function setIdSite(string $idSite): self
    {
        $this->idSite = $idSite;

        return $this;
    }

    public function setPeriod(string $period): self
    {
        $this->period = $period;

        return $this;
    }

    public function setDate(string $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function setSegment(string $segment): self
    {
        $this->segment = $segment;

        return $this;
    }

    public function setColumns(string $columns): self
    {
        $this->columns = $columns;

        return $this;
    }

    public function getType(): \stdClass
    {
        if (! isset($this->idSite)) {
            throw new \Exception('Please set your idSite');
        }

        if (! isset($this->period)) {
            throw new \Exception('Please set your period');
        }

        if (! isset($this->date)) {
            throw new \Exception('Please set your date');
        }

        $curl = curl_init();
        
        curl_setopt_array($curl, [
            CURLOPT_URL => $this->api.'?'.http_build_query([
                'method' => 'DevicesDetection.getType',
                'module' => $this->module,
                'format' => $this->format,
                'token_auth' => $this->token,
                'filter_offset' => $this->filterOffset,
                'filter_limit' => $this->filterLimit,
                'idSite' => $this->idSite,
                'period' => $this->period,
                'date' => $this->date,
                'segment' => $this->segment ?? '',
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