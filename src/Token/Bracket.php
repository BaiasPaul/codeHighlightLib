<?php

namespace HighlightLib\Token;
use HighlightLib\Contracts\TokenInterface;

class Bracket extends AbstractToken
{
    public function getCSS(): string
    {
        return "bracket";
    }

    public function getText(): string
    {
        return $this->text;
    }
}