<?php

use CeytekLabs\MatomoServicesLite\Matomo;

$result = Matomo::make()
    ->setApi('<your-api-url>')
    ->setToken('<your-token>')
    ->marketingCampaignsReporting()
    ->setIdSite('<your-id-site>')
    ->setPeriod('<your-period>')
    ->setDate('<your-date>')
    ->getName();

echo '<pre>'; print_r($result);