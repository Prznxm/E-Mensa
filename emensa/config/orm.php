<?php
use Illuminate\Database\Capsule\Manager;

$capsule = new Manager;
$capsule->addConnection([
    "driver" => "mysql",
    "host" => "localhost",
    "database" => "emensawerbeseite",
    "username" => "root",
    "password" => "1234"
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();