<?php
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/
require_once './sistema/configuracao.php';
include './sistema/Entity/Mensagem.php';
include './sistema/Entity/Controller.php';

use \sistema\Entity\Controller;

$controler = new Controller();
var_dump($controler);