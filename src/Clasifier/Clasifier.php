<?php

use HighlightLib\Contracts\TokenInterface;

class Clasifier implements \HighlightLib\Contracts\ClasifierInterface
{

    public function clasify(string $stringToken): TokenInterface
    {
        switch($stringToken) {
            case "atom":
                return new Atom();
                break;
            case "bracket":
                return new Bracket();
                break;
            case "builtin":
                return new Builtin();
                break;
            case "keyword":
                return new Keyword();
                break;
            case "number":
                return new Number();
                break;
            case "punctuation":
                return new Punctuation();
                break;
            case "variable":
                return new Variable();
        }
    }
}