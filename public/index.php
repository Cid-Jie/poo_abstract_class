<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    require_once 'MotorWay.php';
    require_once 'PedestrianWay.php';
    require_once 'ResidentialWay.php';

    $moto = new MotorWay();
    var_dump($moto);

    var_dump($moto->getCurrentVehicles());
    echo $moto->getNbLane() . " voies. <br>";
    echo $moto->getMaxSpeed() . " km/h. <br>";
    echo $moto->addVehicle('Bike') . '<br>';
    echo $moto->addVehicle('Car') . '<br>';
    
    $residential = new ResidentialWay();
    var_dump($residential);

    echo $residential->getNbLane() . " voies. <br>";
    echo $residential->getMaxSpeed() . " km/h. <br>";
    echo $residential->addVehicle('Bike') . '<br>';
    echo $residential->addVehicle('Car') . '<br>';

    $pedestrian = new PedestrianWay();
    var_dump($pedestrian);

    echo $pedestrian->getNbLane() . " voies. <br>";
    echo $pedestrian->getMaxSpeed() . " km/h. <br>";
    echo $pedestrian->addVehicle('Bike') . '<br>';
    echo $pedestrian->addVehicle('Car') . '<br>';











    ?>
</body>
</html>