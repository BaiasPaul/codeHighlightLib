<?php

namespace HighlightLib\Token;

/**
 * Class Keyword
 * @package HighlightLib\Token
 */
class Keyword extends AbstractToken
{
    /**
     * @return string
     */
    public function getCSS(): string
    {
        return "keyword";
    }

}