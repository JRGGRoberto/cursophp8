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


// Não importa se já vem formatado ou não
$document = new \Bissolli\ValidadorCpfCnpj\CPF('123.456.789.00');

// Verifica se é um número válido de CPF
// Retorna true/false
var_dump($document->isValid());