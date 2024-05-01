<?php
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/
require_once './sistema/configuracao.php';
include './sistema/Entity/Helpers.php';

echo sistema\Entity\Helpers::dataAtual();