<?php

// simple array
$numbers = [1, 23, 25, 33];
$fruits = array('apple', 'orange', 'banana');

var_dump($numbers);
echo '<br>';

echo $fruits[1];
echo '<br>';

// Associative Array
$colors = [
    1 => 'red',
    2 => 'blue',
    6 => 'green'
];

echo $colors[6];
echo '<br>';

$hex =[
    'red' => '#ff0000',
    'blue' => '#0000ff',
    'green' => '#00ff00'
];

echo $hex['red'];
echo '<br>';

$person = [
    'name' => 'Omar',
    'age' => 33,
    'has_kids' => true
];

echo $person['name'];
echo '<br>';   

$people = [
    ['name' => 'Omar', 'age' => 33],
    ['name' => 'Xochitl', 'age' => 32]
];

echo $people[0]['name'];
echo '<br>';
echo $people[1]['name'];   
echo '<br>';    
