<?php

$n=$_GET['int'];

$timeStart = microtime(true);
$rec=factorialRec($n);
$timeEnd = microtime(true);
$dur1=$timeEnd-$timeStart;

echo "wynik= " . $rec . " czas trwania = " . ($timeEnd-$timeStart);
$timeStart = microtime(true);
$step=factorialStep($n);
$timeEnd = microtime(true);
$dur2=$timeEnd-$timeStart;

echo "<br>wynik= " . $rec . " czas trwania = " . $dur2;

echo "<br> czas nierekurencyjny byl x razy szybszy x= " .($dur1/$dur2);

function factorialRec($n){
    if ($n>1) return $n * factorialRec($n-1);
    return 1;
}

function factorialStep($n){
    $result=1;
    for ($i=1; $i<=$n; $i++){
        $result=$result*$i;
    }
    return $result;
}

?>