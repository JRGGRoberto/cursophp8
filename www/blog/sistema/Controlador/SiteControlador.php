<?php

namespace sistema\Controlador;

use sistema\Entity\Controller;

class SiteControlador extends Controller
{

  public function __construct()
  {
    parent::__construct('templates/site/views/');
  }

  public function index(): void
  {
    $view = 'index.html';
    $dados = [
      'titulo' => 'Título Teste - Index',
      'subtitulo' => 'Subtitulo Teste',
      'menu' => '[index] <a href="./fale">fale</a> <a href="./sobre">sobre</a>'
    ];
    echo  $this->template->reinderizar($view, $dados);
  }
  
  public function fale() : void 
  {
    $view = 'index.html';
    $dados = [
      'titulo' => 'Título Teste - Fale',
      'subtitulo' => 'Subtitulo Teste',
      'menu' => '<a href="./">index</a> [fale] <a href="./sobre">sobre</a>'
    ];
    echo  $this->template->reinderizar($view, $dados);
  }

  public function sobre() : void 
  {
    $view = 'index.html';
    $dados = [
      'titulo' => 'Título Teste - Sobre',
      'subtitulo' => 'Subtitulo Teste',
      'menu' => '<a href="./">index</a> <a href="./fale">fale</a> [sobre]'
    ];
    echo  $this->template->reinderizar($view, $dados);

  }

}