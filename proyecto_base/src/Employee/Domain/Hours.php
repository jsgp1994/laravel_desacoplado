<?php

namespace Src\Employee\Domain;
use Src\Employee\Domain\IncorrectHours;

final class Hour
{
    private $hours;

    public function __construct(int $hours)
    {
        $this->hour = $this->setHours($hours);
    }

    public function getHours(): int
    {
        return $this->$hours;
    }

    private function setHours(int $hours): void
    {
        if ($hours <= 0){
            throw new IncorrectHours("");
        }
        $this->hours = $hours;
    }
}