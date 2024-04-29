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

<<<<<<< HEAD


function validarEmail(string $email):bool
=======
 

/**
 * Valida CPF 
 * ref# https://www.macoratti.net/alg_cpf.htm
 * @param string CPF 9 digitos
 * @return bool
 */
function validaCpf(string $cpf): bool
{
    $cpf = limparNumero($cpf);
    
    if (mb_strlen($cpf) != 11 or preg_match('/(\d)\1{10}/', $cpf)) {
        return false;
    }
    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$c] != $d) {
            return false;
        }
    }
    return true;
}

function limparNumero(string $numero): string
{
    return preg_replace('/[^0-9]/', '', $numero);
}

 /**
 * Gera url amigável
 * @param string $string
 * @return string slug
 */
function slug(string $string): string
{
    $mapa['a'] = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]/?¨|;:.,\\\'<>°ºª  ';

    $mapa['b'] = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr                                 ';
    $slug = strtr(utf8_decode($string), utf8_decode($mapa['a']), $mapa['b']);
    $slug = strip_tags(trim($slug));
    $slug = str_replace(' ', '-', $slug);
    $slug = str_replace(['-----', '----', '---', '--', '-'], '-', $slug);

    return strtolower(utf8_decode($slug));
}


 function dataAtual(): string
 {
    $diaMes = date('d');
    $diaSemana = date('w');
    $mes = date('n') - 1;
    $ano = date('Y');
    
    $nomesDiasDaSemana = ['domingo', 'segunda-feira','terça-feira','quarta-feira','quinta-feira','sexta-feira','sabádo'];
    
    $nomesDosMeses = ['janeiro', 'fevereiro','março','abril','maio','junho',
'julho','agosto','setembro','outubro','novembro','dezembro'];
    
    $dataFormatada = $nomesDiasDaSemana[$diaSemana].', '.$diaMes.' de '.$nomesDosMeses[$mes].' de '.$ano;
    
    return $dataFormatada;    
 }

 function url(string $url): string
 {
    $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');
    $ambiente = ($servidor == 'docker.localhost' ? URL_DESENVOLVIMENTO : URL_PRODUCAO);

    if(str_starts_with($url, '/')){
        return $ambiente.$url;
    }
    return $ambiente.'/'.$url;
 }

 function localhost(): bool
 {
    $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');

    if($servidor == 'docker.localhost'){
        return true;
    }
    return false;
 }

 function validarUrlComFiltro(string $url): bool
 {
     return filter_var($url, FILTER_VALIDATE_URL);
 }
 

/**
 * Validação de URL
 * @param string $url 
 * @return bool  
 */
function validarUrl(string $url): bool
{
    if(mb_strlen($url) < 10){
        return false;
    }

    if(!str_contains($url, '.')){
        return false;
    }

    if(str_contains($url, 'http://') or str_contains($url, 'https://')){
        return true;
    }
    return false;
}

/**
 * Validação de e-mail
 * @param string $email 
 * @return bool  
 */
function validarEmail(string $email): bool
>>>>>>> 25b569af38e13a5a9e21b1b334d37ce460e4e06c
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}


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

    if ($segundos <= 60) {
        return 'agora';
    } elseif ($minutos <= 60) {
        return $minutos == 1 ? 'há 1 minuto' : 'há ' . $minutos . ' minutos';
    } elseif ($horas <= 24) {
        return $horas == 1 ? 'há 1 hora' : 'há ' . $horas . ' horas';
    } elseif ($dias <= 7) {
        return $dias == 1 ? 'há 1 dia' : 'há ' . $dias . ' dias';
    } elseif ($semanas <= 4) {
        return $semanas == 1 ? 'há 1 semana' : 'há ' . $semanas . ' semanas';
    } elseif ($meses <= 12) {
        return $meses == 1 ? 'há 1 mês' : 'há ' . $meses . ' meses';
    } else {
        return $anos == 1 ? 'há 1 ano' : 'há ' . $anos . ' anos';
    }
}

function formatarValor(float $valor = 0): string
{
    return number_format($valor, 2, ',', '.');
}

function formatarNumero(string $numero = null): string
{
    return number_format($numero ? $numero : 0, 0, '.', '.');
}

function saudacao(): string
{
    $hora = date('H');

    if ($hora >= 0 && $hora <= 5) {
        $saudacao = 'boa madrugada';
    } elseif ($hora >= 6 && $hora <= 12) {
        $saudacao = 'bom dia';
    } elseif ($hora >= 13 && $hora <= 18) {
        $saudacao = 'boa tarde';
    } else {
        $saudacao = 'boa noite';
    }

/*
    switch ($hora){
      case  ($hora >= 0 && $hora <= 5):
        $saudacao = 'boa madrugada';
        break;
      case ($hora >= 6 && $hora <= 12):
        $saudacao = 'bom dia';
        break;
      case ($hora >= 13 && $hora <= 18):
        $saudacao = 'boa tarde';
        break;
      default: 
        $saudacao = 'boa noite';
    }
*/

/*
    $saudacao = match(true){
        $hora >= 0  && $hora <= 5  => 'boa madrugada',
        $hora >= 6  && $hora <= 12 => 'bom dia',
        $hora >= 13 && $hora <= 18 => 'boa tarde',
        default =>   'boa noite'
    };
    */
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
    if (mb_strlen($textoLimpo) <= $limite) {
        return $textoLimpo;
    }

    $resumirTexto = mb_substr($textoLimpo, 0, mb_strrpos(mb_substr($textoLimpo, 0, $limite), ''));
    return $resumirTexto . $continue;
}
