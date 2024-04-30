<?php

namespace sistema\Entity;

class Controller
{
  public function __construct(string $nome = null)
  {
     echo 'Foi inicializado '.$nome ;
  }
}