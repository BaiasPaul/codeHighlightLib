<?php

declare(strict_types=1);

namespace HighlightLib;

use HighlightLib\Contracts\AssemblerInterface;
use HighlightLib\Contracts\ClasifierInterface;
use HighlightLib\Contracts\TokenizerInterface;

/**
 * Class CodeHighlight
 * @package HighlightLib
 */
class CodeHighlight
{
    /**
     * @var TokenizerInterface
     */
    private $tokenizer;
    /**
     * @var ClasifierInterface
     */
    private $clasifier;
    /**
     * @var AssemblerInterface
     */
    private $assembler;

    /**
     * CodeHighlight constructor.
     * @param TokenizerInterface $tokenizer
     * @param ClasifierInterface $clasifier
     * @param AssemblerInterface $assembler
     */
    public function __construct(
        TokenizerInterface $tokenizer,
        ClasifierInterface $clasifier,
        AssemblerInterface $assembler)
    {
        $this->tokenizer = $tokenizer;
        $this->clasifier = $clasifier;
        $this->assembler = $assembler;
    }

    /**
     * @param string $string
     * @return string
     */
    public function highlight(string $string): string
    {
        $array = $this->tokenizer->tokenize($string);
        $clasifiedArray = array();
        foreach($array as $item) {
            $clasifiedArray[] = $this->clasifier->clasify($item);
        }

        return $this->assembler->assemble($clasifiedArray);
    }
}
