<?php

class HourlySalary implements TypeSalary
{
    private $amount;
    private $hours;

    public function __construct($amount, $hours)
    {
        $this->setAmount($amount);
        $this->setHours($hours);
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return mixed
     */
    public function getHours()
    {
        return $this->hours;
    }

    /**
     * @param mixed $hours
     */
    public function setHours($hours)
    {
        $this->hours = $hours;
    }

    public function calculateSalary()
    {
        $amount = $this->getAmount();
        $hours = $this->getHours();

        $salary = $amount * $hours;

        return $salary;
    }
}