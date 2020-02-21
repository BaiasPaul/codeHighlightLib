<?php


namespace HighlightLib\Token;
use HighlightLib\Contracts\TokenInterface;

class NewLine implements TokenInterface
{

    public function getCSS(): string
    {
        return "newLine";
    }
}