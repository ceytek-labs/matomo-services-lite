<?php

use CeytekLabs\MatomoServicesLite\Matomo;

$result = Matomo::make()
    ->setApi('<your-api-url>')
    ->setToken('<your-token>')
    ->usersManager()
    ->setIdSite('<your-id-site>')
    ->setAccess('<your-access>')
    ->getUsersWithSiteAccess();

echo '<pre>'; print_r($result);