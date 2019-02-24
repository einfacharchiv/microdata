<?php

namespace einfachArchiv\Microdata\Types;

class Person extends Thing
{
    /**
     * Returns the address.
     *
     * @return mixed
     */
    public function getAddress()
    {
        $property = $this->getPropertyByName('address');

        if ($property instanceof PostalAddress) {
            return $property;
        }
    }

    /**
     * Returns the email.
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->getPropertyByName('email');
    }

    /**
     * Returns the telephone.
     *
     * @return string|null
     */
    public function getTelephone()
    {
        return $this->getPropertyByName('telephone');
    }

    /**
     * Returns the tax id.
     *
     * @return string|null
     */
    public function getTaxId()
    {
        return $this->getPropertyByName('taxID');
    }

    /**
     * Returns the vat id.
     *
     * @return string|null
     */
    public function getVatId()
    {
        return $this->getPropertyByName('vatID');
    }
}
