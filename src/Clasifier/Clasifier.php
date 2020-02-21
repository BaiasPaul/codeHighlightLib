<?php

declare(strict_types=1);
namespace HighlightLib\Clasifier;
use HighlightLib\Contracts\ClasifierInterface;
use HighlightLib\Contracts\TokenInterface;
use HighlightLib\Config;
use HighlightLib\Token\Token;

class Clasifier implements ClasifierInterface
{
    private $config;

    public function __construct()
    {
        $this->config = require '/var/www/codeHighlightLib/src/Config/Config.php';
    }

    public function clasify(array $stringToken): TokenInterface
    {

        foreach($this->config as $regex => $class)
            if(preg_match($regex,$stringToken[0]))
                return new $class($stringToken[0],$stringToken[1]);
        return new Token($stringToken[0],$stringToken[1]);
    }
}