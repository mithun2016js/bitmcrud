<?php
use App\Car\Car;
include '../../vendor/autoload.php';
$object = new Car();
//$object->store();
$object->setData($_POST);
$object->store();
