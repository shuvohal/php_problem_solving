
<?php
//13. Display Values in Table


$a=1000;
$b=1200;
$c=1400;
// Display a table with salary information using echo
echo "<table border=1 cellspacing=0 cellpading=0>
<tr> <td><font color=blue>Salary of Mr. A is</td> <td>$a$</font></td></tr> 
<tr> <td><font color=blue>Salary of Mr. B is</td> <td>$b$</font></td></tr>
<tr> <td><font color=blue>Salary of Mr. C is</td> <td>$c$</font></td></tr>
</table>";
?>

<?php
echo "<pre>";
 //14.Arithmetic on Character Variables
 
// Initialize variable $d with value 'A00'
$d = 'A00';

// Loop through 5 iterations
for ($n = 0; $n < 5; $n++) {
    // Increment $d and echo the result
    echo ++$d . "\n";
}
?>

<?php
echo "</pre>";
//Write a PHP function to test whether a number is greater than 30, 20 or 10 using ternary operator.

function checkNumber($num) {
    return ($num > 30) ? "Greater than 30" :
           (($num > 20) ? "Greater than 20" :
           (($num > 10) ? "Greater than 10" :
           "10 or less"));
}

// Example usage
echo checkNumber(35); // Greater than 30
echo "<br>";
echo checkNumber(25); // Greater than 20
echo "<br>";
echo checkNumber(15); // Greater than 10
echo "<br>";
echo checkNumber(5);  // 10 or less
?>
<?php
echo "<pre>";
//Armstrong Number Check

function isArmstrong($num) {
    $original = $num;
    $sum = 0;

    while ($num > 0) {
        $digit = $num % 10;      // get last digit
        $sum += $digit ** 3;    // cube of digit
        $num = intdiv($num, 10); // remove last digit
    }

    return $sum === $original;
}

// Example usage
var_dump(isArmstrong(153)); // true
var_dump(isArmstrong(370)); // true
var_dump(isArmstrong(371)); // true
var_dump(isArmstrong(123)); // false
?>

<?php
echo "</pre>";
//Convert Word to Digits

function wordToDigit($input) {
    $map = [
        "zero"  => "0",
        "one"   => "1",
        "two"   => "2",
        "three" => "3",
        "four"  => "4",
        "five"  => "5",
        "six"   => "6",
        "seven" => "7",
        "eight" => "8",
        "nine"  => "9"
    ];

    $words = explode(";", $input);
    $result = "";

    foreach ($words as $word) {
        $result .= $map[$word];
    }

    return $result;
}

// Example
$input = "zero;three;five;six;eight;one";
echo wordToDigit($input);
?>



