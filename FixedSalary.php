<?php

class FixedSalary implements TypeSalary
{
    private $amount;

    public function __construct($amount)
    {
        $this->setAmount($amount);
    }

    private function setAmount($amount)
    {
        $this->amount = $amount;
    }

    private function getAmount()
    {
        return $this->amount;
    }

    public function calculateSalary()
    {
        return $this->getAmount();
    }
}