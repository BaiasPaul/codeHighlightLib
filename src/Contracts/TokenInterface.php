<?php

declare(strict_types=1);
namespace HighlightLib\Contracts;

interface TokenInterface extends TokenTextInterface
{
    public function getCSS():string ;
}