<?php


class Number implements \HighlightLib\Contracts\TokenInterface
{
    public function getCSS(): string
    {
        return "number";
    }
}