<?php

namespace einfachArchiv\Microdata\DataTypes;

class DataType
{
    /**
     * The value.
     *
     * @var mixed
     */
    protected $value;

    /**
     * @param mixed $value The value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }
}
