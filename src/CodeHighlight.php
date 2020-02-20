<?php

declare(strict_types=1);
namespace HighlightLib;

class CodeHighlight
{
    private $tokenizer;
    private $clasifier;
    private $assembler;

    public function __construct(TokenizerInterface $tokenizer, ClasifierInterface $clasifier, AssemblerInterface $assembler)
    {
        $this->tokenizer = $tokenizer;
        $this->clasifier = $clasifier;
        $this->assembler = $assembler;


    }

    public function highlight(string $string): string
    {
        // use the defined classes/services to perform the highlighting on $string
        $string = "lib";
        return $string;
    }
}
