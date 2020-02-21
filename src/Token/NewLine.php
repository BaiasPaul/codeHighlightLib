<?php


namespace HighlightLib\Token;
use HighlightLib\Contracts\TokenInterface;

class NewLine extends AbstractToken
{

    public function getCSS(): string
    {
        return "newLine";
    }

    public function getText(): string
    {
        return "<br>";
    }
}