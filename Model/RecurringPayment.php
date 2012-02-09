<?php
namespace JMS\Payment\CoreBundle\Model;

abstract class RecurringPayment
{
    private $amount;
    private $creditCardProfile;
    private $extraData;
    private $billingFrequency;
    private $billingInterval;
    private $processor;
    private $processorId;
    private $responseData;


    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setBillingInterval($billingInterval)
    {
        $this->billingInterval = $billingInterval;
    }

    public function getBillingInterval()
    {
        return $this->billingInterval;
    }

    public function setBillingFrequency($billingFrequency)
    {
        $this->billingFrequency = $billingFrequency;
    }

    public function getBillingFrequency()
    {
        return $this->billingFrequency;
    }

    public function setCreditCardProfile(CreditCardProfileInterface $creditCardProfile)
    {
        $this->creditCardProfile = $creditCardProfile;
    }

    public function getCreditCardProfile()
    {
        return $this->creditCardProfile;
    }

    public function setExtraData($extraData)
    {
        $this->extraData = $extraData;
    }

    public function getExtraData()
    {
        return $this->extraData;
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
