<?php
# https://www.codewars.com/kata/58062572a4647eb3f50002e5/train/php
function getLargestProduct($grid) {
    $len = count($grid);
    $max = 0;
    for ($i = 0; $i < $len; $i++) {
        for ($j = 0; $j < $len; $j++) {
            # Horizontal
            if (isset($grid[$i - 3][$j])) {
                $result = getProduct($grid[$i][$j], $grid[$i - 1][$j], $grid[$i - 2][$j], $grid[$i - 3][$j]);
                $result > $max && $max = $result;
            }

            # Vertical
            if (isset($grid[$i][$j - 3])) {
                $result = getProduct($grid[$i][$j], $grid[$i][$j - 1], $grid[$i][$j - 2], $grid[$i][$j - 3]);
                $result > $max && $max = $result;
            }

            # Diagonal
            if (isset($grid[$i - 3][$j - 3])) {
                $result = getProduct($grid[$i][$j], $grid[$i - 1][$j - 1], $grid[$i - 2][$j - 2], $grid[$i - 3][$j - 3]);
                $result > $max && $max = $result;
            }

            # Anti Diagonal
            if (isset($grid[$i - 3][$j])) {
                $result = getProduct($grid[$i][$j], $grid[$i - 1][$j], $grid[$i - 2][$j], $grid[$i - 3][$j]);
                $result > $max && $max = $result;
            }

            if (isset($grid[$i - 3][$j + 3])) {
                $result = getProduct($grid[$i][$j], $grid[$i - 1][$j + 1], $grid[$i - 2][$j + 2], $grid[$i - 3][$j + 3]);
                $result > $max && $max = $result;
            }

            if (isset($grid[$i + 3][$j - 3])) {
                $result = getProduct($grid[$i][$j], $grid[$i + 1][$j - 1], $grid[$i + 2][$j - 2], $grid[$i + 3][$j - 3]);
                $result > $max && $max = $result;
            }
        }
    }

    return $max;
}

function getProduct() {
    $params = func_get_args();
    return array_reduce($params, function ($old, $new) {
        return $old * $new;
    }, 1);
}

/*$res = getLargestProduct([
    [01, 01, 01, 04, 01, 01],
    [01, 01, 04, 01, 01, 01],
    [01, 04, 01, 01, 01, 01],
    [04, 01, 01, 01, 01, 01],
    [01, 01, 01, 01, 01, 01],
    [01, 01, 01, 01, 01, 01],
]);
var_dump($res);*/
