<?php

abstract class Employee
{
    protected $name;
    protected $secondName;
    protected $patronymic;
    protected $salary;

    public function __construct(string $name, string $secondName, string $patronymic, SalaryInterface $salary)
    {
        $this->name = $name;
        $this->secondName = $secondName;
        $this->patronymic = $patronymic;
        $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary->getSalary();
    }

}
