<?php


namespace HighlightLib\Token;
use HighlightLib\Contracts\TokenInterface;

class Token extends AbstractToken
{

    public function getCSS(): string
    {
        return "token";
    }

    public function getText(): string
    {
        return $this->text;
    }
}