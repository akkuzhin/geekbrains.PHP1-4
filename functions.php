<?php

function calculator ($x, $operations, $y) {
    switch ($operations) {
        case 'add':
            return $x + $y;
            break;
        case 'sub':
            return $x - $y;
            break;
        case 'div':
            if ($y == 0) {
                return 'Деление на ноль невозможно!';
            } else {
                return $x / $y;
            }
            break;
        case 'multi':
            return $x * $y;
            break;
        default:
            return false;
    }
}