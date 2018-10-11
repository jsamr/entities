<?php namespace Cvsouth\Entities;

if(!function_exists("str_ends"))
{
    function str_ends($haystack, $needle)
    {
        $length = strlen($needle);
        return $length === 0 || (substr($haystack, -$length) === $needle);
    }
}

if(!function_exists("instr"))
{
    function instr($needle, $haystack)
    {
        return strpos($haystack, $needle) !== false;
    }
}
