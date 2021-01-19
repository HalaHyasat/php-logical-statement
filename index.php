<?php

//Question number 1
$units = 300;

if($units <= 50) {
    $bill = $units * 2.5;
}
else if($units > 50 && $units <= 100) {
    $primaryBill = 50 * 2.5;
    $adittionalBill = $units - 50;
    $bill = $primaryBill + ($adittionalBill * 5);
}
else if($units > 100 && $units <= 200) {
    $primaryBill = (50 * 2.5) + (100 * 5);
    $adittionalBill = $units - 150;
    $bill = $primaryBill + ($adittionalBill * 6.20);
}
else {
    $primaryBill = (50 * 2.5) + (100 * 5) + (100 * 6.20);
    $adittionalBill = $units - 250;
    $bill = $primaryBill + ($adittionalBill * 7.5);
}

echo "Q(1): ".$bill."<br>";


//Question number 2
$firstNum = 2;
$secondNum = 3;
$operations = "addition";

if (is_numeric($firstNum) && is_numeric($secondNum)) {
    switch ($operations) {
        case "addition":
           $result = $firstNum + $secondNum;
            break;
        case "subtraction":
           $result = $firstNum - $secondNum;
            break;
        case "multiplication":
            $result = $firstNum * $secondNum;
            break;
        case "division":
            $result = $firstNum / $secondNum;
    }
    echo "Q(2): ".$result."<br>";
}
else {
    echo "Q(2): You should enter numbers only! <br>";
}

//Question number 3
$age = 19;

if ($age >= 18) {
    echo "Q(3): The person is eligible to Vote. <br>";
} else {
    echo "Q(3): The person isn't eligible to Vote. <br>";
}

//Question number 4
$Num = 0;

if($Num > 0) {
    echo "Q(4): The number is positive <br>";

}
else if($Num == 0) {
    echo "Q(4): The number is zero <br>";
}
else {
    echo "Q(4): The number is negative <br>";
}

?>  