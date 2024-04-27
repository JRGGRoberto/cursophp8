<?php
echo '<h1>Arquivo Index</h1>';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'sistema/configuracao.php';
include_once 'sistema/helpers.php';
/* 
echo saudacao();
echo '<br>';
$texto = '<h1>Texto para resumir 123456789 123456789 123456789</h1>';
echo resumirTexto($texto, 20);
echo '<hr>';
echo formatarValor(21231231);
echo '<hr>';
echo formatarNumero(1111111);

echo '<hr>';
$data = date('d/m/Y H:i:s');


echo contarTempo('2024-04-26 16:38:05');
*/

/*
$var = $_GET['var'];

echo $var. '<br>';
var_dump(validarUrl($var));
echo '<pre>';
var_dump($_SERVER);
echo '</pre>';*/
//var_dump(localhost());
echo url('/admin');
echo '<hr><a href="../" class="btn btn-primary btn-sm">Voltar</a>';