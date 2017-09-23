<?php

class Controller
{
    public function getTeamSalary()
    {
        
    }

    public function doTheTask()
    {
        $teamX = new Team('x');

        $designer = new Designer('Kim Chen-Un');

        $teamX->addEmployee($designer);
    }
}