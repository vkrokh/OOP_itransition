<?php

class HourlySalary implements SalaryInterface
{
    private $rate;
    private $hours;
    private $salary;


    public function __construct(float $rate, int $hours)
    {
        $this->rate = $rate;
        $this->hours = $hours;
        $this->salary = $rate * $hours;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}