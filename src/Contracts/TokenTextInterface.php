<?php

declare(strict_types=1);
namespace HighlightLib\Contracts;

interface TokenTextInterface
{
    public function getText():string ;
    public function getSpaces(int $lastOffset): string;
    public function getOffset(): int;
}