<?php namespace Cvsouth\Entities;

function str_ends($haystack, $needle)
{
    $length = strlen($needle);
    return $length === 0 || (substr($haystack, -$length) === $needle);
}

function instr($needle, $haystack)
{
    return strpos($haystack, $needle) !== false;
}
