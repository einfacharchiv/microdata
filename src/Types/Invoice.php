<?php

namespace einfachArchiv\Microdata\Types;

use einfachArchiv\Microdata\DataTypes\DateTime;
use einfachArchiv\Microdata\Enumerations\PaymentStatusType;

class Invoice extends Thing
{
    /**
     * Returns the confirmation number.
     *
     * @return string|null
     */
    public function getConfirmationNumber()
    {
        return $this->getPropertyByName('confirmationNumber');
    }

    /**
     * Returns the payment due date.
     *
     * @return string|null
     */
    public function getPaymentDueDate()
    {
        return (new DateTime($this->getPropertyByName('paymentDueDate')))->toDateString();
    }

    /**
     * Returns the total payment due.
     *
     * @return array|null
     */
    public function getTotalPaymentDue()
    {
        $property = $this->getPropertyByName('totalPaymentDue');

        if ($property instanceof MonetaryAmount || $property instanceof PriceSpecification) {
            return $property->getAmount();
        }
    }

    /**
     * Returns the payment status.
     *
     * @return string|null
     */
    public function getPaymentStatus()
    {
        return (new PaymentStatusType($this->getPropertyByName('paymentStatus')))->getValue();
    }

    /**
     * Returns the provider.
     *
     * @return mixed
     */
    public function getProvider()
    {
        $property = $this->getPropertyByName('provider');

        if ($property instanceof Organization || $property instanceof Person) {
            return $property;
        }
    }
}
