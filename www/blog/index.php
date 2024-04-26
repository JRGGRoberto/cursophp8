<?php
echo '<h1>Arquivo Index</h1>';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'sistema/configuracao.php';
include_once 'sistema/helpers.php';
 
echo saudacao();
echo '<br>';
$texto = '<h1>Texto para resumir 123456789 123456789 123456789</h1>';
echo resumirTexto($texto, 20);
echo '<hr>';
echo formatarValor(21231231);
echo '<hr>';
echo formatarNumero(1111111);
