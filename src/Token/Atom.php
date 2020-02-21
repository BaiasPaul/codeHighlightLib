<?php

namespace HighlightLib\Token;

/**
 * Class Atom
 * @package HighlightLib\Token
 */
class Atom extends AbstractToken
{
    /**
     * @return string
     */
    public function getCSS(): string
    {
        return "atom";
    }

}