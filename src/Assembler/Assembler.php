<?php

namespace HighlightLib\Assembler;
use HighlightLib\Contracts\AssemblerInterface;

class Assembler implements AssemblerInterface
{

    public function assemble(array $tokens): string
    {
        $result = "";
        foreach($tokens as $item => $token){

            if (preg_match("newLine",$token))
                $result .= "<br>";
            elseif(!preg_match("token",$token))
                $result .= "<span class=\"$token\">$item</span> ";
            else
                $result .= $item;
        }

        return $result;
    }
}