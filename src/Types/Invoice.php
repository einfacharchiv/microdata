<?php

namespace einfachArchiv\Microdata\Types;

use einfachArchiv\Microdata\DataTypes\DateTime;
use einfachArchiv\Microdata\DataTypes\Duration;
use einfachArchiv\Microdata\Enumerations\PaymentMethod;
use einfachArchiv\Microdata\Enumerations\PaymentStatusType;

class Invoice extends Thing
{
    /**
     * Returns the billing period.
     *
     * @return string|null
     */
    public function getBillingPeriod()
    {
        return new Duration($this->getPropertyByName('billingPeriod'));
    }

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
     * Returns the customer.
     *
     * @return Organization|Person|null
     */
    public function getCustomer()
    {
        return $this->getPropertyByName('customer');
    }

    /**
     * Returns the payment due date.
     *
     * @return DateTime|null
     */
    public function getPaymentDueDate()
    {
        return new DateTime($this->getPropertyByName('paymentDueDate') ?? $this->getPropertyByName('paymentDue'));
    }

    /**
     * Returns the payment method.
     *
     * @return PaymentMethod|null
     */
    public function getPaymentMethod()
    {
        return new PaymentMethod($this->getPropertyByName('paymentMethod'));
    }

    /**
     * Returns the payment method id.
     *
     * @return string|null
     */
    public function getPaymentMethodId()
    {
        return $this->getPropertyByName('paymentMethodId');
    }

    /**
     * Returns the payment status.
     *
     * @return PaymentStatusType|null
     */
    public function getPaymentStatus()
    {
        return new PaymentStatusType($this->getPropertyByName('paymentStatus'));
    }

    /**
     * Returns the provider.
     *
     * @return Organization|Person|null
     */
    public function getProvider()
    {
        return $this->getPropertyByName('provider');
    }

    /**
     * Returns the total payment due.
     *
     * @return MonetaryAmount|PriceSpecification|null
     */
    public function getTotalPaymentDue()
    {
        return $this->getPropertyByName('totalPaymentDue');
    }
}
