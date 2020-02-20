<?php

namespace HighlightLib\Token;
use HighlightLib\Contracts\TokenInterface;

class Atom implements TokenInterface
{
    public function getCSS(): string
    {
        return "atom";
    }
}