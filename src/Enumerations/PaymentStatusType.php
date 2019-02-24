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
        'PaymentAutomaticallyApplied',
        'PaymentComplete',
        'PaymentDeclined',
        'PaymentDue',
        'PaymentPastDue',
    ];
}
