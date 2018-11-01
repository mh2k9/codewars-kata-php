<?php
# https://www.codewars.com/kata/kill-the-monsters/train/php
function killMonsters($h, $m, $dm) {
    $hit = ($m - 3) > 0 ? ceil(($m - 3) / 3) : 0;

    $dm *= $hit;
    $h -= $dm;

    return $h <= 0 ? "hero died" : "hits: $hit, damage: $dm, health: $h";
}

/*print '<pre>';

print_r(killMonsters(100, 3, 33)); // => "hits: 0, damage: 0, health: 100"
print_r(killMonsters(50, 7, 10)); // => "hits: 2, damage: 20, health: 30"
print_r(killMonsters(30, 4, 50)); // => "hero died"*/
