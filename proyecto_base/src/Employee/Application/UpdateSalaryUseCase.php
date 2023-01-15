<?php

namespace Src\Employee\Application;

use Src\Employee\Domain\EmployeeId;
use Src\Employee\Domain\Hour;
use Src\Employee\Domain\Contracts\EmployeeRepository;

final class UpdateSalaryUseCase
{

    private $finder;

    public function __construct(EmployeeRepository $repository)
    {
        $this->repository = $repository;
        $this->finder = new FindEmployeeUseCase($this->repository);
    }

    public function execute(int $id, int $hoursWorked)
    {
        $employee = $this->finder->execute($id);
        $employee->calculateSalary(new Hour($hoursWorked));

        $this->repository->save($employee);

    }
}