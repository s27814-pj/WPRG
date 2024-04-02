<?php
$array[0]="jablko";
$array[1]="banan";
$array[2]="pomarancza";
$array[3]="pomidor";
$array[4]="granat";
#echo("Hello");
for($i=0; $i< count($array); $i++){
    for($j=strlen($array[$i])-1; $j>=0; $j--){
        echo(($array[$i][$j]));
    }
    if ($array[$i][0]=='p') echo(" Owoc zaczyna sie litera 'p'");
    echo ("\n");
}
?>