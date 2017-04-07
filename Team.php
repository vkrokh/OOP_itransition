<?php

class Team
{
    private $name;
    private $developers = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getTeamSalary()
    {
        $teamSalary = 0;
        foreach ($this->developers as $developer) {
            $teamSalary += $developer->getSalary();
        }
        return $teamSalary;
    }

    public function addDeveloper(Employee $developer)
    {
        array_push($this->developers, $developer);
    }

}