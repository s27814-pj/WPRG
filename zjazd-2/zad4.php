<?php

$val1=$_GET['val1'];

checkStuff($val1);

function checkStuff($val1){
    if (($val1>0) && (int)$val1==$val1) doPrime($val1);
}
function doPrime($val1){
    if ($iteration=isPrime($val1) ){
        echo " jest piersza liczba, iteracji: ";
        echo  $iteration;
    }
    else echo "nie jest pierwsza";

    }

function isPrime($n){
    #od 2 do pierwiastka n
    $iteration=0;
    for ($i=2; $i<=sqrt($n); $i++){
        $iteration++;
        if($n%$i==0) return 0;
    }
    return $iteration;
}