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
 * 
 * Docs 
 * https://docs.phpdoc.org/3.0/guide/references/phpdoc/index.html#phpdoc-reference
 */

function formatarValor(float $valor = 0): string 
{
    return number_format($valor, 2, ',','.');
}

function formatarNumero(string $numero = null): string
{
    return number_format($numero ? $numero : 0, 0,'.', '.');
}

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

/**
 * Corta o texto retornardo-o seu inicio limitando ao limite passado
 * Também remove tags html
 * 
 * @param string $texto        texto para cortar
 * @param int $limite          quantidade de caracteres
 * @param $continue opcional   se o texto for cortado é adicionado no final do texto
 * @return string              texto cortado se maior que limite
 */

function resumirTexto(string $texto, int $limite, $continue = '...'): string
{
    $textoLimpo = trim(strip_tags($texto));
    if(mb_strlen($textoLimpo) <= $limite){
        return $textoLimpo;
    }
    
    $resumirTexto = mb_substr($textoLimpo, 0, mb_strrpos
    (mb_substr($textoLimpo, 0, $limite), ''));
    return $resumirTexto.$continue;

}


