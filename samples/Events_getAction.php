<?php

use CeytekLabs\MatomoServicesLite\Matomo;

$result = Matomo::make()
    ->setApi('<your-api-url>')
    ->setToken('<your-token>')
    ->events()
    ->setIdSite('<your-id-site>')
    ->setPeriod('<your-period>')
    ->setDate('<your-date>')
    ->getAction();

echo '<pre>'; print_r($result);