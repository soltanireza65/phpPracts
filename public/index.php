<?php
require __DIR__ . '/../vendor/autoload.php';

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidFactory;
use App\models\Car;


// echo '<pre>';
// print_r($_SERVER['HOSTNAME']);
// echo '</pre>';

// $uuidFactory = new UuidFactory();

// echo $uuidFactory->uuid4();

$car = new Car(var: "");


// const NAME = "";