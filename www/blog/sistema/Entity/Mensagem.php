<?php

/**
 * @author JRoberto Góes Gomes
 * 
 */

 class Mensagem 
 {
    private $texto;
    private $css;

    public function sucesso(string $mensagem) : Mensagem 
    {
        $this->css = 'alert alert-success';
        $this->texto = $this->filtrar($mensagem);
        return $this;
    }

    public function erro(string $mensagem) : Mensagem 
    {
        $this->css = 'alert alert-danger';
        $this->texto = $this->filtrar($mensagem);
        return $this;
    }

    public function alerta(string $mensagem) : Mensagem 
    {
        $this->css = 'alert alert-warning';
        $this->texto = $this->filtrar($mensagem);
        return $this;
    }

    public function informa(string $mensagem) : Mensagem 
    {
        $this->css = 'alert alert-primary';
        $this->texto = $this->filtrar($mensagem);
        return $this;
    }


    /**
     * Médotod responsjável pela reiderização das mensagens
     * @return string
     */
    public function reinderizar() : string 
    {
        return "<div class='{$this->css}'>{$this->texto}</div> ";
    }

    private function filtrar(string $mensagem): string
    {
       return filter_var(strip_tags($mensagem), FILTER_SANITIZE_SPECIAL_CHARS) ;
    }
  }
  