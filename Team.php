<?php

class Team implements TypeSalary
{
    private $name;

    private $employees = [];

    public function __construct($name)
    {
        $this->setName($name);
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function addEmployee(Employee $employee)
    {
        $this->employees[] = $employee;
    }

    public function calculateSalary()
    {

    }
}