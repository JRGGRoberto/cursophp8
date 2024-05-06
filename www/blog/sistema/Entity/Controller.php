<?php

namespace sistema\Entity;

use sistema\Suporte\Template;

class Controller
{
  protected Template $template;

  public function __construct(string $diretorio)
  {
     $this->template = new Template($diretorio);
  }
}