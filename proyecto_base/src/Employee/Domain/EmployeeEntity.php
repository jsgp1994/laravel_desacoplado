<?php

namespace Src\Employee\Domain;

final class EmployeeEntity{

    private $id;
    private $hoursWorker;
    private $salary;
    private $pricePerHour;


    public function __construct(EmployeeId $id, Hour $hoursWorker)
    {
        $this->id = $id;
        $this->$hoursWorker = $hoursWorker;
    }

    public static function fromArray(array $datos): self
    {
        return new self(
            new EmployeeId($datos['id']),
            new Hour($datos['$hoursWorker'])
        );
    }

    public function calculateSalary(Hour $hoursWorker): void
    {
        $this->salary = $this->$pricePerHour * $hoursWorker->getHour();
    }

    public function toArray()
    {
        return [
            'id' => $this->id,
            'hoursWorker' => $this->$hoursWorker,
            'salary' => $this->salary,
            'pricePerHour' => $this->pricePerHour
        ];
    }

}