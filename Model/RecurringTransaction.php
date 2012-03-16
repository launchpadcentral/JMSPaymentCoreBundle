<?php
namespace JMS\Payment\CoreBundle\Model;

use JMS\Payment\CoreBundle\Model\RecurringTransactionInterface;

abstract class RecurringTransaction implements RecurringTransactionInterface
{
    protected $amount;
    protected $billingFrequency;
    protected $billingInterval;
    protected $creditCardProfile;
    protected $processorCardId;
    protected $processorCustomerId;
    protected $currency;
    protected $date;
    protected $description;
    protected $processor;
    protected $processorId;
    protected $responseData;


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

    public function setCreditCardProfile(CreditCardProfileInterface $creditCardProfile)
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

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setProcessor($processor)
    {
        $this->processor = $processor;
    }

    public function getProcessor()
    {
        return $this->processor;
    }

    public function setProcessorId($processorId)
    {
        $this->processorId = $processorId;
    }

    public function getProcessorId()
    {
        return $this->processorId;
    }

    public function addResponseData($responseData)
    {
        $this->responseData[] = $responseData;
    }

    public function getResponseData()
    {
        return $this->responseData;
    }
}
