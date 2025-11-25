
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



/*
Problem 1: Build a Mini Payment System (OOP)

Create classes:

User

Wallet

Transaction

Requirements:

User can deposit, withdraw, transfer money.

Every transaction must be stored in a transactions array.

Print user balance + transaction history.

Output Example:
Shuvo deposited 500
Shuvo transferred 200 to Rafi
Shuvo's balance: 300

*/

echo "<pre>";


class Transaction {
    public $type, $amount, $from, $to, $time;
    public function __construct($type, $amount, $from, $to = null) {
        $this->type = $type;
        $this->amount = $amount;
        $this->from = $from;
        $this->to = $to;
        $this->time = date('Y-m-d H:i:s');
    }
    public function __toString() {
        if ($this->type === 'transfer') {
            return "{$this->from} transferred {$this->amount} to {$this->to} at {$this->time}";
        }
        return "{$this->from} {$this->type}ed {$this->amount} at {$this->time}";
    }
}

class Wallet {
    public $balance = 0;
    public $transactions = [];
    public function deposit($user, $amount) {
        $this->balance += $amount;
        $this->transactions[] = new Transaction('deposit', $amount, $user);
    }
    public function withdraw($user, $amount) {
        if ($amount > $this->balance) return false;
        $this->balance -= $amount;
        $this->transactions[] = new Transaction('withdraw', $amount, $user);
        return true;
    }
    public function transfer($fromUser, $toUserWallet, $amount) {
        if ($amount > $this->balance) return false;
        $this->balance -= $amount;
        $toUserWallet->balance += $amount;
        $t = new Transaction('transfer', $amount, $fromUser, $toUserWallet->owner);
        $this->transactions[] = $t;
        $toUserWallet->transactions[] = $t;
        return true;
    }
}

class User {
    public $name;
    public $wallet;
    public function __construct($name) {
        $this->name = $name;
        $this->wallet = new Wallet();
        $this->wallet->owner = $name;
    }
    public function deposit($amount) { $this->wallet->deposit($this->name, $amount); }
    public function withdraw($amount) { return $this->wallet->withdraw($this->name, $amount); }
    public function transferTo(User $other, $amount) { return $this->wallet->transfer($this->name, $other->wallet, $amount); }
    public function history() {
        foreach ($this->wallet->transactions as $t) echo $t . PHP_EOL;
    }
}

$shuvo = new User('Shuvo');
$rafi = new User('Rafi');

$shuvo->deposit(500);
$shuvo->transferTo($rafi, 200);
echo "Shuvo's balance: {$shuvo->wallet->balance}\n";
echo "Rafi's balance: {$rafi->wallet->balance}\n";
$shuvo->history();
$rafi->history();


echo "</pre>";


?>


