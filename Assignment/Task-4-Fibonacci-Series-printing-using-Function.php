<?php
function printFibonacci($count) {
    if ($count < 1) {
        echo "Count should be a positive integer.";
        return;
    }
 
    $first = 0;
    $second = 1;
 
    echo "First $count Fibonacci numbers:\n";
 
    for ($i = 0; $i < $count; $i++) {
        echo $first . ' ';
 
        $next = $first + $second;
        $first = $second;
        $second = $next;
    }
}
 
// Call the function to print the first 15 Fibonacci numbers
printFibonacci(15);
