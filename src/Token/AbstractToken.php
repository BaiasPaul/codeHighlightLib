<?php


namespace HighlightLib\Token;
use HighlightLib\Contracts\TokenInterface;

abstract class AbstractToken implements TokenInterface
{
    protected $text;
    public function __construct($text)
    {
        $this->text = $text;
    }
    abstract public function getCSS(): string;
    abstract public function getText(): string;

}