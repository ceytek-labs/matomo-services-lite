<?php

namespace CeytekLabs\MatomoServicesLite\Methods;

class EventsMethod
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

    private $idSubtable;

    private $segment;

    private $expanded;

    private $secondaryDimension;

    private $flat;

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

    public function setIdSubtable(string $idSubtable): self
    {
        $this->idSubtable = $idSubtable;

        return $this;
    }

    public function setSegment(string $segment): self
    {
        $this->segment = $segment;

        return $this;
    }

    public function setExpanded(string $expanded): self
    {
        $this->expanded = $expanded;

        return $this;
    }

    public function setSecondaryDimension(string $secondaryDimension): self
    {
        $this->secondaryDimension = $secondaryDimension;

        return $this;
    }

    public function setFlat(string $flat): self
    {
        $this->flat = $flat;

        return $this;
    }

    public function getAction(): \stdClass
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
                'method' => 'Events.getAction',
                'module' => $this->module,
                'format' => $this->format,
                'token_auth' => $this->token,
                'filter_offset' => $this->filterOffset,
                'filter_limit' => $this->filterLimit,
                'idSite' => $this->idSite,
                'period' => $this->period,
                'date' => $this->date,
                'segment' => $this->segment ?? '',
                'expanded' => $this->expanded ?? '',
                'secondaryDimension' => $this->secondaryDimension ?? '',
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

    public function getCategory(): \stdClass
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
                'method' => 'Events.getCategory',
                'module' => $this->module,
                'format' => $this->format,
                'token_auth' => $this->token,
                'filter_offset' => $this->filterOffset,
                'filter_limit' => $this->filterLimit,
                'idSite' => $this->idSite,
                'period' => $this->period,
                'date' => $this->date,
                'segment' => $this->segment ?? '',
                'expanded' => $this->expanded ?? '',
                'secondaryDimension' => $this->secondaryDimension ?? '',
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

    public function getName(): \stdClass
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
                'method' => 'Events.getName',
                'module' => $this->module,
                'format' => $this->format,
                'token_auth' => $this->token,
                'filter_offset' => $this->filterOffset,
                'filter_limit' => $this->filterLimit,
                'idSite' => $this->idSite,
                'period' => $this->period,
                'date' => $this->date,
                'segment' => $this->segment ?? '',
                'expanded' => $this->expanded ?? '',
                'secondaryDimension' => $this->secondaryDimension ?? '',
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

    public function getNameFromActionId(): \stdClass
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

        if (! isset($this->idSubtable)) {
            throw new \Exception('Please set your idSubtable');
        }

        $curl = curl_init();
        
        curl_setopt_array($curl, [
            CURLOPT_URL => $this->api.'?'.http_build_query([
                'method' => 'Events.getNameFromActionId',
                'module' => $this->module,
                'format' => $this->format,
                'token_auth' => $this->token,
                'filter_offset' => $this->filterOffset,
                'filter_limit' => $this->filterLimit,
                'idSite' => $this->idSite,
                'period' => $this->period,
                'date' => $this->date,
                'idSubtable' => $this->idSubtable,
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