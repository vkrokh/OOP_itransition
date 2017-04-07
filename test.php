<?php

require_once 'Developers/Employee.php';
require_once 'Developers/Designer.php';
require_once 'Developers/FrontDeveloper.php';
require_once 'Developers/SeniorDeveloper.php';
require_once 'Developers/MiddleDeveloper.php';
require_once 'Salary/SalaryInterface.php';
require_once 'Salary/FixedSalary.php';
require_once 'Salary/HourlySalary.php';
require_once 'Team.php';

$team = new Team("X");
$team->addDeveloper(new MiddleDeveloper('Test', 'Nikolay', 'Petrovich', new FixedSalary(1000)));
$team->addDeveloper(new SeniorDeveloper('Sadin', 'Andrey', 'Nikolaevich', new HourlySalary(10, 60)));
$team->addDeveloper(new Designer('Manova', 'Anna', 'Aleksandrovna', new FixedSalary(3000)));
$team->addDeveloper(new MiddleDeveloper('Abdula', 'Rahim', 'Andreivich', new FixedSalary(1000)));
$team->addDeveloper(new FrontDeveloper('Kalko', 'Julia', 'Sergeivna', new HourlySalary(120, 5)));
echo 'Full salary: ' . $team->getTeamSalary() . ' rubles.';