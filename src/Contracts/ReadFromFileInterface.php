<?php

declare(strict_types=1);
namespace HighlightLib\Contracts;


interface ReadFromFileInterface{
    public function read(string $filename): string;
}