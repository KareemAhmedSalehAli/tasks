<?php 

/*

### task -1 
$N = 5; 
for ($i=0; $i<=$N ; $i++) { 
    echo $i;
}

#########################
### task -2

$N = 20;
for ($i=0; $i<=$N ; $i++) {
    if ($i % 2==0 ) {
        echo $i;
    }
}

######################
task -3

$numbers =[ 3,5,9,1,3 ];

        $maxNumber = max($numbers);
        echo "   اكبر عدد هو ال  :    "  ,$maxNumber  ;
        echo "<br>";

########################
### task -4


function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    if ($number == 2) {
        return true;
    }
    if ($number % 2 == 0) {
        return false;
    }
    for ($i = 3; $i * $i <= $number; $i += 2) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}


$handle = fopen("php://stdin", "r");
$input = trim(fgets($handle));
fclose($handle);


$X = intval($input);


if (isPrime($X)) {
    echo "YES\n";
} else {
    echo "NO\n";
}

 
#######################
### task -5 



function processNumber($N) {
   
    $strN = strval($N);
    $reversedStrN = ltrim(strrev($strN), '0');
    echo $reversedStrN . "\n";
    $isPalindrome = ($strN === strrev($strN)) ? "YES" : "NO";

    echo $isPalindrome . "\n";
}

/// Example usage /// 

$N = 00321; 
processNumber($N);


#######################\
### task -6


function myfunction ($n){
    $array = [];
    for ($i = 1; $i <= $n; $i++) {
        if ($n % $i ==0) {
            # code...
        echo $array[] = $i , "<br>";

        }
    }
}
myfunction(7)

#######################
### task -7


function is_lucky($n) {
    // Check if a number is lucky
    return preg_match('/^[47]+$/', $n);
}

function print_lucky_numbers($a, $b) {
    // Print all lucky numbers between a and b inclusive
    $lucky_numbers = array();
    for ($i = $a; $i <= $b; $i++) {
        if (is_lucky($i)) {
            $lucky_numbers[] = $i;
        }
    }
    if (empty($lucky_numbers)) {
        echo "-1";
    } else {
        echo implode(" ", $lucky_numbers);
    }
}

// Read input
list($a, $b) = explode(" ", trim(fgets(STDIN)));

// Print lucky numbers
print_lucky_numbers($a, $b);



*/

### task -8


$N = 5; // Example: N = 5
for ($i = 1; $i <= $N; $i++) {

    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }

    echo "\n";
} 




?>