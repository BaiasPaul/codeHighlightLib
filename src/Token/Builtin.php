<?php

namespace HighlightLib\Token;
use HighlightLib\Contracts\TokenInterface;

class Builtin extends AbstractToken
{
    public function getCSS(): string
    {
        return "builtin";
    }

}