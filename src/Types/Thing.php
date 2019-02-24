<?php

namespace einfachArchiv\Microdata\Types;

class Thing extends Type
{
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
}
