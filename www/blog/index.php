<?php
echo '<h1>Arquivo Index</h1>';
echo 'Hello World!<br>';

require_once 'sistema/configuracao.php';
include_once 'sistema/helpers.php';
 
echo saudacao();
echo '<br>';
echo resumirTexto('Texto para resumir 123456789 123456789 123456789', 20);



