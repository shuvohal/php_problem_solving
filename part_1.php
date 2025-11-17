
<?php
//Problem 1: Sum of Even Numbers


$number = [1,2,3,4,5,6,7,8,9,10];
$sum = 0;

foreach($number as $n){
    if($n%2==0){
        $sum+=$n;
    }
}
echo "the number is =$sum";

//Problem 2: Reverse a String

function reve($str){
    return strrev($str);
}
echo reve("hellow world");

//Problem 3: Check Prime Number

function check($n){
    if($n<2) return false;

    for($i=2; $i <= sqrt($n); $i++){
             if($i%$n==0) return false;

             
    }
    return true;
}

echo check(13) ? "prime" :"not prime";


?>

