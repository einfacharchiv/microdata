<?php

namespace einfachArchiv\Microdata\DataTypes;

use Carbon\CarbonPeriod;

class Duration extends DataType
{
    /**
     * Returns a CarbonPeriod instance.
     *
     * @return \Carbon\CarbonPeriod|null
     */
    public function carbonPeriod()
    {
        if ($this->value) {
            return CarbonPeriod::createFromIso($this->value);
        }
    }

    /**
     * Returns the start date.
     *
     * @return string|null
     */
    public function getStartDate()
    {
        $carbonPeriod = $this->carbonPeriod();

        if (!is_null($carbonPeriod)) {
            return $carbonPeriod->getStartDate()->toDateString();
        }
    }

    /**
     * Returns the end date.
     *
     * @return string|null
     */
    public function getEndDate()
    {
        $carbonPeriod = $this->carbonPeriod();

        if (!is_null($carbonPeriod)) {
            return $carbonPeriod->getEndDate()->toDateString();
        }
    }

    /**
     * Returns the date interval.
     *
     * @return string|null
     */
    public function getDateInterval()
    {
        $carbonPeriod = $this->carbonPeriod();

        if (!is_null($carbonPeriod)) {
            return $carbonPeriod->getDateInterval();
        }
    }

    /**
     * Returns the start date.
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->getStartDate();
    }
}
