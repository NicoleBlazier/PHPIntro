<?php

// Exercise 1
function greet($whom)
{
    // there is now a variable $whom
    // it;s value is 'Paris'
    echo 'Hello, ' . $whom . '!';
}

// call the funtion
$greeting = greet('Prague');
echo $greeting;




// Exercise 2
function print_copyright()
{
    // no variables known here

    echo '&copy; 2018';
}

print_copyright();

// Exercise 3



// Exercise 4
function headline($text)
{
    echo '<h1>' . $text . '</h1>';
}
// call the function and echo the returned value right away
headline('My Website');

// Call the function and save the returned value into a variable
$headline = headline('Your Website');
// var_dump the variable (that contains the returned value)
var_dump($headline);


$a = 1;

function foo ()
{
    // import the variable $a from the global scope (or you can write $a = 1)
    global $a;

    $a++;
}

foo();

var_dump($a);