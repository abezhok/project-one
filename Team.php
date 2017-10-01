<?php

require_once('TypeSalary.php');

class Team implements TypeSalary
{
    private $name;

    private $employees = [];

    public function __construct($name)
    {
        $this->setName($name);
    }

    /**
     * @return array
     */
    public function getEmployees()
    {
        return $this->employees;
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

        return $this;
    }

    public function calculateSalary()
    {
        $employees = $this->getEmployees();

        $totalSalary = 0;

        /* @var Employee $employee */
        foreach ($employees as $employee) {
            $salary = $employee->calculateSalary();
            $totalSalary += $salary;
        }

        return $totalSalary;
    }
}