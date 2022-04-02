<?php

abstract class HighWay
{
    protected array $currentVehicles = [];
    protected int $nbLane;
    protected int $maxSpeed;


//Constructor
public function __construct(int $nbLane, int $maxSpeed)
{
    $this->nbLane = $nbLane;
    $this->maxSpeed = $maxSpeed;
}

//New method
abstract function addVehicle($vehicle);

//Getters and Setters functions
public function getCurrentVehicles():array
{
    return $this->currentVehicles;
}

public function setCurrentVehicles(array $currentVehicles):void
{
    $this->currentVehicles = $currentVehicles;
}

public function getNbLane():int
{
    return $this->nbLane;
}

public function setNbLane(int $nbLane):void
{
    $this->nbLane = $nbLane;
}

public function getMaxSpeed():int
{
    return $this->maxSpeed;
}

public function setMaxSpeed(int $maxSpeed):void
{
    $this->maxSpeed = $maxSpeed;
}



}