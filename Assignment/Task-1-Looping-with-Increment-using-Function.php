<?php
 
function printEvenNumbers($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i . ' ';
    }
}
 
echo "Using for loop: ";
printEvenNumbers(2, 20, 2);
echo "\n";
 
echo "Using while loop: ";
$start = 2;
$end = 20;
$step = 2;
while ($start <= $end) {
    echo $start . ' ';
    $start += $step;
}
echo "\n";
 
echo "Using do-while loop: ";
$start = 2;
$end = 20;
$step = 2;
do {
    echo $start . ' ';
    $start += $step;
} while ($start <= $end);
