<?php

include 'helpers/separateOddEven.php';

$numbers = [1,2,3,4,5,6,7,8,9,10];

[$odd, $even] = separateOddEven($numbers);

print "Odd numbers: \n";

print_r($odd);

print "\n Odd numbers: ". implode(' ', $odd) ."\n";

print "\n Even numbers: ". implode(' ', $even) ."\n";

?>