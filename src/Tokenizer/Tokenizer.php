<?php

namespace HighlightLib\Tokenizer;

/**
 * Class Tokenizer
 * @package HighlightLib\Tokenizer
 */
class Tokenizer implements \HighlightLib\Contracts\TokenizerInterface
{
    /**
     * @param string $in
     * @return array
     */
    public function tokenize(string $in): array
    {
        return preg_split("/\s+/",$in,-1, PREG_SPLIT_OFFSET_CAPTURE);
    }
}