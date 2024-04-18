<?php

$val1=$_GET['val1'];
$val2=$_GET['val2'];
$operator=$_GET['operator'];

calc($val1, $val2, $operator);

function calc($val1, $val2, $operator){
switch ($operator){
    case '+':
        echo $val1+$val2;
        break;
    case '-':
        echo $val1-$val2;
        break;
    case '*':
        echo $val1*$val2;
    case '/':
        if ($val2==0)
            echo "nie przez zero";
        else echo $val1/$val2;

}
}
