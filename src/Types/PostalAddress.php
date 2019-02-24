<?php

namespace einfachArchiv\Microdata\Types;

class PostalAddress extends Thing
{
    /**
     * Returns the address country.
     *
     * @return string|null
     */
    public function getAddressCountry()
    {
        return $this->getPropertyByName('addressCountry');
    }

    /**
     * Returns the address locality.
     *
     * @return string|null
     */
    public function getAddressLocality()
    {
        return $this->getPropertyByName('addressLocality');
    }

    /**
     * Returns the address region.
     *
     * @return string|null
     */
    public function getAddressRegion()
    {
        return $this->getPropertyByName('addressRegion');
    }

    /**
     * Returns the post office box number.
     *
     * @return string|null
     */
    public function getPostOfficeBoxNumber()
    {
        return $this->getPropertyByName('postOfficeBoxNumber');
    }

    /**
     * Returns the postal code.
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->getPropertyByName('postalCode');
    }

    /**
     * Returns the street address.
     *
     * @return string|null
     */
    public function getStreetAddress()
    {
        return $this->getPropertyByName('streetAddress');
    }
}
