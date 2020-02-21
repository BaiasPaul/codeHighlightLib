<?php


namespace HighlightLib\Token;
use HighlightLib\Contracts\TokenInterface;

abstract class AbstractToken implements TokenInterface
{
    protected $text;
    protected $offset;
    public function __construct($text, $offset)
    {
        $this->text = $text;
        $this->offset = $offset;
    }
    abstract public function getCSS(): string;
    public function getText(): string{
        return '<span class="'. $this->getCSS() . '">' . $this->text . '</span>';
    }
    public function getSpaces(int $lastOffset): string
    {
        $spaces="";
        for($i = 0; $i <= $this->offset-$lastOffset-1; $i++)
            $spaces .= " ";
        return $spaces;
    }
    public function getOffset(): int{
        return $this->offset+strlen($this->text);
    }

}