<?php

use CeytekLabs\MatomoServicesLite\Matomo;

$result = Matomo::make()
    ->setApi('<your-api-url>')
    ->setToken('<your-token>')
    ->events()
    ->setIdSite('<your-id-site>')
    ->setPeriod('<your-period>')
    ->setDate('<your-date>')
    ->setIdSubtable('<your-id-subtable>')
    ->getNameFromActionId();

echo '<pre>'; print_r($result);