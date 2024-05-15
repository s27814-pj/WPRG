<?php
echo "liczba odwiedzin:";
if (!file_exists("licznik.txt")){
    $file=fopen("licznik.txt", 'w');
    fwrite($file, "1");
    fclose($file);
    echo 1;
}   else{
    $file=fopen("licznik.txt", "r");
    $number= (int)fread($file, filesize("licznik.txt"));
    echo ++$number;
    fclose($file);
    $file=fopen("licznik.txt", "w");
    fwrite($file, $number);
    fclose($file);
}