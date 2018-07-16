<?php

require 'var_show.php';

$fruit = [
    'Apple',
    'Pear',
    'Orange',
];

$fruit_colors = [
    'Apple' => 'Red',
    'Pear'  => 'Green',
    'Orange' => 'Orange',
];

// var_show ($fruit);

// var_show($fruit_colors);

// Exercise 1 - Car or letters of the alphabet

$cars_i_want = [];

var_show($cars_i_want);

$cars_i_want[] = 'Audi';
$cars_i_want[] = 'Toyota';
$cars_i_want[] = 'Camry';
$cars_i_want[] = 'Dodge';
$cars_i_want[] = 'Tesla';
$cars_i_want[] = 'Ford';
$cars_i_want[] = 'Saturn';

var_show($cars_i_want);

echo 'For myself I would buy ' .$cars_i_want[0] . ' .<br>';
echo 'For my spoouse I would buy ' . $cars_i_want[2] . '.<br>';
echo 'Each of kids would get a ' . $cars_i_want[3]
. '.<br>';

// foreach (array as value)
foreach ($cars_i_want as $car_name) {

}

// foreach (array as value => value)
foreach ($cars_i_want as $key => $car_name) {

}

echo '<ul>';

foreach ($cars_i_want as $key => $car_name) {
    echo '<li>' . $car_name . '<li>';
}

echo '<ul>';