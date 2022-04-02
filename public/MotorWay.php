<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    public function __construct()
    {
        parent::__construct(4, 30);
    }

    public function addVehicle($vehicle):string
    {
        if($vehicle === 'Bike' || $vehicle  === 'Skateboard')
        {
            return 'Stop! You are not autorised !';
        }else{
            $this->currentVehicle[] = $vehicle;
            return 'Ok, you are autorised !'; 
        }     
    }

  
}

