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

    public function clasify(string $stringToken): TokenInterface
    {
//        $config = require 'src/Config/Config.php';

        foreach($this->config as $regex => $class)
            if(preg_match($regex,$stringToken))
                return new $class($stringToken);
        return new Token($stringToken);
    }
}