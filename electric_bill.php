<?php

echo "Enter your consumed unit: ";

$consumedUnit = (int)readline();

// 1–100 units = $5, 101–200 units = $10,  201 to above units = $15
if ($consumedUnit <= 100) {
    $cost = $consumedUnit * 5;
} elseif ($consumedUnit <= 200) {
    $cost = 100 * 5 + ($consumedUnit - 100) * 10;
} else {
    $cost = 100 * 5 + 100 * 10 + ($consumedUnit - 200) * 15;
}

echo "Your total cost is: $" . $cost;