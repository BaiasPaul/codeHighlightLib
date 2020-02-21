<?php

namespace HighlightLib\Config;
use HighlightLib\ReadFromFile\ReadFromFile;

$readFromFile = new ReadFromFile();
$atoms = $readFromFile->read("/var/www/codeHighlightLib/specifications/phpatoms.txt");
$builtin = $readFromFile->read("/var/www/codeHighlightLib/specifications/phpbuiltin.txt");
$keyword = $readFromFile->read("/var/www/codeHighlightLib/specifications/phpkeywords.txt");


return array (
    '/^\d+$/' => "HighlightLib\Token\Number",
    '/^\$[a-zA-Z_]\w*$/' => "HighlightLib\Token\Variable",
    '/\.|,|;|:|‘|“|\[|\]|\(|\)/' => "HighlightLib\Token\Punctuation",
    '/^{|}$/' => "HighlightLib\Token\Bracket",
    "/\b(?:$atoms)\b/" => "HighlightLib\Token\Atom",
    "/\b(?:$keyword)\b/" => "HighlightLib\Token\Keyword",
    "/\b(?:$builtin)\b/" => "HighlightLib\Token\Builtin",
    '/\n|\r\n/' => "HighlightLib\Token\NewLine"
);

