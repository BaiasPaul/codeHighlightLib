<?php

namespace HighlightLib\Token;
use HighlightLib\Contracts\TokenInterface;

class Keyword implements TokenInterface
{
    public function getCSS(): string
    {
        return "keyword";
    }
}