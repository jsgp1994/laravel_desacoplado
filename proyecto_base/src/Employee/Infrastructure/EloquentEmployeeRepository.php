<?php

namespace Src\Employee\Infrastructure;
use App\Models\Employee;

final class EloquentEmployeeRepository implements EmployeeRepository
{
    private $model;

    public function __construct()
    {
        $this->model = new Employee();
    }

    public function search(EmployeeId $employeeId): array
    {
        return $this->model->finddOrFail($employeeId->id())->toArray();
    }

    public function save(EmployeeEntity $employeeEntity)
    {
        $this->model->fill($employeeEntity->toArray());
        $this->model->save();
    }

}