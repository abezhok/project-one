<?php

require_once('Employee.php');

class BackendDeveloper extends Employee
{
    private $qualification;

    public function __construct($fullname, $salary, $qualification)
    {
        $this->setQualification($qualification);

        parent::__construct($fullname, $salary);
    }

    public function setQualification($qualification)
    {
        $qualification = strtolower($qualification);

        if ($qualification == 'middle' || $qualification == 'senior') {
            $this->qualification = $qualification;
        }
    }
}