<?php
echo '<h1>Arquivo Index</h1>';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'sistema/configuracao.php';
include_once 'sistema/helpers.php';
include './sistema/Entity/Mensagem.php';

$msg = new Mensagem();
echo '<pre>';
var_dump($msg);
echo '</pre>';