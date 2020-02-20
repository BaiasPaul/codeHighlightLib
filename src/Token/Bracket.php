<?php

namespace HighlightLib\Token;
use HighlightLib\Contracts\TokenInterface;

class Bracket implements TokenInterface
{
    public function getCSS(): string
    {
        return "bracket";
    }
}