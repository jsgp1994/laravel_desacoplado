<?php

namespace Src\Employee\Domain;
use Src\Employee\Domain\idNotFound;

final class EmployeeId
{
    private $id;

    public function __construct(int $id)
    {
        $this->setId($id);
    }

    public function id()
    {
        return $this->id;
    }

    private function setId (int $id): void
    {
        if($id < 0){
            throw new idNotFound($id);
        }
        $this->id = $id;
    }
}