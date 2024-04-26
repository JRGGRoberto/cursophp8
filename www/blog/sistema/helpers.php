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

/**
 * Conta o tempo decorrido de uma data, passando uma data antiga
 * @param string $data
 * @return string 
 */
function contarTempo(string $data): string
{
    $agora = strtotime(date('Y-m-d H:i:s'));
    $tempo = strtotime($data);
    $diferenca = $agora - $tempo;

    $segundos = $diferenca;
    $minutos =  round($diferenca / 60);
    $horas =    round($diferenca / 3600);
    $dias =     round($diferenca / 86400);
    $semanas =  round($diferenca / 604800);
    $meses =    round($diferenca / 2416200);
    $anos =     round($diferenca / 29030400);

    if($segundos <= 60){
        return 'agora';
    } 
    elseif ($minutos <= 60){
        return $minutos == 1 ? 'há 1 minuto' : 'há '. $minutos . ' minutos';
    } 
    elseif ($horas <= 24){
        return $horas == 1 ? 'há 1 hora' : 'há '. $horas . ' horas';
    } 
    elseif ($dias <= 7){
        return $dias == 1 ? 'há 1 dia' : 'há '. $dias . ' dias';
    } 
    elseif ($semanas <= 4){
        return $semanas == 1 ? 'há 1 semana' : 'há '. $semanas . ' semanas';
    }
    elseif ($meses <= 12){
        return $meses == 1 ? 'há 1 mês' : 'há '. $meses . ' meses';
    } 
    else {
        return $anos == 1 ? 'há 1 ano' : 'há '. $anos . ' anos';
    }
}

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


