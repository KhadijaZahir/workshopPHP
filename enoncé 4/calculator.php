<?php
declare(strict_types=1);
//fonction qui calculera et retournera le factoriel du nombre d'entrée.
// int argument :first number in the calculation will have to be the input number
function factorial(int $number): float

{
    if($number === 0 or $number === 1) 
    return 1;  
    else 
    return $number*factorial($number-1); // recursive func
    /* $factorial = $number;

    while ($number > 2) { 

        $number--; // decremented by one$number = $number -1 until 2

        $factorial *= $number; //$factorial = $factorial*$number -1
    }
    return $factorial; // factorial will hold the result */
}

//fonction qui retournera la somme des nombres d'entrée (un nombre variable de paramètres).

function sum(): float 
//array_sum: sum of all value in a array
//func_get_args(): hold arg of a func as an array

{
    return array_sum(func_get_args()); 
}
//fonction qui évaluera `$number` entré, qui doit être un nombre entier et qui retournera si le nombre est un nombre premier ou non. Le type de retour de cette fonction est un booléen (bool).


function prime(int $number): bool

{ // everything equal or smaller than 2 is not a prime number
//Prime numbers are positive by definition
//1 is not a prime nbr
    if ($number < 2) {
        // echo "not a prime number";
        return false;
    }
    //Starting with 2, up until the square root of the $number input, we increment $i by 1 and check whether the modulo of the division of $number by $i is 0
    for ($i = 2; $i <= sqrt($number); $i++) {

        if ($number % $i === 0) {
        //when the modulo is 0, then it is not a prime number
        // echo "not a prime number";
            return false;
        }
    }
    // echo "prime number";
    return true;
}
//fonction qui traitera les opérations mathématiques prédéfinies.
    //call_user_func($function_name,$value) is buid-in func used to call the callback given by first parametre..used to call the user-defined func
echo call_user_func('factorial', 0) .'<br>'; // func callable
echo call_user_func('sum', 1, 2) .'<br>';
echo (call_user_func('prime', 21))? "The number is prime." . PHP_EOL : "The number is not prime." . PHP_EOL;

