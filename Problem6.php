<?php
/*The sum of the squares of the first ten natural numbers is,

//12 + 22 + ... + 102 = 385
//The square of the sum of the first ten natural numbers is,

//(1 + 2 + ... + 10)2 = 552 = 3025
//Hence the difference between the sum of the squares of the first ten natural numbers and the square of the sum is 3025 − 385 = 2640.

Find the difference between the sum of the squares of the first one hundred natural numbers and the square of the sum.
*/


//variable to store sum of the squares of 1-100
$sumOfSquares = 0;

//running sum of 1-100
$sum = 0;

//for numbers 1 - 100, add current number's info to the sum of squares and to the sum of the integers
for ($x = 1; $x <= 100; $x++) {
    $sumOfSquares += pow($x, 2);
    $sum += $x;
} 

//once the sum is fully calculated, we store its square in this variable
$squareOfSum = pow($sum, 2);

//output
echo $squareOfSum - $sumOfSquares;

?>
