<?php

namespace HighlightLib\Assembler;
use HighlightLib\Contracts\AssemblerInterface;

class Assembler implements AssemblerInterface
{

    public function assemble(array $tokens): string
    {
        $result = "";
        foreach($tokens as $item){
            $result .= $item->getText();
        }
        return $result;
    }
}