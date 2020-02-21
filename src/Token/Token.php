<?php


namespace HighlightLib\Token;

/**
 * Class Token
 * @package HighlightLib\Token
 */
class Token extends AbstractToken
{
    /**
     * @return string
     */
    public function getCSS(): string
    {
        return "token";
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }
}