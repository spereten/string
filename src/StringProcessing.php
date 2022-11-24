<?php
declare(strict_types=1);

namespace Spereten\String;

class StringProcessing implements \Stringable
{
    public function __construct(private readonly string $string){}

    public function length() : int
    {
        return mb_strlen(string: $this->string);
    }

    public function isContains(string $needle): bool
    {
           return $needle !== '' && mb_strpos(haystack: $this->string, needle: $needle) !== false;
    }

    public function __toString(): string
    {
        return $this->string;
    }
}