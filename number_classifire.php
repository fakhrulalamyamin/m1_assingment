<?php

echo "Enter a number: ";

$number = (int)readline();

if ($number > 0) {
    echo "The number entered is a positive number";
} elseif ($number == 0) {
    echo "The number entered is zero";
} else {
    echo "The number entered is a negative number";
}