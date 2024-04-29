<?php
echo '<h1>Arquivo Index</h1>';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'sistema/configuracao.php';
include_once 'sistema/helpers.php';

echo saudacao();
echo '<hr>';
<<<<<<< HEAD
echo formatarValor(21231231);
echo '<hr>';
echo formatarNumero(1111111);

echo '<hr>';
$data = date('d/m/Y H:i:s');


echo contarTempo('2024-04-26 16:38:05');
echo '<hr>';
*/
var_dump( validarEmail('j@com.br'));

echo '<hr><a href="../" class="btn btn-primary btn-sm">Voltar</a>';
=======
$cpf = '004.348.491-38';
echo 'O CPF '.$cpf. ' é ' . ( validaCPF($cpf) ? 'Válido' : 'inválido;');
>>>>>>> 25b569af38e13a5a9e21b1b334d37ce460e4e06c
