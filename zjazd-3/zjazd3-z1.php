<?php

$birthDate=$_GET['birthDate'];
$birthMark=strtotime($birthDate);

echo "urodzony dzien tygdnia =" . getdate($birthMark)['weekday'];
echo "<br>ukonczone lata uzytkownika = " . yearsFinished( $birthMark);
echo "<br>dni do kolejnych urodzin = ". untilBirthday($birthMark);
//echo getdate(strtotime("now"))["yday"]+25;




function yearsFinished($mark){
    return getdate(strtotime("now"))["year"]-getdate($mark)["year"];
}
function untilBirthday($mark){
    $yday=getdate(strtotime("now"))["yday"];
    if (getdate($mark)["yday"]==$yday) return 0;
    if (getdate($mark)["yday"]>$yday){
        return (getdate($mark)["yday"]-$yday);
    }
    $next =mktime(1,1,1,getdate($mark)['mon'],getdate($mark)['mday'],getdate(strtotime("now"))["year"]+1);
    $daysCurrentYear = mktime(0,0,0,12,31,getdate(strtotime("now"))["year"]);
    return getdate($next)["yday"]+getdate($daysCurrentYear)["yday"]-$yday;
}


?>