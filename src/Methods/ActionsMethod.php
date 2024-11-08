<?php

namespace CeytekLabs\MatomoServicesLite\Methods;

class ActionsMethod
{
    private $api;

    private $token;

    private $module;

    private $format;

    private $filterLimit;

    private $idSite;

    private $period;

    private $date;

    private $segment;

    private $columns;

    private $expanded;

    private $idSubtable;

    private $depth;

    private $flat;

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

    public function setExpanded(string $expanded): self
    {
        $this->expanded = $expanded;

        return $this;
    }

    public function setIdSubtable(string $idSubtable): self
    {
        $this->idSubtable = $idSubtable;

        return $this;
    }

    public function setDepth(string $depth): self
    {
        $this->depth = $depth;

        return $this;
    }

    public function setFlat(string $flat): self
    {
        $this->flat = $flat;

        return $this;
    }

    public function get(): \stdClass
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
                'method' => 'Actions.get',
                'module' => $this->module,
                'format' => $this->format,
                'token_auth' => $this->token,
                'filter_limit' => $this->filterLimit,
                'idSite' => $this->idSite,
                'period' => $this->period,
                'date' => $this->date,
                'segment' => $this->segment ?? '',
                'columns' => $this->columns ?? '',
            ]),
            CURLOPT_POST => 1,
            CURLOPT_RETURNTRANSFER => 1
        ]);

        $response = curl_exec($curl);

        if (curl_errno($curl)) {
            throw new \Exception('Error: '.curl_error($curl));
        }

        return json_decode($response);
    }

    public function getPageUrls(): \stdClass
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
                'method' => 'Actions.getPageUrls',
                'module' => $this->module,
                'format' => $this->format,
                'token_auth' => $this->token,
                'filter_limit' => $this->filterLimit,
                'idSite' => $this->idSite,
                'period' => $this->period,
                'date' => $this->date,
                'segment' => $this->segment ?? '',
                'expanded' => $this->expanded ?? '',
                'idSubtable' => $this->idSubtable ?? '',
                'depth' => $this->depth ?? '',
                'flat' => $this->flat ?? '',
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