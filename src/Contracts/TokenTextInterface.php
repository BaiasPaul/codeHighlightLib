<?php

declare(strict_types=1);

namespace HighlightLib\Contracts;

/**
 * Interface TokenTextInterface
 * @package HighlightLib\Contracts
 */
interface TokenTextInterface
{
    /**
     * @return string
     */
    public function getText():string ;

    /**
     * @param int $lastOffset
     * @return string
     */
    public function getSpaces(int $lastOffset): string;

    /**
     * @return int
     */
    public function getOffset(): int;
}