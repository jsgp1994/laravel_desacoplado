<?php

namespace Src\Employee\Application;

use Src\Employee\Domain\EmployeeId;
use Src\Employee\Domain\EmployeeEntity;
use Src\Employee\Domain\Contracts\EmployeeRepository;

final class FindEmployeeUseCase
{

    private $repository;

    public function __construct(EmployeeRepository $repository)
    {
        $this->repository = $repository;
    }

    public function execute(int $id): ?EmployeeEntity
    {
        $datos = $this->repository->search(new EmployeedId($id));
        $this->ensureExists($datos);

        return EmployeeEntity::fromArray($datos);
    }

    private function ensureExists(?array $datos): void
    {
        if(empty($datos))
        {

        }
    }

}