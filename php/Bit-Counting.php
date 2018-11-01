<?php
# https://www.codewars.com/kata/bit-counting/train/php
function countBits($n)
{
    return substr_count(decbin($n), '1');
}
