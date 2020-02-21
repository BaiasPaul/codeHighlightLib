<?php

declare(strict_types=1);
namespace HighlightLib\Clasifier;
use HighlightLib\Contracts\ClasifierInterface;
use HighlightLib\Contracts\TokenInterface;
use HighlightLib\Config;
use HighlightLib\Token\Token;

class Clasifier implements ClasifierInterface
{

    public function clasify(string $stringToken): TokenInterface
    {
        $config = require 'src/Config/Config.php';
        foreach($config as $regex => $class)
            if(preg_match($regex,$stringToken))
                return new $class;
            return new Token();
    }
}