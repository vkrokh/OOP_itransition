<?php

class HourlySalary implements SalaryInterface
{
    private $rate;
    private $hours;

    public function __construct(int $rate, int $hours)
    {
        $this->rate = $rate;
        $this->hours = $hours;
    }

    public function getSalary()
    {
        return $this->rate * $this->hours;
    }
}