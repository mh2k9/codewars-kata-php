<?php
# https://www.codewars.com/kata/515e271a311df0350d00000f/solutions/php
function square_sum($numbers) {
    return array_reduce($numbers, function ($old, $new) {
        return $old + ($new * $new);
    }, 0);
}
