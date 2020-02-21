<?php

namespace HighlightLib\Token;
use HighlightLib\Contracts\TokenInterface;

class Bracket extends AbstractToken
{
    public function getCSS(): string
    {
        return "bracket";
    }

}