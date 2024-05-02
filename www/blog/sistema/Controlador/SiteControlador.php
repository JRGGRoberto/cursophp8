<?php

namespace sistema\Controlador;

class SiteControlador
{

  public function index(): void
  {
    echo  '[index] <a href="./fale">fale</a> <a href="./sobre">sobre</a>';
  }
  
  public function fale() : void 
  {
    echo '<a href="./">index</a> [fale] <a href="./sobre">sobre</a>';
  }

  public function sobre() : void 
  {
    echo '<a href="./">index</a> <a href="./fale">fale</a> [sobre]';
  }

}