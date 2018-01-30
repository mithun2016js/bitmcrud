<?php
use App\Car\Car;
include '../../vendor/autoload.php';
$object = new Car();
$onedata= $object->setData($_GET)->trash();