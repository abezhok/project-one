<?php

class Team
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function addEmployee()
    {

    }

    public function calculateSalary()
    {

    }
}