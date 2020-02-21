<?php

declare(strict_types=1);

namespace HighlightLib\Contracts;

/**
 * Interface ClasifierInterface
 * @package HighlightLib\Contracts
 */
interface ClasifierInterface
{
    /**
     * @param array $stringToken
     * @return TokenInterface
     */
    public function clasify(array $stringToken): TokenInterface;
}
