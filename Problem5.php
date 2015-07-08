<?php

//2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.
//What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?

//I solved this problem with the knowledge I had at the time.  It has since come to my attention that there is a MUCH more efficient way to do it mathematically,
//but there is no way I would have thought of it on my own, because the mathematical laws used were outside of my knowledge.


//I have two solutions to the problem that both do pretty much the same thing.  This first one is much cleaner and easy to follow, 
//whereas the second one is more variable driven and unnecessary with the given inputs

//the number that we will check to see if its the lowest common multiple of 1-20
//we start at 20 and will increase by 20 for every iteration through the main loop.
//since 20 is the highest number in our list of numbers that must evenly divide into the answer,
//it is the most exclusive.  So we will use it as a baseline for analysis.
$integerToCheck = 20;

//while we haven't found the lowest multiple yet, check to see if the current number we're checking is divisible by each number from 20 - 1
//The lowest multiple only really needs to be divisible by the numbers from 20 - 11.
//Being divisible by these numbers guarantees that they are divisible by 10 - 1 because
//each of the numbers in 20-11 is either prime or a multiple of the numbers from 10 - 1.
//20 is not in the condition of the loop because we will only be analyzing multiples of 20 in the first place.
while(  $integerToCheck % 19 > 0 || 
        $integerToCheck % 18 > 0 || 
        $integerToCheck % 17 > 0 || 
        $integerToCheck % 16 > 0 || 
        $integerToCheck % 15 > 0 || 
        $integerToCheck % 14 > 0 || 
        $integerToCheck % 13 > 0 || 
        $integerToCheck % 12 > 0 || 
        $integerToCheck % 11 > 0 ){
            //check the next multiple of 20
            $integerToCheck += 20;   
}

//output
print $integerToCheck ;


?>













<br/>

<?php

//second solution

//The lowest multiple only really needs to be divisible by the numbers from 20 - 11.
//Being divisible by these numbers guarantees that they are divisible by 10 - 1 because
//each of the numbers in 20-11 is either prime or a multiple of the numbers from 10 - 1.
//20 is not in the array because we will only be analyzing multiples of 20 in the first place.
$divisorsArray = array(19,18,17,16,15,14,13,12,11);

//boolean to control main loop
$lowestMultipleFound = false;

//the number that we will check to see if its the lowest common multiple of 1-20
//we start at 20 and will increase by 20 for every iteration through the main loop.
//since 20 is the highest number in our list of numbers that must evenly divide into the answer,
//it is the most exclusive.  So we will use it as a baseline for analysis.
$integerToCheck = 20;

//while we haven't found the lowest multiple yet
while($lowestMultipleFound == false){
    
    //set a variable to track whether or not the current number we're checking can still potentially be the lowest multiple
    $isPotentialLowestMultiple = true;
    
    //for each number in our divisors array
    foreach($divisorsArray as $divisor){
        
        //if the current multiple we're checking can't be evenly divided by this loop iteration's divisor, it is not our answer
        if ($integerToCheck % $divisor > 0){
            $isPotentialLowestMultiple = false;
            
            //increase the number we're checking by 20 -- the next multiple of 20, and break out of the for loop
            $integerToCheck += 20;
            break;
        }
    }
    
    //if our boolean value was not set to false due to any of the divisors not evenly dividing into the multiple, then it is the answer
    if ($isPotentialLowestMultiple){
        
        //stop main loop
        $lowestMultipleFound = true;
        
        //output
        print $integerToCheck ;
    }
}

?>