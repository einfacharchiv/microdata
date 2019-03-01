<?php

namespace einfachArchiv\Microdata\Enumerations;

class Enumeration
{
    /**
     * The members.
     *
     * @var array
     */
    protected $members = [];

    /**
     * The member.
     *
     * @var string
     */
    protected $member;

    /**
     * @param string $member The member
     */
    public function __construct($member)
    {
        $this->member = $member;
    }

    /**
     * Returns the value.
     *
     * @return string|null
     */
    public function getValue()
    {
        return in_array($this->member, $this->members) ? $this->member : null;
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
