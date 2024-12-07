<?php

define("USERNAME", "yamin");
define("PASSWORD", "yamin@123");

echo "Enter username: ";
$usernameInput = readline();

echo "Enter password: ";
$passwordInput = readline();

if ($usernameInput === USERNAME && $passwordInput === PASSWORD) {
    echo "Login successful!";
} else {
    echo "Invalid credentials.";
}