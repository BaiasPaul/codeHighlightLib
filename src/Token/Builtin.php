<?php

namespace HighlightLib\Token;
use HighlightLib\Contracts\TokenInterface;

class Builtin implements TokenInterface
{
    public function getCSS(): string
    {
        return "builtin";
    }
}