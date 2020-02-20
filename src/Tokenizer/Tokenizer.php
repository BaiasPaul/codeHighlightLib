<?php


class Tokenizer implements \HighlightLib\Contracts\TokenizerInterface
{

    public function tokenize(string $in): array
    {
        $tokens = preg_split("/\s+/",$in);

        return $tokens;
    }
}