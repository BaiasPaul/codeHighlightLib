<?php

namespace HighlightLib\Token;
use HighlightLib\Contracts\TokenInterface;

class Punctuation extends AbstractToken
{
    public function getCSS(): string
    {
        return "punctuation";
    }

}