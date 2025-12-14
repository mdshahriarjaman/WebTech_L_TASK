<?php
$num1= 20;
$num2 =30;
$num3= 40;

if ($num1 >= $num2 && $num2>= $num3) {
    echo "Largest number is $num1";
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    echo "Largest number is $num2";
} else {
    echo "Largest number is $num3";
}
?>
