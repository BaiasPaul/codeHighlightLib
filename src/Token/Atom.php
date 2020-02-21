<?php

namespace HighlightLib\Token;
use HighlightLib\Contracts\TokenInterface;

class Atom extends AbstractToken
{
    public function getCSS(): string
    {
        return "atom";
    }

    public function getText(): string
    {
        return $this->text;
    }
}