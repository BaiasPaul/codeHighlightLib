<?php

declare(strict_types=1);
namespace HighlightLib\ReadFromFile;

use HighlightLib\Contracts\ReadFromFileInterface;

class ReadFromFile implements ReadFromFileInterface
{

    public function read(string $filename): string
    {
        $read = str_replace(" ","|", file_get_contents($filename));
        $read = str_replace("\n", "", $read);

        return $read;
    }
}