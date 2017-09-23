<?php

abstract class Employee implements TypeSalary
{
    private $fullname;

    public function __construct($fullname)
    {
        $this->setFullname($fullname);
    }

    /**
     * @param string $fullname
     */
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;
    }

}