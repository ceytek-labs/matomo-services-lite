<p align="center">
    <img src="https://raw.githubusercontent.com/ceytek-labs/matomo-services-lite/refs/heads/1.x/art/banner.png" width="400" alt="Matomo Services Lite">
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

- [Actions](#actions)
    - [Get](#actions-get)
    - [Get Page Urls](#actions-get-page-urls)
- [Devices Detection](#devices-detection)
    - [Get Type](#devices-detection-get-type)
- [Events](#events)
    - [Get Action](#events-get-action)
    - [Get Category](#events-get-category)
    - [Get Name](#events-get-name)
    - [Get Name From Action ID](#events-get-name-from-action-id)
- [Sites Manager](#sites-manager)
    - [Get All Sites](#sites-manager-get-all-sites)
- [Visits Summary](#visits-summary)
    - [Get](#visits-summary-get)

## Actions

The Actions API lets you request reports for all your Visitor Actions: Page URLs, Page titles, Events, Content Tracking, File Downloads and Clicks on external websites.

### Example Usage

The following example demonstrates how to manage data in a **Actions** document:

**[⬆ Back to services](#services)**

#### Actions: Get

```php
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
```

**[⬆ Back to services](#services)**

#### Actions: Get Page Urls

```php
use CeytekLabs\MatomoServicesLite\Matomo;

$result = Matomo::make()
    ->setApi('<your-api-url>')
    ->setToken('<your-token>')
    ->actions()
    ->setIdSite('<your-id-site>')
    ->setPeriod('<your-period>')
    ->setDate('<your-date>')
    ->getPageUrls();

echo '<pre>'; print_r($result);
```

**[⬆ Back to services](#services)**

## Devices Detection

The DevicesDetection API lets you access reports on your visitors devices, brands, models, Operating system, Browsers.

### Example Usage

The following example demonstrates how to manage data in a **Devices Detection** document:

**[⬆ Back to services](#services)**

#### Devices Detection: Get Type

```php
use CeytekLabs\MatomoServicesLite\Matomo;

$result = Matomo::make()
    ->setApi('<your-api-url>')
    ->setToken('<your-token>')
    ->devicesDetection()
    ->setIdSite('<your-id-site>')
    ->setPeriod('<your-period>')
    ->setDate('<your-date>')
    ->getType();

echo '<pre>'; print_r($result);
```

**[⬆ Back to services](#services)**

## Events

The Events API lets you request reports about your users' Custom Events.

### Example Usage

The following example demonstrates how to manage data in a **Devices Detection** document:

**[⬆ Back to services](#services)**

#### Events: Get Action

```php
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
```

**[⬆ Back to services](#services)**

#### Events: Get Category

```php
use CeytekLabs\MatomoServicesLite\Matomo;

$result = Matomo::make()
    ->setApi('<your-api-url>')
    ->setToken('<your-token>')
    ->events()
    ->setIdSite('<your-id-site>')
    ->setPeriod('<your-period>')
    ->setDate('<your-date>')
    ->getCategory();

echo '<pre>'; print_r($result);
```

**[⬆ Back to services](#services)**

#### Events: Get Name

```php
use CeytekLabs\MatomoServicesLite\Matomo;

$result = Matomo::make()
    ->setApi('<your-api-url>')
    ->setToken('<your-token>')
    ->events()
    ->setIdSite('<your-id-site>')
    ->setPeriod('<your-period>')
    ->setDate('<your-date>')
    ->getName();

echo '<pre>'; print_r($result);
```

**[⬆ Back to services](#services)**

#### Events: Get Name From Action ID

```php
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
```

**[⬆ Back to services](#services)**

## Sites Manager

The SitesManager API gives you full control on Websites in Matomo (create, update and delete), and many methods to retrieve websites based on various attributes.

### Example Usage

The following example demonstrates how to manage data in a **Sites Manager** document:

**[⬆ Back to services](#services)**

#### Sites Manager: Get All Sites

```php
use CeytekLabs\MatomoServicesLite\Matomo;

$result = Matomo::make()
    ->setApi('<your-api-url>')
    ->setToken('<your-token>')
    ->sitesManager()
    ->getAllSites();

echo '<pre>'; print_r($result);
```

**[⬆ Back to services](#services)**

## Visits Summary

VisitsSummary API lets you access the core web analytics metrics (visits, unique visitors, count of actions (page views & downloads & clicks on outlinks), time on site, bounces and converted visits).

### Example Usage

The following example demonstrates how to manage data in a **Visits Summary** document:

**[⬆ Back to services](#services)**

#### Visits Summary: Get

```php
use CeytekLabs\MatomoServicesLite\Matomo;

$result = Matomo::make()
    ->setApi('<your-api-url>')
    ->setToken('<your-token>')
    ->visitsSummary()
    ->setIdSite('<your-id-site>')
    ->setPeriod('<your-period>')
    ->setDate('<your-date>')
    ->get();

echo '<pre>'; print_r($result);
```

## Contributing

Feel free to submit a **pull request** or report an issue. Any contributions and feedback are highly appreciated!

## License

This project is licensed under the MIT License.