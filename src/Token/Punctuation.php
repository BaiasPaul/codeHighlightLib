<?php

namespace HighlightLib\Token;

/**
 * Class Punctuation
 * @package HighlightLib\Token
 */
class Punctuation extends AbstractToken
{
    /**
     * @return string
     */
    public function getCSS(): string
    {
        return "punctuation";
    }

}