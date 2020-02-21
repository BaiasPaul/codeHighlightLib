<?php

namespace HighlightLib\Token;
use HighlightLib\Contracts\TokenInterface;

class Variable extends AbstractToken
{
    public function getCSS(): string
    {
        return "variable";
    }

    public function getText(): string
    {
        return $this->text;
    }
}