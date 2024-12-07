<?php 

define("FACTOR", 9/5);
define("OFFSET", 32);

echo "Enter a temperature: ";
$temperature = (float) readline();

echo "Converted to ( 1: Farenheights, 2: Celsius: ) ";
$unitChoice = (int) readline();

// if ($unitChoice === 1) {
//     $convertedTemperature = ($temperature - OFFSET) * FACTOR;
//     echo "Converted temperature: " . round($convertedTemperature, 2) . " Celsius\n";
// } elseif ($unitChoice === 2) {
//     $convertedTemperature = $temperature * FACTOR + OFFSET;
//     echo "Converted temperature: " . round($convertedTemperature, 2) . " Farenheights\n";
// } else {
//     echo "Invalid choice. Please enter 1 for Farenheits or 2 for Celsius.\n";
// }

switch ($unitChoice) {
    case 1:
        $convertedTemperature = $temperature * FACTOR + OFFSET;
        echo "Converted temperature: " . round($convertedTemperature, 2) . " Farenheights\n";
        break;
    case 2:
        $convertedTemperature = ($temperature - OFFSET) / FACTOR;
        echo "Converted temperature: " . round($convertedTemperature, 2) . " Celsius\n";
        break;
    default:
        echo "Invalid choice. Please enter 1 for Farenheits or 2 for Celsius.\n";
}