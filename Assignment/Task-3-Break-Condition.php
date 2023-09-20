<?php
$count = 10;
$previous = 0;
$current = 1;
 
echo "First 10 Fibonacci numbers:\n";
echo $previous . " ";
for ($i = 1; $i <= $count; $i++) {
    echo $current . ' ';
 
 
    if ($current > 100) {
        echo "\nFibonacci number exceeds 100. Stopping.\n";
        break;
    }
 
    $next = $previous + $current;
    $previous = $current;
    $current = $next;
}
