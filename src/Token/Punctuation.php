<?php


class Punctuation implements \HighlightLib\Contracts\TokenInterface
{
    public function getCSS(): string
    {
        return "punctuation";
    }
}