<?php

class Controller
{
    public function getTeamSalary()
    {
        
    }

    public function doTheTask()
    {
        $teamX = new Team('x');

        $designer = new Designer('Kim Chen-Un', new FixedSalary(3000));

        $seniorDev = new BackendDeveloper('Kim Ir-Sen', new HourlySalary(10, 60), 'senior');

        $middleDev1 = new BackendDeveloper('Andrey Tsymbalist', new FixedSalary(1000), 'middle');

        $middleDev2 = new BackendDeveloper('Alexander Bezhok', new FixedSalary(1000), 'middle');

        $frontendDev = new FrontendDeveloper('Bogdan Mamaev', new HourlySalary(5, 120));

        $teamX
            ->addEmployee($designer)
            ->addEmployee($seniorDev)
            ->addEmployee($middleDev1)
            ->addEmployee($middleDev2)
            ->addEmployee($frontendDev);
        $teamSalary = $teamX->calculateSalary();
        return $teamSalary;
    }
}