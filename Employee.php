<?php

abstract class Employee implements TypeSalary
{
    private $fullname;

    private $salary;

    public function __construct($fullname, $salary)
    {
        $this->setFullname($fullname);
        $this->setSalary($salary);
    }

    /**
     * @param string $fullname
     */
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }



    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function calculateSalary()
    {
        /* @var TypeSalary $salary */
        $salary = $this->getSalary();
        return $salary->calculateSalary();
    }

}