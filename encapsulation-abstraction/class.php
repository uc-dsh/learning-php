<?php
class Transaction
{
    private float $amount;

    function __construct(float $amount)
    {
        $this->amount = $amount;
    }

    public function setTransaction(self $transaction)
    {
        return "Transaction of :" . $transaction->amount . " <br /> Email Sent :" . $transaction->sendEmail();
    }

    public function sendEmail(): bool
    {
        return true;
    }
}
