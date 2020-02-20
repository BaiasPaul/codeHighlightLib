<?php


namespace HighlightLib\Token;
use HighlightLib\Contracts\TokenInterface;

class Token implements TokenInterface
{

    public function getCSS(): string
    {
        return "token";
    }
}