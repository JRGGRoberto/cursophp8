<?php

/**
 * @author JRoberto Góes Gomes
 * 
 */

 class Mensagem 
 {
    private $texto;
    private $css;

    public function reinderizar() : string 
    {
        return $this->texto = $this->filtrar('<h1>mensagem de teste</h1>');
    }

    private function filtrar(string $mensagem): string
    {
       return filter_var(strip_tags($mensagem), FILTER_SANITIZE_SPECIAL_CHARS) ;
    }
  }
  