<?php

namespace HighlightLib\Token;

/**
 * Class Variable
 * @package HighlightLib\Token
 */
class Variable extends AbstractToken
{
    /**
     * @return string
     */
    public function getCSS(): string
    {
        return "variable";
    }

}