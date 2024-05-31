<?php
session_start();
if(!isset($_SESSION['uniqueVisits'])) $_SESSION['uniqueVisits']=1;

if(!isSet($_COOKIE['visits'])){
    setcookie("visits","1",time()+60*2);
    echo "liczba wizyt= 1";
    $_SESSION['uniqueVisits']=2;
}

else{
    $number=intval($_COOKIE['visits']);
    if ($_SESSION['uniqueVisits']!=2) ++$number;
    setcookie("visits",$number,time()+60*2);
    echo "liczba wizyt= " . $number;
    $_SESSION['uniqueVisits']=2;

    if ($number>10) echo "dodatkaowa wiadomosc, lcizba wizyt >10";

}
