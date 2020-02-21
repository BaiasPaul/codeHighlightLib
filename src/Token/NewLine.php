<?php


namespace HighlightLib\Token;
/**
 * Class NewLine
 * @package HighlightLib\Token
 */
class NewLine extends AbstractToken
{
    /**
     * @return string
     */
    public function getCSS(): string
    {
        return "newLine";
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return PHP_EOL;
    }
}