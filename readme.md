# Composer installation #

Add the following to your composer.json:

```json
{
    "require": {
        "bitcoinvietnam/21bitcoinfees-php": "@dev"
    }
}
```

## Usage

Instantiate a Client object

```php
$client = new BitcoinVietnam\TwentyoneBitcoinfees\Client();
```

Get recommended fees

```php
$client->getFeesRecommended();
```

Get fees list

```php
$client->getFeesList();
```