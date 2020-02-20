<?php

namespace HighlightLib\Token;
use HighlightLib\Contracts\TokenInterface;

class Variable implements TokenInterface
{
    public function getCSS(): string
    {
        return "variable";
    }
}