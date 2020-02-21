<?php

declare(strict_types=1);

namespace HighlightLib\ReadFromFile;

use HighlightLib\Contracts\ReadFromFileInterface;

/**
 * Class ReadFromFile
 * @package HighlightLib\ReadFromFile
 */
class ReadFromFile implements ReadFromFileInterface
{
    /**
     * @param string $filename
     * @return string
     */
    public function read(string $filename): string
    {
        $read = str_replace(" ","|", file_get_contents($filename));
        $read = str_replace("\n", "", $read);

        return $read;
    }
}