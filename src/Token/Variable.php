<?php


class Variable implements \HighlightLib\Contracts\TokenInterface
{
    public function getCSS(): string
    {
        return "variable";
    }
}