<?php
namespace JMS\Payment\CoreBundle\Model;

use JMS\Payment\CoreBundle\Model\RecurringInstructionInterface;

class RecurringInstruction implements RecurringInstructionInterface
{
    protected $amount;
    protected $billingFrequency;
    protected $billingInterval;
    protected $creditCardProfile;
    protected $currency;
    protected $providerPlanId;

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

    public function setProviderPlanId($providerPlanId)
    {
        $this->providerPlanId = $providerPlanId;
    }

    public function getProviderPlanId()
    {
        return $this->providerPlanId;
    }
}
