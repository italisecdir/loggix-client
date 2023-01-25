<?php
require_once __DIR__ . "/../vendor/autoload.php";
use Italisecdir\LoggixClient\Loggix;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();
function env($key){
    return $_ENV[$key];
}
Loggix::debug("Funciona");