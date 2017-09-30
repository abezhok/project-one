<?php

class Designer extends Employee
{
    public function __construct($fullname, $salary)
    {
        $fullname = 'Designer ' . $fullname;

        parent::__construct($fullname, $salary);
    }
}