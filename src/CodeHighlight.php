<?php

declare(strict_types=1);
namespace HighlightLib;

use HighlightLib\Contracts\AssemblerInterface;
use HighlightLib\Contracts\ClasifierInterface;
use HighlightLib\Contracts\TokenizerInterface;


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
        $array = $this->tokenizer->tokenize($string);

        $clasifiedArray = array();
        foreach($array as $item) {
            $clasifiedArray[] = $this->clasifier->clasify($item);
        }
//        print_r("<br>");
//        print_r($clasifiedArray);
//        print_r("<br><br>");

        return $this->assembler->assemble($clasifiedArray);

    }
}
