<?php
//1. Write a function to calculate the factorial of a number (a non-negative integer).
//The function accepts the number as an argument.

function factorial ($number){
        $sum = 1;
    while($number !=1){
        $sum = $sum * $number;
        $number--;
    }
    return $sum;
}

echo factorial(5);
echo "<br>";

//2. Write a function to check whether a number is prime or not.
//Note: A prime number (or a prime) is a natural number greater than 1 that has no
//positive divisors other than 1 and itself.

function IsPrime($number)
{
    for($i = 2; $i < $number; $i++)
    {
        if($number % $i == 0)
        {
            return "Not a prime number";
        }
    }
    return "Is a prime number";
}

echo  IsPrime(3);
echo "<br>";


//3. Write a function to reverse a string.

function Reverse($reverseString){
    return strrev($reverseString);
}

$reverseString = "Ashraf";
echo Reverse($reverseString);
echo "<br>";

// Another Way
function ReverseTwo($reverseString2){
    $i = 0;
    $reversedString = '';

    while(!empty($reverseString2[$i])){
        $reversedString = $reverseString2[$i].$reversedString;
        $i++;
    }

    return $reversedString;
}

$reverseString2 = 'farhsA';

echo ReverseTwo($reverseString2);

echo "<br>";


//4. Write a function to sort an string array depending on the alphabetical order .

$stringsToSort = array("Sadi",  "Mohammed", "Ashraf", "Ahmed", "Omar");

function sortingArrayOfStrings ($stringsToSort){
    sort($stringsToSort);

    foreach ($stringsToSort as $value){
        echo $value;
        echo "<br>";
    }
}

sortingArrayOfStrings($stringsToSort);


//print_r($stringsToSort);
echo "<br>";



//5. Write a PHP function that checks whether a string is all lowercase.

function isStringLowerCase($string){
    if(ctype_lower($string)){
        return "this string is all in lower case";
    }else {
        return "not all letters in lower case";
    }
}

echo isStringLowerCase("Ashraf");
echo "<br>";


//6. Write a PHP function that checks whether a passed string is a palindrome or
//not?
//    A palindrome is a word, phrase, or sequence that reads the same backward as
//forward, e.g., madam or nurses run.


function palindromeCheck($reverseString2){
    $i = 0;
    $reversedString = '';

    while(!empty($reverseString2[$i])){
        $reversedString = $reverseString2[$i].$reversedString;
        $i++;
    }

    if($reverseString2 == $reversedString){
        return "This string is palindrome";
    }else {
        return "This string is palindrome";
    }
}
echo palindromeCheck("madam");
echo "<br>";




//7-Write a PHP program to find three numbers from an array such that the sum of
//three consecutive numbers equal to a given number.
//Input : (array(2, 7, 7, 1, 8, 2, 7, 8, 7), 16))

function targetSumNumber($numbers, $value){
    $results = array();
    for($i = 0 ; $i < count($numbers) - 2 ; $i++){
        if($numbers[$i] + $numbers[$i + 1] + $numbers[$i + 2] == $value){
            array_push($results, [$numbers[$i] , $numbers[$i+1], $numbers[$i+2]]);
        }
    }

     print_r($results);
}
$lastQuestionArr = array(2, 7, 7, 1, 8, 2, 7, 8, 7);
targetSumNumber($lastQuestionArr , 16);
