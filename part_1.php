
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

//Problem 4: Find Duplicate Elements in Array

//Input: [1,2,3,4,2,5,1]
//Output: 1, 2

$arr =[1,2,3,4,2,5,1];
$counts =array_count_values($arr);
foreach($counts as $value => $count){
if($count > 1){
  echo "$value";
}
}

/*
roblem 5: Student Grade System

Marks input: 85
Output: A

Grading Rule:

80+ = A

70–79 = B

60–69 = C

50–59 = D

Below 50 = F
*/


function marks($inn){
    if($inn>80) return "A";
    elseif($inn>70) return "B";
    elseif($inn>60) return "C";
    elseif($inn>50) return "D";
    else return "F";
}

echo marks(85);


//Problem 6: Word Count Without Using str_word_count()

//Input: "I love PHP"
//Output: 3

$text =  "I love PHP";
$word = explode(" ",trim($text));
echo count($word);

?>

