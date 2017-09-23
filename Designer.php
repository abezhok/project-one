<?php

class Designer extends Employee
{
    public function __construct($fullname)
    {
        $fullname = 'Designer ' . $fullname;
        parent::__construct($fullname);
    }

    public function calculateSalary()
    {

    }
}