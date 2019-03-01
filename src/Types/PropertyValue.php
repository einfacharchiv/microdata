<?php

namespace einfachArchiv\Microdata\Types;

class PropertyValue extends Thing
{
    /**
     * Returns the value.
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->getPropertyByName('value');
    }

    /**
     * Returns the value.
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->getValue();
    }
}
