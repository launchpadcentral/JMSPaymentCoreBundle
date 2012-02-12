<?php
namespace JMS\Payment\CoreBundle\Model;

use JMS\Payment\CoreBundle\Model\RecurringTransactionInterface;

abstract class RecurringTransaction implements RecurringTransactionInterface
{
    protected $amount;
    protected $creditCardProfile;
    protected $currency;
    protected $billingInterval;
    protected $billingFrequency;
    protected $description;
    protected $endDate;
    protected $extendedData;
    protected $horizon;
    protected $planId;
    protected $processor;
    protected $processorId;
    protected $responseData;
    protected $startDate;

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

    public function setExtendedData($extendedData)
    {
        $this->extendedData = $extendedData;
    }

    public function getExtendedData()
    {
        return $this->extendedData;
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

    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    public function setHorizon($horizon)
    {
        $this->horizon = $horizon;
    }

    public function getHorizon()
    {
        return $this->horizon;
    }

    public function setPlanId($planId)
    {
        $this->planId = $planId;
    }

    public function getPlanId()
    {
        return $this->planId;
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
