<?php


class Bracket implements \HighlightLib\Contracts\TokenInterface
{
    public function getCSS(): string
    {
        return "bracket";
    }
}