
<?php
/*Write a PHP program to check whether a number is an Armstrong number or not. Return true if the number is Armstrong otherwise return false.

An Armstrong number of three digits is an integer so that the sum of the cubes of its digits is equal to the number itself. For example, 153 is an Armstrong number since 1**3 + 5**3 + 3**3 = 153 
*/
function isArmstrong($number)
{
    $sum = 0;
    $temp = $number;
    while($temp>0)
    {
        $digit = $temp % 10;
        $sum += $digit ** 3;
        $temp = (int)($temp / 10);
    }
    return $sum === $number;
}
$number = 153;
if (isArmstrong($number)) {
    echo "$number is an Armstrong number.";
} else {
    echo "$number is not an Armstrong number.";
}
?>