<?php
declare(strict_types=1);

if(!function_exists('string')){
    function string(string $string): \Spereten\String\StringProcessing{
        return new \Spereten\String\StringProcessing($string);
    }
}