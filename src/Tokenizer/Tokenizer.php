<?php

namespace HighlightLib\Tokenizer;

class Tokenizer implements \HighlightLib\Contracts\TokenizerInterface
{

    public function tokenize(string $in): array
    {
        return preg_split("/ +/",$in);
    }
}