<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    public function __construct()
    {
        parent::__construct(2, 50);
    }

    public function addVehicle($vehicle):string
    {
        if($vehicle === 'Bike' || $vehicle === 'Skateboard')
        {
            $this->currentVehicle[] = $vehicle;
            return 'Ok, you are autorised !';
        }else{
            return 'Stop ! You are not autorised !';
        }
    }
    
}
