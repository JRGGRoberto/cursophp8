<?php

namespace sistema\Suporte;
use Twig\Lexer;
use Twig\TwigFunction;
use sistema\Entity\Helpers;

class Template
{
    private \Twig\Environment $twin;

    public function __construct(string $diretorio)
    {
        $loader = new \Twig\Loader\FilesystemLoader($diretorio);
        $this->twin = new \Twig\Environment($loader); 
        $lexer = new Lexer($this->twin, array(
            $this->helpers()
        ));
        $this->twin->setLexer($lexer);
    }

    public function reinderizar(string $view, array $dados): string
    {
        return $this->twin->render($view, $dados);
    }

    private function helpers() : void 
    {
        array(
            $this->twin->addFunction(
                new \Twig\TwigFunction('url', function
                (string $url = null){
                    return Helpers::url($url);
                })
            ),
            $this->twin->addFunction(
                new \Twig\TwigFunction('saudacao', function
                () {
                    return Helpers::saudacao();
                })
            ),
            $this->twin->addFunction(
                new \Twig\TwigFunction('resumirTexto', function
                (string $texto, int $limite) {
                    return Helpers::resumirTexto($texto, $limite);
                })
            )
        );
    }
}