<?php

namespace einfachArchiv\Microdata\Types;

use CommerceGuys\Intl\Currency\CurrencyRepository;

class PriceSpecification extends Thing
{
    /**
     * Returns the price.
     *
     * @return float
     */
    public function getPrice()
    {
        return (float) $this->getPropertyByName('price');
    }

    /**
     * Returns the currency.
     *
     * @return string|null
     */
    public function getPriceCurrency()
    {
        $priceCurrency = $this->getPropertyByName('priceCurrency');

        if (array_key_exists($priceCurrency, (new CurrencyRepository())->getList())) {
            return $priceCurrency;
        }
    }

    /**
     * Returns the price and currency.
     *
     * @return array|null
     */
    public function getAmount()
    {
        return $this->getCombo([
            'price' => 'amount',
            'priceCurrency' => 'currency',
        ]);
    }
}
