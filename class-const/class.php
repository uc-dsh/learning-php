<?php

namespace CLS;

class Transaction
{
    public const STATUS_PAID = "paid";
    public const STATUS_PENDING = "pending";
    public const STATUS_DECLINED = "declined";
    public const PAYMENT_STATUS = [
        self::STATUS_PAID => "Paid",
        self::STATUS_PENDING => "Pending",
        self::STATUS_DECLINED => "Declined"
    ];

    private string $status;

    public function __construct()
    {
        self::setStatus(self::STATUS_PENDING);
    }

    public function setStatus(string $status): self
    {
        if (!isset(self::PAYMENT_STATUS[$status])) {
            throw new \InvalidArgumentException("Status Does Not Exists");
        }
        $this->status = $status;
        return $this;
    }
}
