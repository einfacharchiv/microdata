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
        $member = basename($this->member);

        return in_array($member, $this->members) ? $member : null;
    }
}
