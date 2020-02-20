<?php


class Keyword implements \HighlightLib\Contracts\TokenInterface
{
    public function getCSS(): string
    {
        return "keyword";
    }
}