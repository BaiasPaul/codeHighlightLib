<?php

declare(strict_types=1);

namespace HighlightLib\Contracts;

/**
 * Interface TokenInterface
 * @package HighlightLib\Contracts
 */
interface TokenInterface extends TokenTextInterface
{
    /**
     * @return string
     */
    public function getCSS():string ;
}