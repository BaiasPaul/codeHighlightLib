<?php

namespace HighlightLib\Token;
use HighlightLib\Contracts\TokenInterface;

class Builtin extends AbstractToken
{
    public function getCSS(): string
    {
        return "builtin";
    }

    public function getText(): string
    {
        return $this->text;
    }
}