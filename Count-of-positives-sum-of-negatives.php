<?php
# https://www.codewars.com/kata/576bb71bbbcf0951d5000044/train/php
function countPositivesSumNegatives($input) {
    if (empty($input)) {
        return [];
    }
    $neg = $pos = [];
    $both = [&$neg, &$pos];

    array_walk($input, function ($item) use ($both) {
        if ($item < 0) {
            $both[0][] = $item;
        } else if ($item > 0) {
            $both[1][] = $item;
        }
    });

    return [
        count($both[1]),
        array_sum($both[0]),
    ];
}

/*print '<pre>';
print_r(countPositivesSumNegatives([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15]));*/
