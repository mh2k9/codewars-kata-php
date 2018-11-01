<?php
# https://www.codewars.com/kata/printer-errors/train/php
function printerError($s) {
    return preg_match_all('/[^a-m]/', $s).'/'.strlen($s);
}
