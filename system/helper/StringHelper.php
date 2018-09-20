<?php if (!defined('PATH_SYSTEM')) die('Bad requested!');
function stringToInt($str)
{
    return sprintf("%u", crc32($str));
}