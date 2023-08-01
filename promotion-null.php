<?php
class UserProfile
{
    public $username = "Dilshad";
}
class Transaction
{
    public ?UserProfile $user = null;
    public function __construct(
        private float $amount = 0,
        private string $description = "This is an sample description"
    ) {
    }

    public function getTr(): string
    {
        return "Amount : $this->amount Description : $this->description";
    }

    public function getUser(): Transaction
    {
        return $this;
    }
}


$transaction = new Transaction();
var_dump($transaction?->user?->username);
