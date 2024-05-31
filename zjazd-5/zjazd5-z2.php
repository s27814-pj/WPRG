<?php

if(!isSet($_COOKIE['visits'])){
    setcookie("visits","1",time()+5);
    echo "liczba wizyt= 1";
}

else{
    $number=intval($_COOKIE['visits']);
    ++$number;
    setcookie("visits",$number,time()+5);
    echo "liczba wizyt= " . $number;

    if ($number>10) echo "dodatkaowa wiadomosc, lcizba wizyt >10";

}
