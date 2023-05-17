<?php

if(true) {
    echo 'true doood';
    echo '<br>';
}

$posts = [
    ['title' => 'Post 1', 'body' => 'This is post 1'],
    ['title' => 'Post 2', 'body' => 'This is post 2']
];


if(!empty($posts)) {
    echo $posts[0]['title'];
    echo '<br>';
} else {
    echo 'No Posts';
}

// This ternary operator is the same as the if/else above
echo !empty($posts) ? $posts[0]['title'] : 'No Posts';

echo '<br>';

// If there is no else, you can just use null
echo !empty($posts) ? $posts[0]['title'] : null;


// Null coalescing operator
// Basically an if/else statement
// You don't need !empty() because it will return null if it's empty
echo $posts[0]['title'] ?? null;

echo '<br>';    
echo '<h2>Switch Statement</h2>';

$favcolor = 'black';

switch($favcolor) {
    case 'red':
        echo 'Your favorite color is red';
        break;
    case 'blue':
        echo 'Your favorite color is blue';
        break;
    case 'green':
        echo 'Your favorite color is green';
        break;
    default:
        echo 'Your favorite color is something else';
}
