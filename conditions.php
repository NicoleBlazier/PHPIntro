<?php

// Condition Examples






// Equal comparison operator == equal each other
// Exercise 1  - Good Morning Vietnam
$time_of_day = 'morning';

if ($time_of_day == 'morning') {
    echo 'Good morning, Vietnam';
} else {
    echo 'Good evening, Vietnam';
}
echo '<br>';

// Exercise 2 - Outdoor Weather
$weather = 'raining';

if ($weather == 'raining') {
    echo 'Let\'s stay indoors.';
} else {
    echo 'Let\'s go outside.';
}
echo '<br>';

// If...elseif...else condition
// Exercise 3  - Good Morning Vietnam
$time_of_day = 'afternoon';

if ($time_of_day == 'morning') {
    echo 'Good morning, Vietnam';
} else if ($time_of_day = 'afternoon') {
    echo 'Good afternoon, Vietnam';
} else {
    echo 'Good evening, Vietnam';
}
echo '<br>';

// Exercise 4 - Outdoor Weather
$weather = 'sunny';

if ($weather == 'raining') {
    echo 'Let\'s stay indoors.';
} elseif ($weather == 'sunny') {
    echo 'Let\'s put on some sunblock';
} elseif ($weather == 'windy') {
    echo 'Let\'s put on a coat';
} else {
    echo 'Let\'s go outside.';
}
echo '<br>';


// Comparison Operators - < > = + - 
// Exercise 5 - Young vs. Old

$birth_year = 1985;

if ($birth_year <= 1983) {
    echo 'Elderly';
} else {
    echo 'Young';
}
echo '<br>';

// Exercise 6 - Height
$height = 168;

if ($height >= 180 ) {
    echo 'Tall';
} elseif ($height >= 160 ) {
    echo 'Average';
} else  {
    echo 'Small';
}
echo '<br>';

// Switch...Case Condition
// Exercise 7 - Programming Languages
$programming_language = 'Python';

switch ($programming_language) 
{
    case 'Ruby': 
    case 'PHP' :
        echo 'serverside';
        break;
    case 'Javascript' :
        echo 'clientside';
        break;
    default:
        echo 'I don\'t know';
    break;
}
echo '<br>';


// Exercise 8 - Operating Systems
$operating_system = 'OS X';

switch ($operating_system) 
{
    case 'Windows': 
        echo 'Edge';
        break;
    case 'Linux' :
        echo 'Firefox';
        break;
    case 'OS X' :
        echo 'Safari';
        break;
    default: 
        echo 'Just use Chrome';
    break;
}
echo '<br>';


// Multiple Conditions
// Exercise 9 - Age, Gender, and Employed combinations

$age = 40;
$gender = 'female';
$employed = false;

// if the age is less than 25
if ($age < 25) {

}
// if employed
if ($employed) {

}
// If age is above 34 and not employed
if ($age > 34 && !$employed) {

}

// if the age is not greater than 18
if ($age < 18) {

}
// if the age is lower than 12 and gender is female
if ($age < 12 && $gender = 'female') {
    
}
// if age is greater or equal to 18 and is not employed
if ($age >= 18 && $employed) {
    
}
// if age is greater or equal to 60, is employed and is a female
if ($age >= 60 && $gender = 'female') {
    
}
// if (someone) is a male above 20 or is an unemployed female above 25
if ($gender = 'male' && $age > 20 || $gender = 'female' && $age > 25) {
    
}
echo '<br>';


// Partial Evaluation

$today == 'sunday' OR open_shop();
