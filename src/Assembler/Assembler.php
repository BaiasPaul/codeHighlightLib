<?php

namespace HighlightLib\Assembler;

use HighlightLib\Contracts\AssemblerInterface;

/**
 * Class Assembler
 * @package HighlightLib\Assembler
 */
class Assembler implements AssemblerInterface
{
    /**
     * @param array $tokens
     * @return string
     */
    public function assemble(array $tokens): string
    {
        $result = "";
        $currentOffset = 0;
        foreach($tokens as $item){
            $result .= $item->getSpaces($currentOffset);
            $result .= $item->getText();
            $currentOffset = $item->getOffset();
        }

        return $result;
    }
}