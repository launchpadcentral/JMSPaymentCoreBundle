<?php
namespace JMS\Payment\CoreBundle\Model;

use JMS\Payment\CoreBundle\Model\RecurringInstructionInterface;

class RecurringInstruction implements RecurringInstructionInterface
{
    protected $amount;
    protected $billingFrequency;
    protected $billingInterval;
    protected $creditCardId;
    protected $creditCardProfile;
    protected $customer;
    protected $customerId;
    protected $currency;
    protected $description;
    protected $endDate;
    protected $extendedData;
    protected $horizon;
    protected $name;
    protected $startDate;

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setBillingFrequency($billingFrequency)
    {
        $this->billingFrequency = $billingFrequency;
    }

    public function getBillingFrequency()
    {
        return $this->billingFrequency;
    }

    public function setBillingInterval($billingInterval)
    {
        $this->billingInterval = $billingInterval;
    }

    public function getBillingInterval()
    {
        return $this->billingInterval;
    }

    public function setCreditCardId($creditCardId)
    {
        $this->creditCardId = $creditCardId;
    }

    public function getCreditCardId()
    {
        return $this->creditCardId;
    }

    public function setCreditCardProfile($creditCardProfile)
    {
        $this->creditCardProfile = $creditCardProfile;
    }

    public function getCreditCardProfile()
    {
        return $this->creditCardProfile;
    }

    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    public function getCurrency()
    {
        return $this->currency;
    }

    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }

    public function getCustomer()
    {
        return $this->customer;
    }

    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
    }

    public function getCustomerId()
    {
        return $this->customerId;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    public function setExtendedData($extendedData)
    {
        $this->extendedData = $extendedData;
    }

    public function getExtendedData()
    {
        return $this->extendedData;
    }

    public function setHorizon($horizon)
    {
        $this->horizon = $horizon;
    }

    public function getHorizon()
    {
        return $this->horizon;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setProviderPlanId($providerPlanId)
    {
        $this->providerPlanId = $providerPlanId;
    }

    public function getProviderPlanId()
    {
        return $this->providerPlanId;
    }

    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }
}
