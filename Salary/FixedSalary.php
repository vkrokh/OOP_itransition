<?php

class FixedSalary implements SalaryInterface
{
    private $salary;

    public function __construct(int $salary)
    {
        $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }

}