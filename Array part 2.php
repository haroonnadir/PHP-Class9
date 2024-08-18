<?php
$array = ['A' => 'apple', 'B' => 'banana', 'C' => 'cherry'];
// Convert all keys to lowercase
$lowercase_keys = array_change_key_case($array, CASE_LOWER);
// Result: ['a' => 'apple', 'b' => 'banana', 'c' => 'cherry']

$array = ['a' => 'apple', 'b' => 'banana', 'c' => 'cherry'];
// Convert all keys to uppercase
$uppercase_keys = array_change_key_case($array, CASE_UPPER);
// Result: ['A' => 'apple', 'B' => 'banana', 'C' => 'cherry']

$array = ['FirstName' => 'John', 'LastName' => 'Doe'];
// Convert all keys to lowercase
$lowercase_keys = array_change_key_case($array, CASE_LOWER);
// Result: ['firstname' => 'John', 'lastname' => 'Doe']


$array = [1, 2, 3, 4, 5];
// Compute the sum
$sum = array_sum($array);
// Result: 15

$array = [1.5, 2.5, 3.5];
// Compute the sum
$sum = array_sum($array);
// Result: 7.5


$array = [1, '2', 3.5, '4.5'];
// Compute the sum (strings are converted to numbers)
$sum = array_sum($array);
// Result: 11


$array = [1, 2, 3, 4, 5];
// Compute the product
$product = array_product($array);
// Result: 120

$array = [1.5, 2.5, 3.5];
// Compute the product
$product = array_product($array);
// Result: 13.125

$array = [2, '3', 4.5];
// Compute the product (strings are converted to numbers)
$product = array_product($array);
// Result: 27

$array = ['a', 'b', 'c', 'd', 'e'];
// Pick one random key
$key = array_rand($array);
// Result: (e.g., 2)
echo $key; // Outputs a random key like 2
echo $array[$key]; // Outputs the value at that key, e.g., 'c'

$array = ['a', 'b', 'c', 'd', 'e'];
// Pick three random keys
$keys = array_rand($array, 3);
// Result: (e.g., [0, 2, 4])
print_r($keys); // Outputs an array of random keys
foreach ($keys as $key) {
    echo $array[$key] . ' ';
}

$array = ['a', 'b', 'c', 'd', 'e'];
// Shuffle the array
shuffle($array);
// Result: The order of elements in $array is now randomized
print_r($array); // Outputs the shuffled array, e.g., ['d', 'b', 'a', 'e', 'c']


// Fill an array with 5 elements, all set to 'x', starting at index 0
$array = array_fill(0, 5, 'x');
// Result: ['x', 'x', 'x', 'x', 'x']
print_r($array);

// Fill an array with 4 elements, all set to 7, starting at index 2
$array = array_fill(2, 4, 7);
// Result: [0 => NULL, 1 => NULL, 2 => 7, 3 => 7, 4 => 7, 5 => 7]
print_r($array);


// Fill array with specified keys, all set to 'default_value'
$keys = ['a', 'b', 'c'];
$array = array_fill_keys($keys, 'default_value');
// Result: ['a' => 'default_value', 'b' => 'default_value', 'c' => 'default_value']
print_r($array);

// Fill array with numeric keys
$keys = [1, 2, 3];
$array = array_fill_keys($keys, 0);
// Result: [1 => 0, 2 => 0, 3 => 0]
print_r($array);

// Fill array with complex keys
$keys = ['first_name', 'last_name'];
$array = array_fill_keys($keys, 'unknown');
// Result: ['first_name' => 'unknown', 'last_name' => 'unknown']
print_r($array);

$array = [1, 2, 3, 4, 5];
// Callback function to increment each element
function increment(&$value, $key) {
    $value += 1;
}
// Apply callback to each element
array_walk($array, 'increment');
// Result: [2, 3, 4, 5, 6]
print_r($array);

$array = [1, 2, 3, 4, 5];
// Callback function to multiply each element by a given factor
function multiply(&$value, $key, $factor) {
    $value *= $factor;
}
// Apply callback with additional user data
array_walk($array, 'multiply', 10);
// Result: [10, 20, 30, 40, 50]
print_r($array);

$array = [
    'fruit' => ['apple', 'banana'],
    'vegetables' => ['carrot', 'celery'],
];
// Callback function to uppercase each element
function uppercase(&$value, $key) {
    if (is_string($value)) {
        $value = strtoupper($value);
    }
}
// Apply callback recursively
array_walk_recursive($array, 'uppercase');
// Result: ['fruit' => ['APPLE', 'BANANA'], 'vegetables' => ['CARROT', 'CELERY']]
print_r($array);

$array = [
    'numbers' => [
        'one' => 1,
        'two' => 2,
        'three' => 3
    ],
    'more_numbers' => [
        'four' => 4,
        'five' => 5
    ]
];
// Callback function to add a given value to each element
function add_value(&$value, $key, $increment) {
    if (is_int($value)) {
        $value += $increment;
    }
}
// Apply callback recursively with additional user data
array_walk_recursive($array, 'add_value', 10);
// Result: ['numbers' => ['one' => 11, 'two' => 12, 'three' => 13], 'more_numbers' => ['four' => 14, 'five' => 15]]
print_r($array);


$array = [1, 2, 3, 4, 5];
// Callback function to square each element
function square($value) {
    return $value * $value;
}
// Apply callback to each element
$result = array_map('square', $array);
// Result: [1, 4, 9, 16, 25]
print_r($result);


$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
// Callback function to add corresponding elements
function add($a, $b) {
    return $a + $b;
}
// Apply callback to each pair of elements from both arrays
$result = array_map('add', $array1, $array2);
// Result: [5, 7, 9]
print_r($result);


$array = ['apple', 'banana', 'cherry'];
// Anonymous function to convert each element to uppercase
$result = array_map(function($value) {
    return strtoupper($value);
}, $array);
// Result: ['APPLE', 'BANANA', 'CHERRY']
print_r($result);


$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
// Anonymous function to multiply corresponding elements
$result = array_map(function($a, $b) {
    return $a * $b;
}, $array1, $array2);
// Result: [10, 40, 90]
print_r($result);

?>