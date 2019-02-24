<?php

namespace einfachArchiv\Microdata\DataTypes;

use Carbon\Carbon;

class DateTime extends DataType
{
    /**
     * Returns a Carbon instance.
     *
     * @return \Carbon\Carbon|null
     */
    public function carbon()
    {
        if ($this->value) {
            return Carbon::parse($this->value);
        }
    }

    /**
     * Returns a date string.
     *
     * @return string|null
     */
    public function toDateString()
    {
        $carbon = $this->carbon();

        if (!is_null($carbon)) {
            return $carbon->toDateString();
        }
    }
}
