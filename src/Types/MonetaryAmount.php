<?php

namespace einfachArchiv\Microdata\Types;

use CommerceGuys\Intl\Currency\CurrencyRepository;

class MonetaryAmount extends Thing
{
    /**
     * Returns the value.
     *
     * @return float
     */
    public function getValue()
    {
        return (float) $this->getPropertyByName('value');
    }

    /**
     * Returns the currency.
     *
     * @return string|null
     */
    public function getCurrency()
    {
        $currency = $this->getPropertyByName('currency');

        if (array_key_exists($currency, (new CurrencyRepository())->getList())) {
            return $currency;
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
            'value' => 'amount',
            'currency',
        ]);
    }
}
