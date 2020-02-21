<?php

namespace HighlightLib\Token;
use HighlightLib\Contracts\TokenInterface;

class Keyword extends AbstractToken
{
    public function getCSS(): string
    {
        return "keyword";
    }

    public function getText(): string
    {
        return $this->text;
    }
}