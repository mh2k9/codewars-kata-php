<?php
  # Junior Flag Football Player Rankings 
  # https://www.codewars.com/kata/5821ce8feebca7701900000a/train/php
  
  function rankPlayers($players) {
    if (empty($players)) return [];

    array_walk($players, function (&$item) {
        $item = round(array_sum($item) / count($item), 2);
    });

    uasort($players, function ($a, $b) {
        if ($a == $b) return 0;
        return $a < $b ? 1 : -1;
    });

    return $players;
}

/*print '<pre>';
$players = [
    'Jack Johnson' => ['speed'=>5,'agility'=>4,'quickness'=>3],
    'Jane Doe' => ['speed'=>5,'agility'=>4,'quickness'=>3],
    'John Doe' => ['speed'=>8,'agility'=>5,'quickness'=>6]
];

print_r(rankPlayers($players));*/
