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

use \sistema\Entety\Mensagem;

// usando o encadeamento
echo (new Mensagem())->sucesso('Okay')->reinderizar();

//usando métodos mágicos __toString()
echo (new Mensagem())->alerta('Alerta!!!');
