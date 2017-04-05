<?php

class Team
{
    private $name;
    private $listOfDevelopers = array();

    public function __construct(String $name)
    {
        $this->name = $name;
    }

    public function getTeamSalary()
    {
        $teamSalary = 0;
        foreach ($this->listOfDevelopers as $developer) {
            $teamSalary += $developer->getSalary();
        }
        return $teamSalary;
    }

    public function addDeveloper(Developer $developer)
    {
        array_push($this->listOfDevelopers, $developer);
    }

}