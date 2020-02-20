<?php

namespace HighlightLib\Token;
use HighlightLib\Contracts\TokenInterface;

class Punctuation implements TokenInterface
{
    public function getCSS(): string
    {
        return "punctuation";
    }
}