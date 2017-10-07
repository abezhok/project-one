<?php

require_once('Team.php');
require_once('Designer.php');
require_once('BackendDeveloper.php');
require_once('FrontendDeveloper.php');
require_once('FixedSalary.php');
require_once('HourlySalary.php');

class Controller
{
    public function calculateSalary(Team $team)
    {
//        $employees[] = [
//            new Designer('Kim Chen-Un', new FixedSalary(3000)),
//            new BackendDeveloper('Kim Ir-Sen', new HourlySalary(10, 60), 'senior'),
//            new BackendDeveloper('Andrey Tsymbalist', new FixedSalary(1000), 'middle'),
//            new BackendDeveloper('Alexander Bezhok', new FixedSalary(1000), 'middle'),
//            new FrontendDeveloper('Bogdan Mamaev', new HourlySalary(5, 120)),
//        ];

//        $teamX = new Team('x');

        $employees = $team->getEmployees();

        $this->addEmployees($team, $employees);

        $teamSalary = $team->calculateSalary();

        return $teamSalary;
    }

    public function addEmployees(Team $team, $employees)
    {
        foreach ($employees as $employee) {
            $team->addEmployee($employee);
        }
    }
}

$controller = new Controller();
echo $controller->calculateSalary();