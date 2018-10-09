<?php

// 1 
echo "<br> Задание 1: <br>";
$a = 6;
$b = 8;

if (($a>=0)  && ($b>0)) {
    if ($a > $b) {
        echo $a - $b;
    }
    else {
        echo $b - $a;
    }
}

// 2 

$a = 1;
echo "<br><br> Задание 2: <br>" ;
switch($a) {
    case 1: 
    case 2:
    case 3:
    case 4:
    case 5:
    case 6:
    case 7:
    case 8:
    case 9:
    case 10:
    case 11:
    case 12:
    case 13:
    case 14:
    case 15:
    for($i=15; $a<=$i; $a++) {
         echo "<br>" . $a;
         }
    break;
}

//3 

$a = 3;
$b = 5;

function Sum($a, $b) {
    return $a + $b;
}

function Dif($a, $b) {
    return $a - $b;
}

function Mult($a, $b) {
    return $a * $b;
}

function Division($a, $b) {
    return $a / $b;
}

echo "<br><br> Задание 3: <br>";
echo "<br>" . Sum(5,6);
echo "<br>" . Dif(11,4);
echo "<br>" . Mult(3,5);
echo "<br>" . Division(12,6);


// Задание 4 

echo "<br><br> Задание 4: <br>";

function mathOperation($arg1, $arg2, $operation) {
    switch($operation) {
        case "+": 
        echo "<br>" . Sum($arg1,$arg2);
        break;
        case "-": 
        echo "<br>" . Dif($arg1,$arg2);
        break;
        case "*": 
        echo "<br>" . Mult($arg1,$arg2);
        break;
        case "/": 
        echo "<br>" . Division($arg1,$arg2);
        break;
    }
}

echo "5*5: "; 
mathOperation(5,5,"*");


// Задание 5
echo "<br><br> Задание 5: <br>";
$d = getdate();
echo "Год: " .  $d["year"];

// Задание 6

echo "<br><br> Задание 6: <br>";





function power($val, $pow)
{ 
    
    if($pow <= 1){
        return $val;
    } 
    return $val * power($val, $pow-1);


} 


echo "<br> 6^2:" . power(6,2);   
