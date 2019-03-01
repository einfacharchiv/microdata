<?php

namespace einfachArchiv\Microdata\Enumerations;

class PaymentStatusType extends Enumeration
{
    /**
     * The members.
     *
     * @var array
     */
    protected $members = [
        'http://schema.org/PaymentAutomaticallyApplied',
        'http://schema.org/PaymentComplete',
        'http://schema.org/PaymentDeclined',
        'http://schema.org/PaymentDue',
        'http://schema.org/PaymentPastDue',
    ];
}
