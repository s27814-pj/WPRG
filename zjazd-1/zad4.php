<?php
$lorem="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
galley of type and scrambled it to make a type specimen book. It has survived not only five
centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
and more recently with desktop publishing software like Aldus PageMaker including versions of
Lorem Ipsum.";

#function isBad($c){
#    if($c is in_array())
#}

$array=explode(" ",$lorem);
$badCharArray = array(",",".",";",":","/","?","'");
/*foreach ($array as $value){
    for ($i=0; $i<strlen($value); $i++){
        if in_array($value[$i], $badCharArray)
    }
}*/

for ($i=0; $i<count($array); $i++){
    for ($j=0; $j<strlen($array[$i]); $j++){
        if (in_array($array[$i][$j], $badCharArray)){
            for($k=$i;$k<count($array);$k++){
                if ($k+1<count($array))$array[$k]=$array[$k+1];
            }
            array_pop($array);
            $i--;
            break;
        }
    }
}


$hashTable=array();
$prevKey="";

foreach($array as $value){
    if ($prevKey==""){
        $hashTable[$value]=null;
        $prevKey=$value;
    }else{
        $hashTable[$prevKey]=$value;
        $prevKey="";
    }


}
print_r($hashTable);

?>