<?php

namespace App\Model\Repository;

use App\Model\Entity\Car;
use Symplefony\Model\Repository;

class CarRepository extends Repository
{
    protected function getTableName(): string
    {
        return 'cars';
    }

    /** Crud : create */
    // TODO: Faire le create

    /** Crud : read */
    public function getAll(): array
    {
        return $this->readAll(Car::class);
    }

    /* cRud: Read un item par son id */
    public function getById(int $id): ?Car
    {
        return $this->readById(Car::class, $id);
    }
}
