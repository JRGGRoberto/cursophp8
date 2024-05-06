<?php

namespace sistema\Suporte;

class Template
{
    private \Twig\Environment $twin;

    public function __construct(string $diretorio)
    {
        $loader = new \Twig\Loader\FilesystemLoader($diretorio);
        $this->twin = new \Twig\Environment($loader); 
    }

    public function reinderizar(string $view, array $dados)
    {
        return $this->twin->render($view, $dados);
    }
}