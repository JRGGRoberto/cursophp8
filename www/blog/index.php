<?php
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/
require 'vendor/autoload.php';
require_once './sistema/configuracao.php';
use sistema\Entity\Helpers;

echo SITE_DESCRICAO;
echo Helpers::saudacao() .', '. Helpers::dataAtual() ;
