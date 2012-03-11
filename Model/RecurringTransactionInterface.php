<?php
namespace JMS\Payment\CoreBundle\Model;

use JMS\Payment\CoreBundle\Model\PlanInterface;

interface RecurringTransactionInterface
{
    function setAmount($amount);

    function getAmount();

    function setCreditCardProfile(CreditCardProfileInterface $creditCardProfile);

    function getCreditCardProfile();

    function setCurrency($currency);

    function getCurrency();

    function setDescription($description);

    function getDescription();

    function setEndDate($endDate);

    function getEndDate();

    function setExtendedData($extendedData);

    function getExtendedData();

    function setHorizon($horizon);

    function getHorizon();

    function setPlan(PlanInterface $plan);

    function getPlan();

    function setProcessor($processor);

    function getProcessor();

    function setProcessorId($processorId);

    function getProcessorId();

    function addResponseData($responseData);

    function getResponseData();

    function setStartDate($startDate);

    function getStartDate();
}
