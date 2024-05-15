<?php
#$file=$_FILES["f1"]["tmp_name"];
$file=$_GET["f1"];

$stuff=file($file, FILE_IGNORE_NEW_LINES);

$f=fopen($file, "w+");

foreach (array_reverse($stuff) as $single){
fwrite($f, $single . "\n");
echo $single . "</br>";
};
fclose($f);