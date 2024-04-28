<?php
echo '<h1>Arquivo Index</h1>';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'sistema/configuracao.php';
include_once 'sistema/helpers.php';

echo slug("   Adão \"Negro\" - '2022'     ").'<hr>';
echo slug("Avatar       2: O Caminho da Água").'<hr>';
echo slug("Não! Não Olhe!").'<hr>';
echo slug("Sonic 2 - O Filme").'<hr>';
echo slug("NOVA SÉRIE NO DISNEY+!").'<hr>';
echo slug("100 Melhores filmes").'<hr>';
echo slug("teste!@###$%6¨%%¨,*.:/?\|,");