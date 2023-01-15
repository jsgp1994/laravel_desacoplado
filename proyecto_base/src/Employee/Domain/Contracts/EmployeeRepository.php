<?php

namespace Src\Employee\Domain\Contracts;

use Src\Employee\Domain\EmployeeId;
use Src\Employee\Domain\EmployeeEntity;

interface EmployeeRepository
{
    public function search(EmployeeId $employeeId): array;
}