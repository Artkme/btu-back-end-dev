<?php

while (true) {
    $first = (int) readline("Enter first number: ");
    $second = (int) readline("Enter second number: ");

    if ($first == 0 || $second == 0) {
        break;
    }

    if (($first < 0 || $second < 0) || ($first > 100 || $second > 100)) {
        echo "Invalid value\n";
    } else {
        echo $first * $second;
        break;
    }
}
