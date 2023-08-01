<?php
class Transaction
{
    private float $amount;

    public function __construct(float $amount = 0)
    {
        $this->amount = $amount;
    }

    public function applyDiscount(float $discount): Transaction
    {
        $this->amount -= $this->amount / 100 * $discount;
        return $this;
    }

    public function addTax(float $tax): Transaction
    {
        $this->amount += $this->amount / 100 * $tax;
        return $this;
    }

    public function getAmount()
    {
        return $this->amount;
    }
}


$Transaction1 = (new Transaction(100))
    ->applyDiscount(10)
    ->addTax(2)
    ->getAmount();

$Transaction2 = (new Transaction(150))
    ->applyDiscount(5)
    ->addTax(10)
    ->getAmount();
print_r($Transaction1);
echo "<br>";
print_r($Transaction2);
echo "<br />";
var_dump(new Transaction());