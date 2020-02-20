<?php


class Atom implements \HighlightLib\Contracts\TokenInterface
{
    public function getCSS(): string
    {
        return "atom";
    }
}