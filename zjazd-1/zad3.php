<?php
$array[]=0;
$array[]=1;
$target=25;
for($i=2; $i<=$target; $i++){
    $array[]=$array[$i-1]+$array[$i-2];
}
$target=1;
#echo("$array[19]");
foreach ($array as $item){
    if ($item%2==1){
        echo($target++);
        echo(" $item\n");

    }
}
#unset($item);
#echo("$array[19]")
?>