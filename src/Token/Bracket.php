<?php

namespace HighlightLib\Token;

/**
 * Class Bracket
 * @package HighlightLib\Token
 */
class Bracket extends AbstractToken
{
    /**
     * @return string
     */
    public function getCSS(): string
    {
        return "bracket";
    }

}