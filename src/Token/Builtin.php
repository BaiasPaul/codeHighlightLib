<?php

namespace HighlightLib\Token;

/**
 * Class Builtin
 * @package HighlightLib\Token
 */
class Builtin extends AbstractToken
{
    /**
     * @return string
     */
    public function getCSS(): string
    {
        return "builtin";
    }

}