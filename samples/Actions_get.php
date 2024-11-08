<?php

use CeytekLabs\MatomoServicesLite\Matomo;

$result = Matomo::make()
    ->setApi('<your-api-url>')
    ->setToken('<your-token>')
    ->actions()
    ->setIdSite('<your-id-site>')
    ->setPeriod('<your-period>')
    ->setDate('<your-date>')
    ->get();

echo '<pre>'; print_r($result);