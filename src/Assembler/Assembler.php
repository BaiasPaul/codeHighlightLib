<?php

namespace HighlightLib\Assembler;
use HighlightLib\Contracts\AssemblerInterface;

class Assembler implements AssemblerInterface
{

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