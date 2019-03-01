<?php

namespace einfachArchiv\Microdata\Types;

class Thing extends Type
{
    /**
     * Returns the identifier.
     *
     * @return PropertyValue|string|null
     */
    public function getIdentifier()
    {
        return $this->getPropertyByName('identifier');
    }

    /**
     * Returns the name.
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->getPropertyByName('name');
    }

    /**
     * Returns the URL.
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->getPropertyByName('url');
    }

    /**
     * Returns the name.
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->getName();
    }
}
