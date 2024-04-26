<?php
/**
 * PSR - PHP Strandards Recomendations
 * 
 * tipos de dados:
 *   string
 *   int
 *   float
 *   bool
 *   null
 * 
 * Para verificar o tipo de dado var_dump($var)
 * 
 * Para forçar que não haja conversão de tipos de maneira automática
 * declare(strict_types = 1);
 * Se isso for aplicado  ao chamar a função resumirTexto(1, 0) dará erro pois o primeiro parâmetro espera uma string
 * 
 * 
 * Constante:
 * declare()
 * 
 * Lista de funções PHP
 * https://www.php.net/manual/pt_BR/indexes.functions.php
 */
function saudacao(): string
{
    $hora = date('H');

    if($hora >= 0 && $hora <= 5){
        $saudacao = 'boa madrugada';
    } 
    elseif($hora >= 6 && $hora <= 12){
        $saudacao = 'bom dia';
    }
    elseif($hora >= 13 && $hora <= 18){
        $saudacao = 'boa tarde';
    } else {
        $saudacao = 'boa noite';
    }
    return $saudacao;
}

function resumirTexto(string $texto, int $limite, $continue = '...'): string
{
    $textoLimpo = trim($texto);
    if(mb_strlen($textoLimpo) <= $limite){
        return $textoLimpo;
    }
    
    $resumirTexto = mb_substr($textoLimpo, 0, mb_strrpos
    (mb_substr($textoLimpo, 0, $limite), ''));
    return 'Texto: '. $resumirTexto.$continue;

}


