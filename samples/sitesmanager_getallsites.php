<?php

use CeytekLabs\MatomoServicesLite\Matomo;

$allSites = Matomo::make()
    ->setApi('<your-api-url>')
    ->setToken('<your-token>')
    ->sitesManager()
    ->getAllSites();

echo '<pre>'; print_r($allSites);