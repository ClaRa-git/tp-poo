<?php

namespace App\Model\Entity;

use Symplefony\Model\Entity;

class Car extends Entity
{
    protected string $label;
    public function getLabel(): string
    {
        return $this->label;
    }
    public function setLabel(string $label): self
    {
        $this->label = $label;
        return $this;
    }

    protected int $seats;
    public function getSeats(): int
    {
        return $this->seats;
    }
    public function setSeats(int $seats): self
    {
        $this->seats = $seats;
        return $this;
    }

    protected int $energy;
    public function getEnergy(): int
    {
        return $this->energy;
    }
    public function setEnergy(int $energy): self
    {
        $this->energy = $energy;
        return $this;
    }

    protected string $plate_number;
    public function getPlateNumber(): string
    {
        return $this->plate_number;
    }
    public function setPlateNumber(string $plate_number): self
    {
        $this->plate_number = $plate_number;
        return $this;
    }

    protected float $price_day;
    public function getPriceDay(): float
    {
        return $this->price_day;
    }
    public function setPriceDay(float $price_day): self
    {
        $this->price_day = $price_day;
        return $this;
    }

    protected float $price_distance;
    public function getPriceDistance(): float
    {
        return $this->price_distance;
    }
    public function setPriceDistance(float $price_distance): self
    {
        $this->price_distance = $price_distance;
        return $this;
    }

    protected ?string $image;
    public function getImage(): ?string
    {
        return $this->image;
    }
    public function setImage(string $image): self
    {
        $this->image = $image;
        return $this;
    }
}
