<?php
$floor=10;
$roof=350;
$c=8;
function isPrime($n){
    #od 2 do pierwiastka n
    for ($i=2; $i<=sqrt($n); $i++){
       if($n%$i==0) return false;
    }
    return true;
}
    for($i=$floor; $i<=$roof; $i++){
        if (isPrime($i)) echo ("$i ");
    }


?>