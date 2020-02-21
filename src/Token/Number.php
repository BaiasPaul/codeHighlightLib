<?php

namespace HighlightLib\Token;
use HighlightLib\Contracts\TokenInterface;

class Number extends AbstractToken
{
    public function getCSS(): string
    {
        return "number";
    }

    public function getText(): string
    {
        return $this->text;
    }
}