<?php

namespace HighlightLib\Tokenizer;

class Tokenizer implements \HighlightLib\Contracts\TokenizerInterface
{

    public function tokenize(string $in): array
    {
        return preg_split("/\s+/",$in,-1, PREG_SPLIT_OFFSET_CAPTURE);
    }
}