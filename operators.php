<?php

// Operator Examples

$inches = 12;

// Convert values to Centimeters
$centimeters = $inches * 2.54;
echo $centimeters;
echo '<br>';

// Exercise Number 2 Celsius
$celsius = 100;

$fahrenheit = ((9/5) * $celsius) + 32;
echo $fahrenheit;
echo '<br>';

// Increment/Decrement examples

$number = 0;
$number++;
var_dump($number);

$number = 0;
var_dump($number++);

$number = 0;
var_dump(++$number);
echo '<br>';

// Ternary Operator

$temperature = 36.5;

$status = 'I am ' . ($temperature > 37 ? 'ill' : ($temperature < 33 ? 'dead' : 'healthy'));
echo $status;
echo '<br>'; 

if ($temperature > 37) {
    $status = 'ill';
} else {
    $status = 'healthy';
}
echo $status;
echo '<br>'; 

$number = 41;
$even_or_odd = $number % 2 ? 'Odd' : 'Even';
echo 'The number is ' . $even_or_odd . '.';
echo '<br>'; 

// Concatenation

$full_name = 'Bruce' . 'Wayne';
echo $full_name;
echo '<br>'; 

$first_name = 'Bruce';
$surname = 'Wayne';
$year = 1939;

echo $first_name . ' ' . $surname . ' was first introduced in' . $year;
echo '<br>'; 

// Concatenation Exercise
$weekday = 'Tuesday';
echo 'Today is ' . $weekday . '.';
echo '<br>'; 

$year_of_birth = 1987;
$age = 31;
echo 'I was born in ' .$year_of_birth . ' so this year I am celebrating my ' . $age . ' birthday.';