<?php
namespace JMS\Payment\CoreBundle\Model;

use JMS\Payment\CoreBundle\Model\RecurringTransactionInterface;

abstract class RecurringTransaction implements RecurringTransactionInterface
{
    protected $amount;
    protected $creditCardProfile;
    protected $currency;
    protected $description;
    protected $endDate;
    protected $extendedData;
    protected $horizon;
    protected $plan;
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

    public function setPlan($plan)
    {
        $this->plan = $plan;
    }

    public function getPlan()
    {
        return $this->plan;
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

    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }
}
