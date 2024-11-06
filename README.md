<p align="center">
    <img src="https://raw.githubusercontent.com/ceytek-labs/matomo-services-lite/refs/heads/0.x/art/banner.png" width="400" alt="Matomo Services Lite">
    <p align="center">
        <a href="https://packagist.org/packages/ceytek-labs/matomo-services-lite"><img alt="Total Downloads" src="https://img.shields.io/packagist/dt/ceytek-labs/matomo-services-lite"></a>
        <a href="https://packagist.org/packages/ceytek-labs/matomo-services-lite"><img alt="Latest Version" src="https://img.shields.io/packagist/v/ceytek-labs/matomo-services-lite"></a>
        <a href="https://packagist.org/packages/ceytek-labs/matomo-services-lite"><img alt="Size" src="https://img.shields.io/github/repo-size/ceytek-labs/matomo-services-lite"></a>
        <a href="https://packagist.org/packages/ceytek-labs/matomo-services-lite"><img alt="License" src="https://img.shields.io/packagist/l/ceytek-labs/matomo-services-lite"></a>
    </p>
</p>

------

# Matomo Services Lite - Matomo API for PHP

**Matomo Services Lite** is a lightweight and extendable library designed to help you manage data easily using the Matomo in your PHP projects.

> **Disclaimer:** This package is not an official product of Matomo. The developers accept no responsibility for any issues, discrepancies, or damages that may arise from its use.

## Requirements

- PHP 7.0 or higher (including PHP 8)

## Installation

You can add this package to your projects via Composer:

```bash
composer require ceytek-labs/matomo-services-lite
```

## Services
- [Sites Manager](#sites-manager)
    - [Get All Sites](#sites-manager-get-all-sites)

## Sites Manager

The SitesManager API gives you full control on Websites in Matomo (create, update and delete), and many methods to retrieve websites based on various attributes.

### Example Usage

The following example demonstrates how to manage data in a **Sites Manager** document:

#### Sites Manager: Get All Sites

```php
use CeytekLabs\MatomoServicesLite\Matomo;

$allSites = Matomo::make()
    ->setApi('<your-api-url>')
    ->setToken('<your-token>')
    ->sitesManager()
    ->getAllSites();

echo '<pre>'; print_r($allSites);
```

## Contributing

Feel free to submit a **pull request** or report an issue. Any contributions and feedback are highly appreciated!

## License

This project is licensed under the MIT License.