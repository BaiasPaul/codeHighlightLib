<?php

namespace HighlightLib\Token;
/**
 * Class Number
 * @package HighlightLib\Token
 */
class Number extends AbstractToken
{
    /**
     * @return string
     */
    public function getCSS(): string
    {
        return "number";
    }

}