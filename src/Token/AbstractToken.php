<?php

namespace HighlightLib\Token;

use HighlightLib\Contracts\TokenInterface;

/**
 * Class AbstractToken
 * @package HighlightLib\Token
 */
abstract class AbstractToken implements TokenInterface
{
    /**
     * @var
     */
    protected $text;

    /**
     * @var
     */
    protected $offset;

    /**
     * AbstractToken constructor.
     * @param $text
     * @param $offset
     */
    public function __construct($text, $offset)
    {
        $this->text = $text;
        $this->offset = $offset;
    }

    /**
     * @return string
     */
    abstract public function getCSS(): string;

    /**
     * @return string
     */
    public function getText(): string
    {
        return '<span class="'. $this->getCSS() . '">' . $this->text . '</span>';
    }

    /**
     * @param int $lastOffset
     * @return string
     */
    public function getSpaces(int $lastOffset): string
    {
        $spaces="";
        for($i = 0; $i <= $this->offset-$lastOffset-1; $i++) {
            $spaces .= " ";
        }
        return $spaces;
    }

    /**
     * @return int
     */
    public function getOffset(): int
    {
        return $this->offset+strlen($this->text);
    }
}