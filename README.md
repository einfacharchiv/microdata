# Extract billing data from HTML (supporting Microdata and JSON-LD)

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)

This package provides an easy way to extract billing data from Microdata and JSON-LD in an HTML document.

## Requirements
PHP 7.0 and later.

## Installation
You can install this package via [Composer](http://getcomposer.org). Run the following command:

```bash
composer require einfacharchiv/microdata
```

## Usage
Extracting billing data from HTML is easy.

If an item is not present, the method returns `null`.

```php
$html = '<!doctype html><html lang="en"><head>...';

$microdata = new Microdata($html);

// Get all invoice items
foreach ($microdata->getItemsByType('Invoice') as $item) {
    // Available methods
    (string) $item->getBillingPeriod() ?: null;
    $item->getConfirmationNumber();

    if ($item->getCustomer()) {
        (string) $item->getCustomer()->getIdentifier() ?: null;
        $item->getCustomer()->getName();

        if ($item->getCustomer()->getAddress()) {
            $item->getCustomer()->getAddress()->getStreetAddress();
            $item->getCustomer()->getAddress()->getPostOfficeBoxNumber();
            $item->getCustomer()->getAddress()->getPostalCode();
            $item->getCustomer()->getAddress()->getAddressLocality();
            $item->getCustomer()->getAddress()->getAddressRegion();
            (string) $item->getCustomer()->getAddress()->getAddressCountry() ?: null;
        }

        $item->getCustomer()->getEmail();
        $item->getCustomer()->getTelephone();
        $item->getCustomer()->getUrl();

        $item->getCustomer()->getTaxId();
        $item->getCustomer()->getVatId();
    }

    (string) $item->getPaymentDueDate() ?: null;
    (string) $item->getPaymentMethod() ?: null;
    $item->getPaymentMethodId();
    (string) $item->getPaymentStatus() ?: null;

    if ($item->getProvider()) {
        $item->getProvider()->getName();

        if ($item->getProvider()->getAddress()) {
            $item->getProvider()->getAddress()->getStreetAddress();
            $item->getProvider()->getAddress()->getPostOfficeBoxNumber();
            $item->getProvider()->getAddress()->getPostalCode();
            $item->getProvider()->getAddress()->getAddressLocality();
            $item->getProvider()->getAddress()->getAddressRegion();
            (string) $item->getProvider()->getAddress()->getAddressCountry() ?: null;
        }

        $item->getProvider()->getEmail();
        $item->getProvider()->getTelephone();
        $item->getProvider()->getUrl();

        $item->getProvider()->getTaxId();
        $item->getProvider()->getVatId();
    }

    if ($item->getTotalPaymentDue()) {
        $item->getTotalPaymentDue()->getAmount(); // Returns an array with 'amount' and 'currency'
    }

    (string) $item->getIdentifier() ?: null;
    $item->getName();
    $item->getUrl();
}
```

## Contributing
Contributions are **welcome**.

We accept contributions via Pull Requests on [Github](https://github.com/einfachArchiv/microdata).

Find yourself stuck using the package? Found a bug? Do you have general questions or suggestions for improvement? Feel free to [create an issue on GitHub](https://github.com/einfachArchiv/microdata/issues), we'll try to address it as soon as possible.

If you've found a security issue, please email [support@einfacharchiv.com](mailto:support@einfacharchiv.com) instead of using the issue tracker.

**Happy coding**!

## Credits
- [Philip Günther](https://github.com/Pag-Man)
- [All Contributors](https://github.com/einfachArchiv/microdata/contributors)

## License
The MIT License (MIT). Please see [License File](LICENSE) for more information.
