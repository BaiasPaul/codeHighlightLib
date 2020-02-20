<?php

namespace HighlightLib\Token;
use HighlightLib\Contracts\TokenInterface;

class Number implements TokenInterface
{
    public function getCSS(): string
    {
        return "number";
    }
}