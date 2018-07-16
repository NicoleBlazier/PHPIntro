<?php

require 'var_show.php';

$party = [
    'bilbo' => 'Bilbo Baggins',
    'frodo' => 'Frodo Baggins',
    'ring' => 'The One Ring',
];

$party['gandalf'] = 'Gandalf the Grey';

// bilbo leaves for rivendall
unset($party['bilbo']);

$party['sam'] = 'Samwise Gamgee';

// Gandalf rides to Gondor
unset($party['gandalf']);

function leave_hobbiton() { 
    // import $party inside the function from global scope
    global $party;
    // merging an array
    $party = array_merge($party, 
    [
        'merry' => 'Meriadoc Brandybuck',
        'pippin' => 'Peregrin Took'
    ]);
}

leave_hobbiton();

function go_to_bree($party){
    $party['strider'] = 'strider';
    
    return $party;
}

// actually go to bree
$party = go_to_bree($party);

// passed by reference with &
function go_to_weathertop(& $party) {

    $party = array_merge($party, 
    [
        'Witch King of Angmar',
        'Nazgûl #2',
        'Nazgûl #3',
        'Nazgûl #4',
        'Nazgûl #5',
        'Nazgûl #6',
        'Nazgûl #7',
        'Nazgûl #8',
        'Nazgûl #9'
        ]);
    }

// go_to_weathertop($party);

// function meet_arwen($party) {
//     $party['arwen'] = 'Arwen Undomiel';

//     $party = array_spice($party, -10, 9);
// }

// function go_to_rivendall($party) {

//     global $party;


// }

// meet_arwen($party);

var_show($party);



