<?php
/**
* @link https://www.codewars.com/kata/simple-encryption-number-1-alternating-split/train/php
*/
function encrypt($text, $n) {
    return encryptDecrypt($text, $n);
}

function decrypt($text, $n) {
    return encryptDecrypt($text, $n);
}

function encryptDecrypt($text , $n) {
    if ($n < 1) {
        return $text;
    }

    while ($n > 0) {
        $array = str_split($text);
        $odd = $even = [];
        $both = [&$even, &$odd];
        array_walk($array, function($v, $k) use ($both) { $both[$k % 2][] = $v; });
        $text = implode('', $both[1]) . implode('', $both[0]);
        $odd = $even = $both = $array = [];
        $n--;
    }

    return $text;
}
