<?php


class Builtin implements \HighlightLib\Contracts\TokenInterface
{
    public function getCSS(): string
    {
        return "builtin";
    }
}