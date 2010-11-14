<?php

namespace Bundle\PaymentBundle\Entity;

interface FinancialTransactionInterface
{
    const STATE_CANCELED = 1;
    const STATE_FAILED = 2;
    const STATE_NEW = 3;
    const STATE_PENDING = 4;
    const STATE_SUCCESS = 5;
    
    const TRANSACTION_TYPE_APPROVE = 1;
    const TRANSACTION_TYPE_APPROVE_AND_DEPOSIT = 2;
    const TRANSACTION_TYPE_CREDIT = 3;
    const TRANSACTION_TYPE_DEPOSIT = 4;
    const TRANSACTION_TYPE_REVERSE_APPROVAL = 5;
    const TRANSACTION_TYPE_REVERSE_CREDIT = 6;
    const TRANSACTION_TYPE_REVERSE_DEPOSIT = 7;
    
    function getCredit();
    function getExtendedData();
    function getId();
    function getPayment();
    function getProcessedAmount();
    function getReasonCode();
    function getReferenceNumber();
    function getRequestedAmount();
    function getResponseCode();
    function getState();
    function getCreatedAt();
    function getUpdatedAt();
    function getTrackingId();
    function getTransactionType();
    function setExtendedData();
    function setProcessedAmount();
    function setReasonCode();
    function setReferenceNumber();
    function setResponseCode();
    function setState();
    function setTrackingId();
}