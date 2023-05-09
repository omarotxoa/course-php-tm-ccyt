<?php
/* Variable Rules */

/*
- must be prefixed with $ 
- case sensitive
- must start with a letter or an underscore
- can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
*/


$name = "Omar"; // String
$age = 33; // Int
$hasKids = false; // Bool
$cash_on_hand = 15.25; // Float

var_dump($cash_on_hand);

echo '<br>';

echo $name . ' is ' . $age . ' years old.';

echo '<br>';

echo "{$name} is {$age} years old"; // cleaner

echo '<br>';

// constants
define("HOST", "localhost");
define("DB_NAME", "test_db");

echo HOST;