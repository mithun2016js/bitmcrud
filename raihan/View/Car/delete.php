<?php
use App\Car\Car;
include '../../vendor/autoload.php';
$object = new Car();
$oneData=$object->setData($_GET)->delete();
