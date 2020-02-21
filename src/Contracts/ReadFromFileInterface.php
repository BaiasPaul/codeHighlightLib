<?php

declare(strict_types=1);

namespace HighlightLib\Contracts;

/**
 * Interface ReadFromFileInterface
 * @package HighlightLib\Contracts
 */
interface ReadFromFileInterface
{
    /**
     * @param string $filename
     * @return string
     */
    public function read(string $filename): string;
}