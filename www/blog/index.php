<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 with Docker</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php
echo '<h1>Arquivo Index</h1>';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'sistema/configuracao.php';
include_once 'sistema/helpers.php';
include './sistema/Entity/Mensagem.php';

$msg = new Mensagem();
echo $msg->sucesso('Mensagem de sucesso')->reinderizar();
echo $msg->erro('Mensagem de sucesso')->reinderizar();
echo $msg->alerta('Mensagem de sucesso')->reinderizar();
echo $msg->informa('Mensagem de sucesso')->reinderizar();
echo '<hr>';
var_dump($msg);