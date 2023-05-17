<?php

// For Loops
/*
    For Loop Syntax
    for (initialize; condition; increment) {
        code to execute
    }
*/
echo '<h2>For Loop</h2>';

for ($i = 0; $i < 10; $i++) {
    echo $i . "<br>";
}

// While Loops
/*
    While Loop Syntax
    while (condition) {
        code to execute
    }
*/
echo '<h2>While Loop</h2>';

$i = 0;
while ($i < 10) {
    echo $i . "<br>";
    $i++;
}

// Do While Loops
/*
    Do While Loop Syntax
    do {
        code to execute
    } while (condition);
*/
echo '<h2>Do While Loop</h2>';

$i = 0;
do {
    echo $i . "<br>";
    $i++;
} while ($i < 10);

// Foreach Loops
/*
    Foreach Loop Syntax
    foreach ($array as $value) {
        code to execute
    }
*/
echo '<h2>Foreach Loop</h2>';

$posts = ['post 1', 'post 2', 'post 3', 'post 4'];

foreach ($posts as $post) {
    echo $post . "<br>";
}

// To include the index, you need to use the arrow syntax

foreach ($posts as $index => $post) {
    echo 'Index: ' . $index . ' ' . $post . "<br>";
}